<?php
namespace App\Repositories\Page;

interface PageInterface {
	
	public function getBy($attribute, $column);
	public function getAll();
	public function save($params = []);
	public function update($id, $params = []);
	public function delete($id);
	
	public function getParents();
	
	public function requestData(array $data);
	
}