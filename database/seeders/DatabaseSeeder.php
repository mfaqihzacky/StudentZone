<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\MataKuliah;
use App\Models\User;
use App\Models\Waktu;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        MataKuliah::create([
            'namaMatKul' => 'KP',
            'namaDosen' => 'Sari Widya',
            'kelas' => 'C',
        ]);
        MataKuliah::create([
            'namaMatKul' => 'SDA',
            'namaDosen' => 'Wiranto',
            'kelas' => 'A',
        ]);
        MataKuliah::create([
            'namaMatKul' => 'BasDat',
            'namaDosen' => 'Dewi',
            'kelas' => 'B',
        ]);

        for($i=0; $i < 11; $i++)
            Waktu::create([ 'jam' => $i,]);

        User::create([
            'nim' => 'L0122102',
            'name' => 'Muhammad Annys',
            'email' => 'annys@gmail.com',
            'password' => bcrypt('12345'),
            'isAdmin' => 1,
        ]);

        User::factory()->count(30)->create();
    }
}
