<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Klaravel\Ntrust\Traits\NtrustPermissionTrait;

class Permission extends Model
{
	use NtrustPermissionTrait;
    //
	protected static $roleProfile = 'user';

	protected $table ='permissions';

	 protected $fillable = [
        'name', 'display_name', 'description',
    ];
}
