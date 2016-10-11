<?php
namespace App\Repositories\Role;

interface RoleInterface {

	public function getSideBar($id);
	
	public function getAll();

	public function save($params = []);
	public function update($id, $params = []);
	
	public function delete($id);

	public function createRoleSidebarBatch($roles, $page_id);
}