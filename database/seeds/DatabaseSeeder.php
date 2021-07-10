<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesSeeder::class);

        $data = [
          'name' => "MyAdmin Name",
          'username' => "myadmin",
          'email' => "myadmin@email.com",
          'email_verified_at' => now(),
          'password' => bcrypt('123456'),
          'remember_token' => Str::random(10),
          'role_id' => DB::table('roles')->select('id')
                          ->where('label','admin')
                          ->first()->id,
          'status' => 1,
          'image' => NULL,
          'created_at' => now(),
          'updated_at' => now()
        ];
     
        DB::table('users')->insert($data);

        // Configurations Seeder
        $dataConfig = [
          [
            'key' => "main-title",
            'value' => "ComproIn",
            'description' => "This description for data",
            'created_at' => now(),
            'updated_at' => now(),
            'updated_by' => 0,
            'created_by' => 0,
            'status' => 1
          ],[
            'key' => "fb",
            'value' => "https://www.facebook.com/",
            'description' => "This description for data",
            'created_at' => now(),
            'updated_at' => now(),
            'updated_by' => 0,
            'created_by' => 0,
            'status' => 1
          ],[
            'key' => "ig",
            'value' => "https://www.instagram.com/",
            'description' => "This description for data",
            'created_at' => now(),
            'updated_at' => now(),
            'updated_by' => 0,
            'created_by' => 0,
            'status' => 1
          ],[
            'key' => "tw",
            'value' => "https://www.twitter.com/",
            'description' => "This description for data",
            'created_at' => now(),
            'updated_at' => now(),
            'updated_by' => 0,
            'created_by' => 0,
            'status' => 1
          ],[
            'key' => "phone",
            'value' => "6285640108325",
            'description' => "This description for data",
            'created_at' => now(),
            'updated_at' => now(),
            'updated_by' => 0,
            'created_by' => 0,
            'status' => 1
          ],[
            'key' => "email",
            'value' => "abdulhamid909@gmail.com",
            'description' => "This description for data",
            'created_at' => now(),
            'updated_at' => now(),
            'updated_by' => 0,
            'created_by' => 0,
            'status' => 1
          ],[
            'key' => "address",
            'value' => "Planggu, Trucuk <br> Klaten, 57467 <br> Indonesia",
            'description' => "This description for data",
            'created_at' => now(),
            'updated_at' => now(),
            'updated_by' => 0,
            'created_by' => 0,
            'status' => 1
          ],[
            'key' => "bank_rek",
            'value' => "0988977121989",
            'description' => "This description for data",
            'created_at' => now(),
            'updated_at' => now(),
            'updated_by' => 0,
            'created_by' => 0,
            'status' => 1
          ]
        ];

        DB::table('configurations')->insert($dataConfig);

        // $this->call(UserSeeder::class);
    }
}
