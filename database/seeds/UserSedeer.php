<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Models\Profession as Profesion; 

class UserSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $profession = Profesion::where('title','Backend Developer')->select('id')->first();

        User::create([
            'name' => 'Jose Deuteros D. Marck',
            'email' => 'josewbmx@gmail.com',
            'password' => bcrypt('1233'),
            'profession_id'=> $profession->id
        ]);
    } 
}
