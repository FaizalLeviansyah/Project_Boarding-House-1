<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Review;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reviews = [
            [
                'user_id' => 7,
                'transaksi_id' => 1,
                'pemilik_id' => 2,
                'kamar_id' => 2,
                'rating' => '5',
                'ulasan' => 'Kamar yang sangat nyaman dan bersih.',
            ],[
                'user_id' => 7,
                'transaksi_id' => 2,
                'pemilik_id' => 2,
                'kamar_id' => 1,
                'rating' => '3',
                'ulasan' => 'Kamar yang sangat nyaman dekat sama orang jual nasi goreng.',
            ]
            // Tambahkan data lain sesuai kebutuhan
        ];

        foreach ($reviews as $reviewData) {
            Review::create($reviewData);
        }
    }
}
