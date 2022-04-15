<?php

namespace Database\Seeders;


  
use Illuminate\Database\Seeder;
use App\Models\User;
   
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
               'name'=>'Admin',
               'email'=>'admin@gmail.com',
                'is_admin'=>'1',
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'محمد دولت ابادی',
               'email'=>'mohammaddolat@gmail.com',
                'is_admin'=>'0',
               'password'=> bcrypt('11111111'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}