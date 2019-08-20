<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // $this->call(UsersTableSeeder::class);
       DB::statement('SET FOREIGN_KEY_CHECKS=0');
       DB::table('users')->truncate();
       DB::table('roles')->truncate();
       DB::table('instructors')->truncate();
    

       factory(App\User::class,10)->create();
       factory(App\Role::class,3)->create();
       factory(App\Instructor::class,5)->create();



    }


}
