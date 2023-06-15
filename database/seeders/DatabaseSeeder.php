<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roles;
use App\Models\Jenis_Pelanggan;
use App\Models\Users;
use App\Models\Petugas;
use App\Models\Pelanggan;
use App\Models\Kasir;
use App\Models\Tagihan;
class DatabaseSeeder extends Seeder
{

    public function run(): void
    {

        Roles::Create([
            'IDRole'        => '1',
            'NamaRole'      => 'Admin',
            'Permission'    => 'Mengelola User, Kasir, Petugas, dan Pelanggan'
        ]);

        Roles::Create([
            'IDRole'        => '2',
            'NamaRole'      => 'Pelanggan',
            'Permission'    => 'Mengelola tagihan pribadi'
        ]);

        Roles::Create([
            'IDRole'        => '3',
            'NamaRole'      => 'Petugas',
            'Permission'    => 'Mengecek penggunaan pelanggan dan membuat Tagihan'
        ]);

        Roles::Create([
            'IDRole'        => '4',
            'NamaRole'      => 'Kasir',
            'Permission'    => 'Mengelola Tagihan'
        ]);



        Users::create([
            'IDUser'        => '2023001',
            'IDRole'        => '1',
            'Username'      => 'Ivan123',
            'PassUser'      => '123',
            'NamaUser'      => 'Ivander Marvin'
        ]);

        Users::create([
            'IDUser'        => '2023002',
            'IDRole'        => '2',
            'Username'      => 'Rafif123',
            'PassUser'      => '123',
            'NamaUser'      => 'Naufal Rafif'
        ]);

        Users::create([
            'IDUser'        => '2023003',
            'IDRole'        => '3',
            'Username'      => 'Karin123',
            'PassUser'      => '123',
            'NamaUser'      => 'Karin Angela'
        ]);

        Users::create([
            'IDUser'        => '2023004',
            'IDRole'        => '4',
            'Username'      => 'John123',
            'PassUser'      => '123',
            'NamaUser'      => 'John Doe'
        ]);

        Jenis_Pelanggan::create([
            'IDJenis'           => '001',
            'TarifPerKubik'     => 10000,
            'TarifLebihBatasan' => 15000,
            'Batasan'           => 100
        ]);

        Petugas::create([
            'NoPetugas'     => '3001',
            'IDUser'        => '2023003',
            'NoTelp'        => '085987654',
            'Area'          => 'Jebres',
        ]);
        Pelanggan::create([
            'NoPelanggan'   => '2001',
            'IDUser'        => '2023002', 
            'IDJenis'       => '001',  
            'NoTelp'        => '0812345678',
            'Email'         => 'Rafif@uns.ac.id',
            'Alamat'        => 'Jebres',
            'NoPetugas'     => '3001',
        ]);
    }
}
