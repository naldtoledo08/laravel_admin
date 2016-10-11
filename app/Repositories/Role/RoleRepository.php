<?php
namespace App\Repositories\Role;
use DB;
use App\Models\Role;
use App\Repositories\Role\RoleInterface;
use App\Repositories\EloquentRepository;

class RoleRepository extends EloquentRepository implements RoleInterface {
	/*
	 /
	*/
	protected $model;

	public function __construct(Role $model) {
		$this->model = $model;
	}


	public function getSideBar($id) {

        $data = DB::table('role_sidebar')
            ->join('pages', 'role_sidebar.page_id', '=', 'pages.id')
            ->where('role_sidebar.role_id', '=', $id)
            ->where('pages.type', '=', 1)
            ->select('pages.*', 'role_sidebar.role_id')
            ->get();

         return $data;
	}


    public function deleteRoleSidebar($page_id){
    	DB::table('role_sidebar')->where('page_id', '=', $page_id)->delete();
    }

    public function createRoleSidebar($role_id, $page_id){
    	DB::table('role_sidebar')->insert(
		    ['role_id' => $role_id, 'page_id' => $page_id]
		);
    }

    public function createRoleSidebarBatch($roles, $page_id){
    	$role_sidebar = array();

    	foreach ($roles as $role) {
    		$role_sidebar[] = array('role_id' => $role, 'page_id' => $page_id);
    	}

    	DB::table('role_sidebar')->insert(
		    $role_sidebar
		);
    }
	
}