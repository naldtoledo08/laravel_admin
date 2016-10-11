<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    //

	protected $fillable = [
        'parent_id', 'name', 'url', 'type', 'is_parent', 'role_access'
    ];

    protected $table = "pages";


}
