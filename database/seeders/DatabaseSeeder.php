<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Anggota;
use App\Models\Rak;
use App\Models\Pengembalian;
use App\Models\Petugas;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Anggota::create([
            "kode_anggota"  => '123456789',
            "nama_anggota" => 'Ferdi Susanto',
            "jenis_kelamin" => 'L',
            "jurusan_anggota" => 'RPL',
            "no_telp" => '081905883680',
            "alamat"  =>'Ntar di serlok'
        ]);

        Anggota::create([
            "kode_anggota"  => '123456780',
            "nama_anggota" => 'Funky Alamsyah',
            "jenis_kelamin" => 'P',
            "jurusan_anggota" => 'BDP',
            "no_telp" => '081111111',
            "alamat"  =>'Disana'
        ]);

        Petugas::create([
            "nama_petugas" => 'Babeh',
            "jabatan_petugas" => 'security',
            "no_telp_petugas" => '01010101010',
            "alamat_petugas" => 'disamping sekolah'
        ]);

        Petugas::create([
            "nama_petugas" => 'Agung',
            "jabatan_petugas" => 'Admin',
            "no_telp_petugas" => '012220101010',
            "alamat_petugas" => 'disamping sekolah'
        ]);
        Petugas::create([
            "nama_petugas" => 'Three',
            "jabatan_petugas" => 'Staf TU',
            "no_telp_petugas" => '010122210',
            "alamat_petugas" => 'disamping sekolah'
        ]);

        Buku::create([
            "kode_buku" => '13345',
            "judul_buku" => 'Kisah 25 Nabi dan Rasul',
            "Penulis_buku" => 'Andika Cahyadi',
            "penerbit_buku" => 'Gramedia',
            "tahun_penerbit" => '2023',
            "stok" => 32,
        ]);
        Buku::create([
            "kode_buku" => '14345',
            "judul_buku" => 'Mengejar yang Lari',
            "Penulis_buku" => 'Laskar Pendongeng',
            "penerbit_buku" => 'Gramedia',
            "tahun_penerbit" => '2012',
            "stok" => 42
        ]);
        Buku::create([
            "kode_buku" => '15345',
            "judul_buku" => 'Perpindahan Negara Asia',
            "Penulis_buku" => 'Hitler',
            "penerbit_buku" => 'Gramedia',
            "tahun_penerbit" => '2019',
            "stok" => 25
        ]);

        Rak::create([
            "nama_rak" => "Agama",
            "lokasi_rak" => "lt-3",
            "buku_id" => 1,
        ]);
        Rak::create([
            "nama_rak" => "Politik",
            "lokasi_rak" => "lt-2",
            "buku_id" => 3,
        ]);
        Rak::create([
            "nama_rak" => "Motivasi",
            "lokasi_rak" => "lt-1",
            "buku_id" => 2,
        ]);
       
        Peminjaman::create([
            "tanggal_pinjam" => "2023-10-02",
            "tanggal_kembali" => "2023-10-07",
            "buku_id" => 1,
            "anggota_id" => 1,
            "petugas_id" => 2,
        ]);

        Peminjaman::create([
            "tanggal_pinjam" => "2023-10-02",
            "tanggal_kembali" => "2023-10-07",
            "buku_id" => 2,
            "anggota_id" => 1,
            "petugas_id" => 1,
        ]);

        Peminjaman::create([
            "tanggal_pinjam" => "2023-10-02",
            "tanggal_kembali" => "2023-10-07",
            "buku_id" => 3,
            "anggota_id" => 2,
            "petugas_id" => 3,
        ]);

        Pengembalian::create([
            "tanggal_pengembalian" => "2023-10-08",
            "denda" => 35000,
            "buku_id" => 1,
            "anggota_id" => 1,
            "petugas_id" => 1
         ]);
   
         Pengembalian::create([
           "tanggal_pengembalian" => "2023-10-04",
           "denda" => 0,
           "buku_id" => 2,
           "anggota_id" => 2,
           "petugas_id" => 2
        ]);
    }
}
