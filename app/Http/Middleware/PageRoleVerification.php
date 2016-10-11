<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Page\PageInterface as PageInterface;
//use App\Helpers\Helper;

class PageRoleVerification
{

    public function __construct(PageInterface $page) {
        $this->page = $page;
    }


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $page = $request->route()->getPath();
        $role_id = Auth::user()->role_id;


        $info = $this->page->getBy('url', '/'.$page, true);

        if($info ){
            $role_access = explode(':', $info->role_access);
            if (!in_array($role_id, $role_access)) {
                return response('Unauthorized.', 401);
            }
        }
       
        return $next($request);
    }
}
