<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Kegiatan;
use App\Models\Penugasan;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Kegiatan::create([
            'nama_kegiatan' => 'Survei IMK Triwulan 4 2023',
            'slug'          => 'survei-imk-triwulan-4-2023'
        ]);
        Kegiatan::create([
            'nama_kegiatan' => 'Survei LPTB Bulan Januari 2024',
            'slug'          => 'survei-lptb-bulan-januari-2024'
        ]);
        Penugasan::create(
            [
                'sktnp'             => '1204061902680001',
                'nama_mitra'        => 'Emanuel Telaumbanua',
                'slug'              => 'emanuel-telaumbanua-1',
                'wilayah_tugas'     => '1201',
                'nama_kegiatan'     => 'Survei IMK Triwulan 4 2023',
                'kegiatan_id'       => 1,
                'bertugas_sebagai'  => 'PCL',
                'beban'             => '6 Dokumen',
                'honor'             => 'Rp.330.000',
                'fungsi'            => 'Produksi',
                'tanggal_mulai'     => '2024/1/4',
                'tanggal_selesai'   => '2024/1/11',
                'alamat'            => 'Desa Sogaeadu',
                'pekerjaan'         => 'Wiraswasta',
                'mata_anggaran'     => '2904.BMA.006.005.A.521213',
                'nomor_bast'        => '001/1201_BAST/2024'
            ]
        );
        Penugasan::create([
            'sktnp'             => '1204081806780002',
            'nama_mitra'        => 'Syukurman Gulo',
            'slug'              => 'syukurman-gulo-1',
            'wilayah_tugas'     => '1225',
            'nama_kegiatan'          => 'Survei IMK Triwulan 4 2023',
            'kegiatan_id'       => 1,
            'bertugas_sebagai'  => 'PCL',
            'beban'             => '5 Dokumen',
            'honor'             => 'Rp.280.000',
            'fungsi'            => 'Produksi',
            'tanggal_mulai'     => '2024/1/4',
            'tanggal_selesai'   => '2024/1/11',
            'alamat'            => 'Desa lolozirugi kec mandrehe',
            'pekerjaan'         => 'Wiraswasta',
            'mata_anggaran'     => '2904.BMA.006.005.A.521213',
            'nomor_bast'        => '002/1201_BAST/2024'
        ]);
        Penugasan::create([
            'sktnp'             => '1204061902680001',
            'nama_mitra'        => 'Emanuel Telaumbanua',
            'slug'              => 'emanuel-telaumbanua-2',
            'wilayah_tugas'     => '1201',
            'nama_kegiatan'          => 'Survei LPTB Bulan Januari 2024',
            'kegiatan_id'       => 2,
            'bertugas_sebagai'  => 'PCL',
            'beban'             => '1 Dokumen',
            'honor'             => 'Rp.60.000',
            'fungsi'            => 'Produksi',
            'tanggal_mulai'     => '2024/1/2',
            'tanggal_selesai'   => '2024/1/7',
            'alamat'            => 'Desa Sogaeadu',
            'pekerjaan'         => 'Wiraswasta',
            'mata_anggaran'     => '2909.BMA.006.005.A.521213',
            'nomor_bast'        => '003/1201_BAST/2024'
        ]);
    }
}
