<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\HasFactory;

//when deal with orm we extends the model class
class Job extends Model{
    // use hasfactory; 
    use Hasfactory;
    protected $table = 'job_listings'; // assign the table name to the model class
    protected $fillable = ['title','salary']; // assign the columns that can be filled by the user

    // create relationship between job and employer
    public function employer(){
        return $this->belongsTo(Employer::class);
    }
    // create relationship between job and tag 
    public function tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id");// this creates a relationship between job and tag using the job_tag table

    }

}

?>