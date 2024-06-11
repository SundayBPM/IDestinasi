<?php
  
namespace Database\Seeders;
  
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
  
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
               'name'=>'Admin Wisatawan',
               'email'=>'adminwisatawan@example.com',
               'role'=>'wisatawan',
               'password'=> bcrypt('123456789'),
               'no_telp'=>'0987654321',
               'domisili'=>'Kolong Jembatan',
               'gender'=>'Attack Helicopter',
               'usia'=>69   
            ],
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => bcrypt('hashed_password'), // assuming 'hashed_password' is already hashed
                'role' => 'wisatawan',
                'no_telp' => '123456789',
                'domisili' => 'Jakarta',
                'personalisi' => json_encode(['interests' => ['Travel', 'Food']]),
                'gender' => 'male',
                'usia' => 30,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Alice Johnson',
                'email' => 'alice@example.com',
                'password' => bcrypt('hashed_password'),
                'role' => 'wisatawan',
                'no_telp' => '123456789',
                'domisili' => 'Jakarta',
                'personalisi' => json_encode(['interests' => ['Travel', 'Food']]),
                'gender' => 'female',
                'usia' => 30,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'password' => bcrypt('hashed_password'),
                'role' => 'wisatawan',
                'no_telp' => '987654321',
                'domisili' => 'Bandung',
                'personalisi' => json_encode(['interests' => ['Reading', 'Music']]),
                'gender' => 'female',
                'usia' => 25,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Michael Johnson',
                'email' => 'michael@example.com',
                'password' => bcrypt('hashed_password'),
                'role' => 'wisatawan',
                'no_telp' => '555555555',
                'domisili' => 'Surabaya',
                'personalisi' => json_encode(['interests' => ['Sports', 'Movies']]),
                'gender' => 'male',
                'usia' => 35,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Emily Brown',
                'email' => 'emily@example.com',
                'password' => bcrypt('hashed_password'),
                'role' => 'wisatawan',
                'no_telp' => '777777777',
                'domisili' => 'Yogyakarta',
                'personalisi' => json_encode(['interests' => ['Cooking', 'Art']]),
                'gender' => 'female',
                'usia' => 28,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'William Taylor',
                'email' => 'william@example.com',
                'password' => bcrypt('hashed_password'),
                'role' => 'wisatawan',
                'no_telp' => '999999999',
                'domisili' => 'Medan',
                'personalisi' => json_encode(['interests' => ['Photography', 'Technology']]),
                'gender' => 'male',
                'usia' => 32,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Olivia Martinez',
                'email' => 'olivia@example.com',
                'password' => bcrypt('hashed_password'),
                'role' => 'wisatawan',
                'no_telp' => '111111111',
                'domisili' => 'Semarang',
                'personalisi' => json_encode(['interests' => ['Fashion', 'Dancing']]),
                'gender' => 'female',
                'usia' => 27,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'James Anderson',
                'email' => 'james@example.com',
                'password' => bcrypt('hashed_password'),
                'role' => 'wisatawan',
                'no_telp' => '222222222',
                'domisili' => 'Denpasar',
                'personalisi' => json_encode(['interests' => ['Gardening', 'Hiking']]),
                'gender' => 'male',
                'usia' => 40,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Sophia Garcia',
                'email' => 'sophia@example.com',
                'password' => bcrypt('hashed_password'),
                'role' => 'wisatawan',
                'no_telp' => '333333333',
                'domisili' => 'Makassar',
                'personalisi' => json_encode(['interests' => ['Writing', 'Gaming']]),
                'gender' => 'female',
                'usia' => 23,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
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
                'name'=>'Admin Pengelola ke 1',
                'email'=>'adminpengelola1@example.com',
                'role'=> 'pengelola',
                'password'=> bcrypt('123456789'),
                'no_telp'=>'11111111111',
                'domisili'=>'Mabes Pengelola',
                'gender'=>'Attack Helicopter',
                'usia'=>11 
             ],
             [
                'name'=>'Admin Pengelola ke 2',
                'email'=>'adminpengelola2@example.com',
                'role'=> 'pengelola',
                'password'=> bcrypt('123456789'),
                'no_telp'=>'22222222222',
                'domisili'=>'Mabes Pengelola',
                'gender'=>'Attack Helicopter',
                'usia'=>22   
             ],
             [
                'name'=>'Admin Pengelola ke 3',
                'email'=>'adminpengelola3@example.com',
                'role'=> 'pengelola',
                'password'=> bcrypt('123456789'),
                'no_telp'=>'33333333333',
                'domisili'=>'Mabes Pengelola',
                'gender'=>'Attack Helicopter',
                'usia'=>33  
             ],
             [
                'name'=>'Admin Pengelola ke 4',
                'email'=>'adminpengelola4@example.com',
                'role'=> 'pengelola',
                'password'=> bcrypt('123456789'),
                'no_telp'=>'44444444444',
                'domisili'=>'Mabes Pengelola',
                'gender'=>'Attack Helicopter',
                'usia'=>44   
             ],
             [
                'name'=>'Admin Pengelola ke 5',
                'email'=>'adminpengelola5@example.com',
                'role'=> 'pengelola',
                'password'=> bcrypt('123456789'),
                'no_telp'=>'55555555555',
                'domisili'=>'Mabes Pengelola',
                'gender'=>'Attack Helicopter',
                'usia'=>55   
             ],
             [
                'name'=>'Admin Pengelola ke 6',
                'email'=>'adminpengelola6@example.com',
                'role'=> 'pengelola',
                'password'=> bcrypt('123456789'),
                'no_telp'=>'66666666666',
                'domisili'=>'Mabes Pengelola',
                'gender'=>'Attack Helicopter',
                'usia'=>66   
             ],
             [
                'name'=>'Admin Pengelola ke 7',
                'email'=>'adminpengelola7@example.com',
                'role'=> 'pengelola',
                'password'=> bcrypt('123456789'),
                'no_telp'=>'77777777777',
                'domisili'=>'Mabes Pengelola',
                'gender'=>'Attack Helicopter',
                'usia'=>77   
             ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}