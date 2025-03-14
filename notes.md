- create component that will hold layout of the view
- slot for the content : act like a variable that can be passed to the component
- slot like `<?php echo $slot; ?>`
- attributes in blade used we need to dynamically pass variables(tags) to the view
- props in blade 


##  day 6 
- create routes and pass data to the view

## day 7
- create model for the jobs and use it in the controller

## day 8 
- working with database 
- create migration for the jobs table `php artisan make:migration create_job_listings_table`
- run the migration `php artisan migrate`

## day 9 
-- Eloquent ORM ? 
- create a model for the jobs table `php artisan make:model Job`

## day 10
- factory 
- create factory for the jobs table `php artisan make:factory JobFactory --model=Job`
- we can run the factory using `php artisan tinker` and then `App\Models\User::factory(100)->create();`
- we need to create employer model with its factory and migration `php artisan make:model Employer -m -f`
- we need to create relationship between the employer and the job model 
- after then we need to get the db refresh `php artisan migrate:refresh `
- create job factory `php artisan make:factory JobFactory`

## day 11 
- two Eloquent relationship types: `belongsTo()` and `hasMany()`.
- we need to create relationship between Employer and Job this done in Models

## day 12 
- working with pivot tables 
- `belongsToMany()` relationship
- we need to create tags  and job_tag table to create relationship between them

## day 14 
- working with pagination 
- we can use custome ui to support pagination by adding it to `AppServiceProvider`
