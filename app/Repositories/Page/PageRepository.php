<?php
namespace App\Repositories\Page;
use DB;
use App\Models\Page;
use App\Repositories\Page\PageInterface;
use App\Repositories\EloquentRepository;

class PageRepository extends EloquentRepository implements PageInterface {
	/*
	 /
	*/
	public function __construct(Page $model) {
		$this->model = $model;
	}

	public function getParents(){

		return $this->model
					->where('is_parent', '=', '1')
                    ->get();
	}

	public function requestData(array $data)
    {
    	$roles = isset($data['role']) ? implode(":", $data['role']) : "";

    	$is_parent = 0;

    	if(isset($data['is_parent'])){
    		$data['url'] 		= "";
    		$data['parent_id'] 	= 0;
    		$is_parent 			= 1;
	    }

	    return [
	            'name'  		=> $data['name'],
	            'url'  			=> $data['url'],
	            'parent_id' 	=> $data['parent_id'],
	            'type'  		=> $data['type'],
	            'role_access'	=> $roles,
	            'is_parent'		=> $is_parent
	            //'enable' => isset($data['enable']) ? 1 : 0
	        ];
    }

	
}