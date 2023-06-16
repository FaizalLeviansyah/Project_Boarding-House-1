<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kamar;

class KamarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kamars = [
            [
                'latitude' => -6.12345678,
                'longitude' => 106.78901234,
            ],
            /*[
                'latitude' => -7.9263390,
                'longitude' => 112.600987,
            ], 
            [
                'latitude' => -7.3402555,
                'longitude' => 112.7146230,
            ],
            [
                'latitude' => -7.9580986,
                'longitude' => 112.6111772,
            ], 
            [
                'latitude' => -7.9427135,
                'longitude' => 112.5949757,
            ]*/
        ];

        foreach ($kamars as $kamarData) {
            $kamar = Kamar::first(); // Ubah dengan query yang sesuai untuk mendapatkan kamar yang ingin diisi lokasinya
            $kamar->update($kamarData);
        }

        $kamar2 = [
            [
                'latitude' => -7.9263390,
                'longitude' => 112.600987,
            ]
        ];

        foreach ($kamar2 as $kamarData) {
            $kamar = Kamar::where('id', 2)->first(); // Ubah dengan query yang sesuai untuk mendapatkan kamar yang ingin diisi lokasinya
            $kamar->update($kamarData);
        }

        $kamar3 = [
            [
                'latitude' => -7.3402555,
                'longitude' => 112.7146230,
            ]
        ];

        foreach ($kamar3 as $kamarData) {
            $kamar = Kamar::where('id', 3)->first(); // Ubah dengan query yang sesuai untuk mendapatkan kamar yang ingin diisi lokasinya
            $kamar->update($kamarData);
        }

        $kamar4 = [
            [
                'latitude' => -7.9580986,
                'longitude' => 112.6111772,
            ]
        ];

        foreach ($kamar4 as $kamarData) {
            $kamar = Kamar::where('id', 9)->first(); // Ubah dengan query yang sesuai untuk mendapatkan kamar yang ingin diisi lokasinya
            $kamar->update($kamarData);
        }

        $kamar5 = [
            [
                'latitude' => -7.9427135,
                'longitude' => 112.5949757,
            ]
        ];

        foreach ($kamar5 as $kamarData) {
            $kamar = Kamar::where('id', 10)->first(); // Ubah dengan query yang sesuai untuk mendapatkan kamar yang ingin diisi lokasinya
            $kamar->update($kamarData);
        }
    }
}