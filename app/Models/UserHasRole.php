<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class UserHasRole extends Model
{

  protected $fillable = ['user_id', 'role_id'];

}
