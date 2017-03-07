<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Klaravel\Ntrust\Traits\NtrustRoleTrait;

class role extends Model
{
    //
	use NtrustRoleTrait;
	
	protected static $roleProfile = 'user';

	protected $table ='roles';

	 protected $fillable = [
        'name', 'display_name', 'description',
    ];
	
}
