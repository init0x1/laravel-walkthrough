<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job{

    public static function all(): array{
        return [
            [
                "id"=>1,
                "title"=>"Web Developer",
                "salary"=>"$60,000",
            ],
            [
                "id"=>2,
                "title"=>"Software Engineer",
                "salary"=>"$80,000",
            ],
            [
                "id"=>3,
                "title"=>"Network Engineer",
                "salary"=>"$70,000",
            ],
            [
                "id"=>4,
                "title"=>"Database Administrator",
                "salary"=>"$75,000",
            ]
        ];
    }
    public static function find($id):array{
        $jobs = static::all();
        $job = Arr::first($jobs, fn($job) => $job['id'] == $id);// find the job with the given id and return it if it not found return null
        if(!$job){
            abort(404);
        }
        return $job;
    }
}

?>