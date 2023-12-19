<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User(); // nr1

        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = hash::make("admin");

        $user->save();

        $user = new User(); // nr2

        $user->name = 'Wim';
        $user->email = 'Wim@gmail.com';
        $user->password = hash::make("wim");

        $user->save();

        $user = new User(); // nr3

        $user->name = 'Ben';
        $user->email = 'Ben@gmail.com';
        $user->password = hash::make("ben");

        $user->save();

        $user = new User(); // nr4

        $user->name = 'Lea';
        $user->email = 'Lea@gmail.com';
        $user->password = hash::make("lea");

        $user->save();

        $user = new User(); // nr5

        $user->name = 'Jos';
        $user->email = 'Jos@gmail.com';
        $user->password = hash::make("jos");

        $user->save();

        $user = new User(); // nr6
 
        $user->name = 'Boef';
        $user->email = 'Boef@gmail.com';
        $user->password = hash::make("boef");

        $user->save();

        $user = new User(); // nr7

        $user->name = 'Wiebe';
        $user->email = 'Wiebe@gmail.com';
        $user->password = hash::make("wiebe");
        
        $user->save();

        $user = new User(); // nr8

        $user->name = 'Joop';
        $user->email = 'Joop@gmail.com';
        $user->password = hash::make("joop");

        $user->save();

        $user = new User(); // nr9

        $user->name = 'Geert';
        $user->email = 'Geert@gmail.com';
        $user->password = hash::make("geert");

        $user->save();

        $user = new User(); // nr10

        $user->name = 'Sieb';
        $user->email = 'Sieb@gmail.com';
        $user->password = hash::make("sieb");

        $user->save();

        $user = new User(); // nr11

        $user->name = 'Inge';
        $user->email = 'Inge@gmail.com';
        $user->password = hash::make("inge");

        $user->save();
    }
}
