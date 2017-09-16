<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Entry extends Model
{




    protected $table = 'entries';
    protected $fillable = ['username', 'email', 'comment'];


}