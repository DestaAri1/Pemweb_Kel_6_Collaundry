<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
            'name' => 'Desta Ari A',
            'email' => 'desta.ari@gmail.com',
            'password' => bcrypt('destaari'),
            'remember_token' => Str::random(60)
        ]);
        User::create([
            'name' => 'Christopher J',
            'email' => 'cristopher14@gmail.com',
            'password' => bcrypt('christopher'),
            'remember_token' => Str::random(60)
        ]);
        User::create([
            'name' => 'Moh. Bagoes A',
            'email' => 'bagoes.ay@gmail.com',
            'password' => bcrypt('bagoesay'),
            'remember_token' => Str::random(60)
        ]);
    }
}
