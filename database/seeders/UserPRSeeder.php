<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;    
class UserPRSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $admin = \App\Models\User::where('email','admin@example.com')->first();
       $admin->assignRole('admin');
       $editor = \App\Models\User::where('email','editor@example.com')->first();
       $editor->assignRole('editor');
       $testUser = \App\Models\User::where('email','test@example.com')->first();
       $testUser->assignRole('applicant');

       User::whereNotIn('email',[$admin->email,$editor->email,$testUser->email])->get()->each(function($user){
            $user->assignRole('applicant');
       });

    }
}
