<?php
namespace App\Repositories\User;
use DB;
use App\Models\User;
use App\Repositories\User\UserInterface;
use App\Repositories\EloquentRepository;

class UserRepository extends EloquentRepository implements UserInterface {
	/*
	 /
	*/
	public function __construct(User $model) {
		$this->model = $model;
	}


	public function getByRoleId($id, $with = []) {
		$data = $this->model->where('role_id', $id)->get();
        return $data;
	}

	public function requestData(array $data)
    {
        return [
            'name'  => $data['name'],
            'email' => $data['email'],
            'role_id'  => $data['role'],
            'password' => bcrypt($data['password']),
            'enable' => isset($data['enable']) ? 1 : 0
        ];
    }

	
	
}