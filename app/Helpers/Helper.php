<?php
namespace App\Helpers;

use App\Models\Role;
use Cache;
class Helper{

	public static function print_r($data){
		echo "<pre>";
		print_r($data);

	}

	public static function getRoleList(){
		Cache::forget('role_list');
		if (!Cache::has("role_list"))
		{			
			$role_list = Role::all();
			Cache::put('role_list', $role_list, 30);
		}


		return Cache::get("role_list");
	}

	public static function getRoleByID($id){
		$roles = self::getRoleList();
		
		foreach ($roles as $role) {

			if($role->id == $id){
				return $role->name;
			}
		}

		return "N/A";

	}




	public static function getPageType($id){
		switch($id){
			case '1':
				return "Sidebar";
				break;
			case '2':
				return "Navigation Bar";
				break;
			case '3':
				return "Sibebar and Navigation Bar";
				break;
			default:
				return "";
		}
		
	}


	/*public static function getRoleList(){
		//Cache::forget('role_list');
		if (!Cache::has("sidebar"))
		{			
			$role_list = Role::where('id', '!=' , 1)->get();
			Cache::put('role_list', $role_list, 30);
		}

		return Cache::get("role_list");
	}*/

}