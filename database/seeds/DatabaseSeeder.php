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
       Eloquent::unguard();
        
       
       //$this->call('UsersTableSeeder');
       //$this->call('ItemTableSeeder');

       DB::table('users')->delete();

        $users=array(
            array(
                'id'=> 1,
                'name'=>'Aleksandar',
                'email'=>'aleksandar96vasileski@gmail.com',         //creating USER
                'password'=>Hash::make('password')
            )
            );
            DB::table('users')->insert($users);


            DB::table('items')->delete();

        $items=array(
            array(
                'whattodo'=>'Playing football',
                'userId'=> 1 ,
                'status'=> 0                                            //creating task->  TO DO 
            )
            );
            DB::table('items')->insert($items);

       
    }
}