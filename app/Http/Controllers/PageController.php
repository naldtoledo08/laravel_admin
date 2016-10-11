<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repositories\Page\PageInterface as PageInterface;
use App\Repositories\Role\RoleInterface as RoleInterface;
use App\Helpers\Helper;

use Illuminate\Support\Facades\Route;


class PageController extends Controller
{
    
    public function __construct(PageInterface $page, RoleInterface $role) {
        $this->page = $page;
        $this->role = $role;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = $this->page->getAll();

        return view("pages.page.index", ['pages'=> $pages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Helper::getRoleList(); 

       
        return view("pages.page.create", ["roles"=> $roles, 'parent_pages'=> $this->page->getParents()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validation = array(
                 'name' => 'required|max:50|unique:pages'
            );
        
        if(!$request->input('is_parent'))
            $validation['url'] = 'required|max:100';

        
        $this->validate($request, $validation);        
               
        $data = $this->page->requestData($request->all());
        $result = $this->page->save($data);


        if ($data['type'] > 0 && $request->has('role')) {         
            $this->role->createRoleSidebarBatch($request->role, $result->id);
        }

        return redirect('/page')
                    ->with('message', $request->name. 'Page successfully saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
