<?php
namespace App\Repositories\User;

interface UserInterface {
	
	public function getAll();

	public function getbyId($id, $columns = []);
	public function save($params = []);
	public function update($id, $params = []);
	public function getByRoleId($id, $params = []);

	public function delete($id);


	public function requestData(array $data);
}