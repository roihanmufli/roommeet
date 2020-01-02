<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // DB::table('users')->insert([
        //     'nim_nrp' => '1234',
        //     'name' => 'admin',
        //     'usertype' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('12345678'),
        //     'remember_token' => Str::random(10),
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        DB::table('users')->insert([
            'nim_nrp' => '1710511064',
            'name' => 'Kartika',
            'email' => 'kartika@gmail.com',
            'password' => bcrypt('12345678'),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

            // DB::table('rooms')->insert([
            //     'kode_ruangan' => 'FIK-201',
            //     'lokasi' => 'Dewi Sartika',
            //     'kapasitas' => 40,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ]);

            // DB::table('rooms')->insert([
            //     'kode_ruangan' => 'FIK-202',
            //     'lokasi' => 'Dewi Sartika',
            //     'kapasitas' => 40,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ]);

            // DB::table('rooms')->insert([
            //     'kode_ruangan' => 'FIK-203',
            //     'lokasi' => 'Dewi Sartika',
            //     'kapasitas' => 40,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ]);

            // DB::table('rooms')->insert([
            //     'kode_ruangan' => 'FIK-301',
            //     'lokasi' => 'Dewi Sartika',
            //     'kapasitas' => 40,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ]);

            // DB::table('rooms')->insert([
            //     'kode_ruangan' => 'FIK-302',
            //     'lokasi' => 'Dewi Sartika',
            //     'kapasitas' => 40,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ]);

            // DB::table('rooms')->insert([
            //     'kode_ruangan' => 'FIK-303',
            //     'lokasi' => 'Dewi Sartika',
            //     'kapasitas' => 40,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ]);

            // DB::table('rooms')->insert([
            //     'kode_ruangan' => 'FIK-401',
            //     'lokasi' => 'Dewi Sartika',
            //     'kapasitas' => 40,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ]);

            // DB::table('rooms')->insert([
            //     'kode_ruangan' => 'FIK-402',
            //     'lokasi' => 'Dewi Sartika',
            //     'kapasitas' => 40,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ]);

            // DB::table('rooms')->insert([
            //     'kode_ruangan' => 'FIK-403',
            //     'lokasi' => 'Dewi Sartika',
            //     'kapasitas' => 40,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ]);


            // //ki hajar dewantara
            // DB::table('rooms')->insert([
            //     'kode_ruangan' => 'FIKLAB-201',
            //     'lokasi' => 'Ki Hajar Dewantara',
            //     'kapasitas' => 40,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ]);

            // DB::table('rooms')->insert([
            //     'kode_ruangan' => 'FIKLAB-202',
            //     'lokasi' => 'Ki Hajar Dewantara',
            //     'kapasitas' => 40,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ]);

            // DB::table('rooms')->insert([
            //     'kode_ruangan' => 'FIKLAB-203',
            //     'lokasi' => 'Ki Hajar Dewantara',
            //     'kapasitas' => 40,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ]);

            // DB::table('rooms')->insert([
            //     'kode_ruangan' => 'FIKLAB-301',
            //     'lokasi' => 'Ki Hajar Dewantara',
            //     'kapasitas' => 40,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ]);

            // DB::table('rooms')->insert([
            //     'kode_ruangan' => 'FIKLAB-302',
            //     'lokasi' => 'Ki Hajar Dewantara',
            //     'kapasitas' => 40,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ]);

            // DB::table('rooms')->insert([
            //     'kode_ruangan' => 'FIKLAB-303',
            //     'lokasi' => 'Ki Hajar Dewantara',
            //     'kapasitas' => 40,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ]);

            // DB::table('rooms')->insert([
            //     'kode_ruangan' => 'FIKLAB-401',
            //     'lokasi' => 'Ki Hajar Dewantara',
            //     'kapasitas' => 40,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ]);

            // DB::table('rooms')->insert([
            //     'kode_ruangan' => 'FIKLAB-402',
            //     'lokasi' => 'Ki Hajar Dewantara',
            //     'kapasitas' => 40,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ]);

            // DB::table('rooms')->insert([
            //     'kode_ruangan' => 'FIKLAB-403',
            //     'lokasi' => 'Ki Hajar Dewantara',
            //     'kapasitas' => 40,
            //     'created_at' => now(),
            //     'updated_at' => now(),
            // ]);
    }
}
