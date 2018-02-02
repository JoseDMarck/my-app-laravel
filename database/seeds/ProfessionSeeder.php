<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Models\Profession as Profesion;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        

        Profesion::create([
            'title' => 'Backend Developer',
        ]);

        Profesion::create([
            'title' => 'Frontend Developer',
        ]);

        Profesion::create([
            'title' => 'Master Designer',
        ]);

        Profesion::create([
            'title' => 'Web Developer',
        ]);

      /*  DB::table('professions')->insert([
            'title' => 'Frontend Developer',
        ]);

        DB::table('professions')->insert([
            'title' => 'Master Designer',
        ]);

        DB::table('professions')->insert([
            'title' => 'Web Developer',
        ]); */
    }
}
