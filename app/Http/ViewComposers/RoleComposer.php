<?php

namespace App\Http\ViewComposers;
use App\Repositories\Role\RoleInterface as RoleInterface;
use Illuminate\View\View;
use Auth;
//use App\Helpers\Helper;

class RoleComposer
{
    /**
     * The role repository implementation.
     *
     * @var RoleRepository
     */
    protected $role;

    /**
     * Create a new Role composer.
     *
     * @param  RoleRepository  $roles
     * @return void
     */
    public function __construct(RoleInterface $role)
    {
        // Dependencies automatically resolved by service container...
        $this->role = $role;
    }

    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {   

        $view->with('sidebar_pages',  $this->role->getSideBar(Auth::user()->role_id));
    }
}