<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
  
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $users = [
            [
               'name'=>'Super Admin',
               'email'=>'superAdmin@example.com',
               'password'=> bcrypt('123456789'),
               'role'=>'admin',
               'no_telp'=>'0987654321',
               'domisili'=>'Mabes Admin',
               'gender'=>'Attack Helicopter',
               'usia'=>69            
            ],
            [
               'name'=>'Admin Pengelola',
               'email'=>'adminpengelola@example.com',
               'role'=> 'pengelola',
               'password'=> bcrypt('123456789'),
               'no_telp'=>'0987654321',
               'domisili'=>'Mabes Pengelola',
               'gender'=>'Attack Helicopter',
               'usia'=>69   
            ],
            [
               'name'=>'Admin Wisatawan',
               'email'=>'adminwisatawan@example.com',
               'role'=>'wisatawan',
               'password'=> bcrypt('123456789'),
               'no_telp'=>'0987654321',
               'domisili'=>'Kolong Jembatan',
               'gender'=>'Attack Helicopter',
               'usia'=>69   
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}