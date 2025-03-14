<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    /** @use HasFactory<\Database\Factories\TagFactory> */
    use HasFactory;
    // create relationship between tag and job
    public function jobs()
     {
         return $this->belongsToMany(Job::class, relatedPivotKey: 'job_listing_id'); // this creates a relationship between tag and job using the job_tag table
     }
}
