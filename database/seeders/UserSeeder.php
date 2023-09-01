<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
	        	'name' => 'Johan Chate',
	        	'email' => 'soytcljohant@gmail.com',
                'email_verified_at' => now(),
	        	'password' =>  bcrypt('tcljohant'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ],
            [
	        	'name' => 'anuel aa',
	        	'email' => 'soytclanuelt@gmail.com',
                'email_verified_at' => now(),
	        	'password' =>  bcrypt('tclanuelt'),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')

            ]
        ]);
    }
}
