<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Roles;
use App\Models\Jenis_Pelanggan;
use App\Models\User;
use App\Models\Petugas;
use App\Models\Pelanggan;
use App\Models\Kasir;
use App\Models\Tagihan;
class DatabaseSeeder extends Seeder
{

    public function run(): void
    {

        Roles::Create([
            'id'            => '1',
            'NamaRole'      => 'Admin',
            'Permission'    => 'Mengelola User, Kasir, Petugas, dan Pelanggan'
        ]);

        Roles::Create([
            'id'            => '2',
            'NamaRole'      => 'Pelanggan',
            'Permission'    => 'Mengelola tagihan pribadi'
        ]);

        Roles::Create([
            'id'            => '3',
            'NamaRole'      => 'Petugas',
            'Permission'    => 'Mengecek penggunaan pelanggan dan membuat Tagihan'
        ]);

        Roles::Create([
            'id'            => '4',
            'NamaRole'      => 'Kasir',
            'Permission'    => 'Mengelola Tagihan'
        ]);

        Roles::Create([
            'id'            => '5',
            'NamaRole'      => 'Guest',
            'Permission'    => 'Tidak Punya Privilege'
        ]);

        User::create([
            'id'            => '2023001',
            'IDRole'        => '1',
            'Username'      => 'Ivan123',
            'Password'      => 'pass',
            'Nama'          => 'Ivander Marvin'
        ]);

        User::create([
            'id'            => '2023002',
            'IDRole'        => '2',
            'Username'      => 'Rafif123',
            'Password'      => 'pass',
            'Nama'          => 'Naufal Rafif'
        ]);

        User::create([
            'id'            => '2023003',
            'IDRole'        => '3',
            'Username'      => 'Karin123',
            'Password'      => 'pass',
            'Nama'          => 'Karin Angela'
        ]);

        User::create([
            'id'            => '2023004',
            'IDRole'        => '2',
            'Username'      => 'John123',
            'Password'      => 'pass',
            'Nama'          => 'John Doe'
        ]);

        User::create([
            'id'            => '2023005',
            'IDRole'        => '2',
            'Username'      => 'Rais123',
            'Password'      => 'pass',
            'Nama'          => 'Rais Siddiq'
        ]);

        User::create([
            'id'            => '2023006',
            'IDRole'        => '2',
            'Username'      => 'Jane123',
            'Password'      => 'pass',
            'Nama'          => 'Jane Doe'
        ]);

        User::create([
            'id'            => '2023007',
            'IDRole'        => '2',
            'Username'      => 'Jack123',
            'Password'      => 'pass',
            'Nama'          => 'Jack Mason'
        ]);

        User::create([
            'id'            => '2023008',
            'IDRole'        => '5',
            'Username'      => 'Alex123',
            'Password'      => 'pass',
            'Nama'          => 'Alex Mason'
        ]);

        User::create([
            'id'            => '2023009',
            'IDRole'        => '4',
            'Username'      => 'Steve123',
            'Password'      => 'pass',
            'Nama'          => 'Steve Jobs'
        ]);

        User::create([
            'id'            => '2023010',
            'IDRole'        => '3',
            'Username'      => 'Peter123',
            'Password'      => 'pass',
            'Nama'          => 'Peter Griffin'
        ]);

        Jenis_Pelanggan::create([
            'IDJenis'           => '001',
            'TarifPerKubik'     => 10000,
            'TarifLebihBatasan' => 15000,
            'Batasan'           => 100
        ]);

        Jenis_Pelanggan::create([
            'IDJenis'           => '002',
            'TarifPerKubik'     => 13000,
            'TarifLebihBatasan' => 17000,
            'Batasan'           => 400
        ]);

        Jenis_Pelanggan::create([
            'IDJenis'           => '003',
            'TarifPerKubik'     => 16000,
            'TarifLebihBatasan' => 20000,
            'Batasan'           => 1000
        ]);

        Petugas::create([
            'NoPetugas'     => '3001',
            'IDUser'        => '2023003',
            'NoTelp'        => '0859876543',
            'Area'          => 'Jebres',
        ]);

        Petugas::create([
            'NoPetugas'     => '3002',
            'IDUser'        => '2023010',
            'NoTelp'        => '0859940484',
            'Area'          => 'Sukoharjo',
        ]);

        Kasir::create([
            'NoKasir'       => '4001',
            'IDUser'        => '2023009',
            'Email'         => 'Steve@uns.ac.id',
            'NoTelp'        => '0859123551',
            'NoRekening'    => 'BNI09012',
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

        Pelanggan::create([
            'NoPelanggan'   => '2002',
            'IDUser'        => '2023004', 
            'IDJenis'       => '002',  
            'NoTelp'        => '0812309843',
            'Email'         => 'Rais@uns.ac.id',
            'Alamat'        => 'Jebres',
            'NoPetugas'     => '3001',
        ]);

        Pelanggan::create([
            'NoPelanggan'   => '2003',
            'IDUser'        => '2023005', 
            'IDJenis'       => '003',  
            'NoTelp'        => '0812331843',
            'Email'         => 'Jane@uns.ac.id',
            'Alamat'        => 'Sukoharjo',
            'NoPetugas'     => '3002',
        ]);
    }
}
