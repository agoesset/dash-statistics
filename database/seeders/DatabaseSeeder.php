<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Jangkauan;
use App\Models\Kunjungan;
use App\Models\Like;
use App\Models\Reach;
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

        // Memasukkan data palsu ke tabel jangkauans
        Jangkauan::factory(7)->create(); // Mengisi tabel jangkauans dengan 7 data

        // Memasukkan data palsu ke tabel reaches
        Reach::factory(7)->create(); // Mengisi tabel reaches dengan 7 data

        // Memasukkan data palsu ke tabel likes
        Like::factory(7)->create(); // Mengisi tabel likes dengan 7 data

        // Memasukkan data palsu ke tabel kunjungans
        Kunjungan::factory(7)->create(); // Mengisi tabel kunjungans dengan 7 data
    }
}
