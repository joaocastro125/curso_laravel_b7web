<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUserAndAddressSedd extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // aqui mostra um  inserção automatizados
        // Hash uma senha criptografada 
      DB::table('users')->insert([
         "name"=>"carlos",
         "email"=>"carlos@exemple.com",
         "password"=>Hash::make("123456"),
     
      ]);
      DB::table('addresses')->insert([
        "address"=>"rua 2 de julho nº 44",
      
    
     ]);
    }
}
