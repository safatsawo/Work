<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['Fname','Lname','services','phone','date','time','message'];
}
