<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Repositories\User\UserInterface as UserInterface;
use App\Helpers\Helper;

class UserController extends Controller
{

    public function __construct(UserInterface $user) {
        $this->user = $user;
    }


    private function getRoleList(){
        

        return $roles;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $data = $this->user->getAll();

        return view("pages.user.index", ['users'=> $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.user.create", ['roles' => Helper::getRoleList()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            'name'      => 'required|max:255',
            'email'     => 'required|email|max:255|unique:users',
            'password'  => 'required|min:6|confirmed',
        ]);


        $data = $this->user->requestData($request->all());

        $this->user->save($data);

        return redirect('/user')
                    ->with('message', 'Registration successful!'. $request->name .' Can now access this site with his Role: '. Helper::getRoleByID($request->role));
    }


    /*protected function registerData(array $data)
    {

        return [
            'name'  => $data['name'],
            'email' => $data['email'],
            'role_id'  => $data['role'],
            'password' => bcrypt($data['password']),
            'enable' => isset($data['enable']) ? 1 : 0
        ];
    }*/


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
