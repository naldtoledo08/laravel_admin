<?php
namespace App\Repositories;

class EloquentRepository {

	public function __construct(Model $model) {
		$this->model = $model;
	}	

	public function getById($id, $with = []) {
		return $this->model->with($with)->where('id', $id)->first();
	}
	
	public function save($params = []) {
		$model = new $this->model;
        $model->fill($params);
        $model->save();

        return $model;
	}
	
	public function update($id, $params = []) {
        $this->model->where('id', $id)->update($params);
	}
	
	public function delete($id) {
        $this->model->where('id', $id)->update(['active' => 0]);
	}

	public function getAll() {
		return $this->model->where(['active' => 1])->get();
	}

	public function getBy($attribute, $column, $single_row = false)
    {	
    	if($single_row){
    		return $this->model->where($attribute, $column)->first();
    	}
        
        return $this->model->where($attribute, $column)->get();
    }

}