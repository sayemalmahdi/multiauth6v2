<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'role_id'=>'1',
        	'name'=>'Md.Admin',
        	'username'=>'admin',
        	'email'=>'admin@gmail.com',
        	'password'=>bcrypt('rootadmin'),        	
        ]);
        DB::table('users')->insert([
        	'role_id'=>'2',
        	'name'=>'Md.Author',
        	'username'=>'author',
        	'email'=>'author@gmail.com',
        	'password'=>bcrypt('rootauthor'),
        ]);
        DB::table('users')->insert([
            'role_id'=>'3',
            'name'=>'Md.User',
            'username'=>'user',
            'email'=>'user@gmail.com',
            'password'=>bcrypt('rootuser'),
        ]);
    }
}
