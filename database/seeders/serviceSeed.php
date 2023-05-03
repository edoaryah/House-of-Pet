<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Service;
use App\Models\User;

class serviceSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Service::create([
            'paket' => 'Paket Kering',
            'harga' => 25000,
            'keterangan' => 'Kering Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at maximus quam. Curabitur cursus urna mauris, ',
        ]);

        Service::create([
            'paket' => 'Paket Sehat',
            'harga' => 60000,
            'keterangan' => 'Sehat Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at maximus quam. Curabitur cursus urna mauris, ',
        ]);

        Service::create([
            'paket' => 'Paket Preventif',
            'harga' => 70000,
            'keterangan' => 'Preventif Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at maximus quam. Curabitur cursus urna mauris, ',
        ]);

        Service::create([
            'paket' => 'Paket Kutu',
            'harga' => 70000,
            'keterangan' => 'Kutu Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at maximus quam. Curabitur cursus urna mauris, ',
        ]);

        Service::create([
            'paket' => 'Paket Jamur',
            'harga' => 90000,
            'keterangan' => 'Jamur Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus at maximus quam. Curabitur cursus urna mauris, ',
        ]);

        User::create([
            'name' => 'Andi',
            'email' => 'andi@gmail.com',
            'alamat' => 'Jalan Merdeka 1',
            'noHp' => '08111',
            'level' => 'user',
            'password' => bcrypt('123123123'),
        ]);

        User::create([
            'name' => 'Bima',
            'email' => 'bima@gmail.com',
            'alamat' => 'Jalan Merdeka 2',
            'noHp' => '08222',
            'level' => 'user',
            'password' => bcrypt('123123123'),
        ]);

        User::create([
            'name' => 'Cahyo',
            'email' => 'cahyo@gmail.com',
            'alamat' => 'Jalan Merdeka 3',
            'noHp' => '08333',
            'level' => 'user',
            'password' => bcrypt('123123123'),
        ]);

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'alamat' => 'Jalan Merdeka 4',
            'noHp' => '04444',
            'level' => 'admin',
            'password' => bcrypt('admin123'),
        ]);


    }
}
