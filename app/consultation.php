<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use App\consultation;
class consultation extends Model
{
    protected $fillable = ['firstname','lastname','services','phone','date','time','message'];
}
