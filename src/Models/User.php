<?php

namespace Satyam\Contact\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    // use SoftDeletes;

    protected $table = 'users';

    // protected $primaryKey = 'id';

    protected $date = ['deleted_at'];

    protected $fillable = ['firstName','middleName','lastName','email','avatar','departmentId','designationId'];


}
