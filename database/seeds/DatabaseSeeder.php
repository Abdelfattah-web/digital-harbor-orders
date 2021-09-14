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

        if(DB::table('status')->get()->count() == 0){

            DB::table('status')->insert([

                [
                    'name'  => 'New Order' ,
                ],
                [
                    'name'  => 'Processing' ,
                ],
                [
                    'name'  => 'Merged' ,
                ],
                [
                    'name'  => 'Ready' ,
                ],
                [
                    'name'  => 'Special Services' ,
                ]

            ]);

        }
    }
}
