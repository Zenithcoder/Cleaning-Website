<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clean extends Model
{
    protected $fillable=['name','lname','phone','email','service','address','facility'];
}
