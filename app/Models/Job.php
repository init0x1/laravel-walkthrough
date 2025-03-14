<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;

//when deal with orm we extends the model class
class Job extends Model{
    protected $table = 'job_listings'; // assign the table name to the model class
    protected $fillable = ['title','salary']; // assign the columns that can be filled by the user

}

?>