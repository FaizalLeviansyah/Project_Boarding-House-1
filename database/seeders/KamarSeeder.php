<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;


class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('data_rekenings')->insert([
            [
            'user_id' => 2,
            'no_rekening' => 21212232,
            'nama_bank' => 'BANK BRI',
            'nama_pemilik' => 'Satria Pangestu A',
            'is_active' => '1'
            ], 
            [
            'user_id' => 2,
            'no_rekening' => 21212732,
            'nama_bank' => 'BANK MANDIRI',
            'nama_pemilik' => 'Saefulloh Fatah P K',
            'is_active' => '1'
            ],
            [
                'user_id' => 3,
                'no_rekening' => 21212732,
                'nama_bank' => 'BANK MANDIRI',
                'nama_pemilik' => 'Mahaputra wijayanto',
                'is_active' => '1'
                ], 
                [
                    'user_id' => 5,
                    'no_rekening' => 21232732,
                    'nama_bank' => 'BANK MANDIRI',
                    'nama_pemilik' => 'Mahaputra wijayanto',
                    'is_active' => '1'
                    ], 
            [
            'user_id' => 2,
            'no_rekening' => 21219283,
            'nama_bank' => 'BANK MANDIRI',
            'nama_pemilik' => 'Faizal Leviansyah',
            'is_active' => '1'
            ]
            
        ]);
        DB::table('kamars')->insert([
            [
                'id' => 1,
                'user_id' => 2,
                'nama_kamar' => 'kostable',
                'slug' => 'avanti-xsksksks',
                'jenis_kamar' => 'Putra',
                'luas_kamar' => '4x5',
                'stok_kamar' => 15,
                'sisa_kamar' => 14,
                'harga_kamar' =>7500000,
                'deposit' => 1000000,
                'biaya_admin' =>15000,
                'ket_lain' => "suasana nyaman , tidak ramai",
                'ket_biaya' => "",
                'desc' => "kost dengan fasilitas terbagus (citation needed)",
                'kategori' => "Kost",
                'book' => 1,
                'listrik' => 1,
                'province_id' => 34,
                'regency_id' => 3404,
                'district_id' => 3404070,
                'bg_foto' => 'background1.jpg', 
                'status' => 1,
                'is_active' => 1,
                'desc_rooms' => "kamarnya terdapat 2 tipe : king sama biasa"
            ], 
            [
                'id' => 2,
                'user_id' => 2,
                'nama_kamar' => 'kosttag',
                'slug' => 'berjaya-kdbkdba',
                'jenis_kamar' => 'Putri',
                'luas_kamar' => '5x5',
                'stok_kamar' => 10,
                'sisa_kamar' => 5,
                'harga_kamar' =>8000000,
                'deposit' => 1200000,
                'biaya_admin' =>10000,
                'ket_lain' => "suasana nyaman, tempat luas",
                'ket_biaya' => "",
                'desc' => "kost dengan fasilitas yang ya iyalah",
                'kategori' => "Kost",
                'book' => 1,
                'listrik' => 1,
                'province_id' => 35,
                'regency_id' => 3507,
                'district_id' => 3573050,
                'bg_foto' => 'background2.jpg', 
                'status' => 1,
                'is_active' => 1,
                'desc_rooms' => "tipe kamar : reguler, prince, king"
            ], 
            [
                'id' => 3,
                'user_id' => 2,
                'nama_kamar' => 'orkost',
                'slug' => 'ovberg-kdbkdba',
                'jenis_kamar' => 'Campur',
                'luas_kamar' => '5x6',
                'stok_kamar' => 5,
                'sisa_kamar' => 14,
                'harga_kamar' =>9000000,
                'deposit' => 900000,
                'biaya_admin' =>15000,
                'ket_lain' => "no comment",
                'ket_biaya' => "Nambah biaya jika membawa peralatan elektronik . 20k/alat",
                'desc' => "kost yang awalnya terbengkalai terus direstorasi sama owner baru",
                'kategori' => "Kost",
                'book' => 1,
                'listrik' => 0,
                'province_id' => 35,
                'regency_id' => 3578,
                'district_id' => 3578040,
                'bg_foto' => 'background3.jpg', 
                'status' => 1,
                'is_active' => 1,
                'desc_rooms' => "kamarnya terdapat 2 tipe : biasa dan lord"
            ]
        ]);
        DB::table('alamats')->insert([
            [
            'kamar_id' => 1,
            'alamat' => 'Jl Puntadewa 10'
            ], 
            [
            'kamar_id' => 2, 
            'alamat' => 'Jl Watugong No 6'
            ], 
            [
            'kamar_id' => 3, 
            'alamat' => 'Jl Ahmad Yani No 33'
            ]
        ]);
        DB::table('areas')->insert([
            [
            'kamar_id' => 1,
            'name' => 'Dekat flyover Janti, Yogyakarta'
            ], 
            [
            'kamar_id' => 2, 
            'name' => 'Watugong, Malang'
            ], 
            [
            'kamar_id' => 3, 
            'name' => 'Dekat jalan raya Sidoarjo-Surabaya'
            ]
        ]);
        
        DB::table('fbersamas')->insert([
            [
            'kamar_id' => 1,
            'name' => 'Dapur'
            ], 
            [
            'kamar_id' => 2,
            'name' => 'Dapur, Mushola, Laundry'
            ], 
            [
            'kamar_id' => 3,
            'name' => 'Dapur, , Laundry'
            ]
        ]);
        DB::table('fkamars')->insert([
            [
            'kamar_id' => 1,
            'name' => 'Lemari 1,Meja 1, Kasur 1'
            ], 
            [
            'kamar_id' => 2,
            'name' => 'Lemari 1, Meja 1, Kasur 1, Cermin 1'
            ], 
            [
            'kamar_id' => 3,
            'name' => 'Lemari 1, Matras 1, Kipas angin 1'
            ]
        ]);
        DB::table('fkamar_mandis')->insert([
            [
            'kamar_id' => 1,
            'name' => 'Toilet,shower,heater water'
            ], 
            [
            'kamar_id' => 2,
            'name' => 'Toilet,shower,bathtub'
            ], 
            [
            'kamar_id' => 3,
            'name' => 'Toilet,shower,heater water, bathtub'
            ]
        ]);
        DB::table('fotokamars')->insert([
            [
            'kamar_id' => 1,
            'foto_kamar' => 'kamar1.jpg'
            ], 
            [
            'kamar_id' => 2,
            'foto_kamar' => 'kamar2.jpg'
            ], 
            [
            'kamar_id' => 3,
            'foto_kamar' => 'kamar3.jpg'
            ]
        ]);
        DB::table('fparkirs')->insert([
            [
            'kamar_id' => 1,
            'name' => 'Luas , bisa untuk mobil'
            ], 
            [
            'kamar_id' => 2,
            'name' => 'Luas , bisa untuk mobil, motor, dsb'
            ], 
            [
            'kamar_id' => 3,
            'name' => 'Sempit, hanya bisa motor'
            ]
        ]);
        
        DB::table('kamars')->insert([
            'id' => 9,
            'user_id' =>3,
            'nama_kamar' => 'kost putri muslimah',
            'slug' => 'putrimuslimah-idamanmertua',
            'jenis_kamar' => 'Putri',
            'luas_kamar' => '4x4',
            'stok_kamar' => 20,
            'sisa_kamar' => 9,
            'harga_kamar' =>800000,
            'deposit' => 200000,
            'biaya_admin' =>15000,
            'ket_lain' => "kost aman, nyaman, tentram",
            'ket_biaya' => "Nambah biaya jika membawa peralatan elektronik . 20k/alat",
            'desc' => "Ibu kost ramah, suka memberi makanan",
            'kategori' => "Kost",
            'book' => 1,
            'listrik' => 0,
            'province_id' => 35,
            'regency_id' => 3573,
            'district_id' => 3573050,
            'bg_foto' => 'kost-putri-muslimah.jpg',
            'status' => 1,
            'is_active' => 1,
            'desc_rooms' => "kamar bagus barang-barang masih baru",
        
        ]);
        
        
        DB::table('alamats')->insert([
            'kamar_id' => 9,
            'alamat' => 'Jl. Sigura - Gura No.8, Sumbersari, Kec. Lowokwaru, Kota Malang, Jawa Timur 65145',
        ]);
        DB::table('areas')->insert([
            'kamar_id' => 9,
            'name' => 'Dekat UB, UM, UMM, dan Universitas lainnya',
        ]);
        
        DB::table('fbersamas')->insert([
            'kamar_id' => 9,
            'name' => 'Dapur',
        ]);
        DB::table('fkamars')->insert([
            'kamar_id' => 9,
            'name' => 'Lemari 1,Meja 1, kursi 1',
        ]);
        DB::table('fkamar_mandis')->insert([
            'kamar_id' => 9,
            'name' => 'Toilet,shower',
        ]);
        DB::table('fotokamars')->insert([
            'kamar_id' => 9,
            'foto_kamar' => 'kamar-putri-muslimah.jpeg',
        ]);
        DB::table('fparkirs')->insert([
            'kamar_id' => 9,
            'name' => 'Luas',
        ]);
        DB::table('kamars')->insert([
            'id' => 10,
            'user_id' =>5,
            'nama_kamar' => 'Moana Kost',
            'slug' => 'moana-jdbc',
            'jenis_kamar' => 'Putri',
            'luas_kamar' => '4x3',
            'stok_kamar' => 18,
            'sisa_kamar' => 8,
            'harga_kamar' =>700000,
            'deposit' => 100000,
            'biaya_admin' =>15000,
            'ket_lain' => "Aman! ada CCTV dan security",
            'ket_biaya' => "Listrik bayar sendiri",
            'desc' => "Kost murah stategis",
            'kategori' => "Kost",
            'book' => 1,
            'listrik' => 1,
            'province_id' => 35,
            'regency_id' => 3573,
            'district_id' => 3573050,
            'bg_foto' => 'moana-kost.jpg',
            'status' => 1,
            'is_active' => 1,
            'desc_rooms' => "kamar nyaman dan estetik",
        
        ]);
        
        
        DB::table('alamats')->insert([
            'kamar_id' => 10,
            'alamat' => 'Jl. Perum Joyo Grand No.7, Merjosari, Lowokwaru, Malang City, East Java 65144',
        ]);
        DB::table('areas')->insert([
            'kamar_id' => 10,
            'name' => 'Dekat pusat kota',
        ]);
        
        DB::table('fbersamas')->insert([
            'kamar_id' => 10,
            'name' => 'Dapur, kamar mandi',
        ]);
        DB::table('fkamars')->insert([
            'kamar_id' => 10,
            'name' => 'Lemari 1,Meja 1',
        ]);
        DB::table('fkamar_mandis')->insert([
            'kamar_id' => 10,
            'name' => 'Toilet,shower',
        ]);
        DB::table('fotokamars')->insert([
            'kamar_id' => 10,
            'foto_kamar' => 'kamar-moana.png',
        ]);
        DB::table('fparkirs')->insert([
            'kamar_id' => 10,
            'name' => 'Luas',
        ]);
    }
}
