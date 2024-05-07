<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		DB::table('users')->insert([
			'id' 				  => Str::uuid()->toString(),
			'first_name' 	=> 'Jaih Real',
			'middle_name' => 'Pallar',
			'last_name' 	=> 'Sasing',
			'email' 		  => 'jaihrealsasing@gmail.com',
			'password' 	  => Hash::make('12345678'),
			'role' 		    => 'Administrator',
			'created_at'  => Carbon::now(),
			'updated_at'  => Carbon::now(),
			'email_verified_at' => Carbon::now(),
		]);
	}
}
