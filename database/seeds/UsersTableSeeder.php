<?php

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Http\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('!AdminWeb3646'),
            'remember_token' => Hash::make('admin')
        ]);
        User::create([
            'name' => 'sapu jagat',
            'email' => 'sapujagat@gmail.com',
            'password' => Hash::make('!SapuJagat3646'),
            'remember_token' => Hash::make('admin')
        ]);
    }
}