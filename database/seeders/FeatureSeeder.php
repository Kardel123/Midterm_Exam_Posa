<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('features')->insert([
            ['name' => 'Model', 'description' => 'Represents the data and the business logic of the application.'],
            ['name' => 'View', 'description' => 'Represents the presentation layer of the application.'],
            ['name' => 'Controller', 'description' => 'Handles the user requests and returns the appropriate response.'],
            ['name' => 'Routes', 'description' => 'Defines the URLs and their corresponding actions.'],
            ['name' => 'Middleware', 'description' => 'Filters HTTP requests entering your application.'],
            ['name' => 'Blade Templates', 'description' => 'Simple yet powerful templating engine provided with Laravel.'],
            ['name' => 'Migrations', 'description' => 'Version control for the database, allowing the team to modify the database schema.'],
            ['name' => 'Seeders', 'description' => 'Used to populate the database with initial or testing data.'],
            ['name' => 'Database', 'description' => 'The storage of application data.'],
            ['name' => 'Eloquent ORM', 'description' => 'An ORM that provides an easy way to interact with the database.'],
        ]);
    }
}