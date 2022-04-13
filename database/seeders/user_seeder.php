<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class user_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nik'=>12345,
            'name'=>'Naufal Annaf',
            'password'=>bcrypt('naufalannafi')
        ]);

        User::create([
            'nik'=>56789,
            'name'=>'Elang Gandara',
            'password'=>bcrypt('elanggandara')
        ]);
    }
}
