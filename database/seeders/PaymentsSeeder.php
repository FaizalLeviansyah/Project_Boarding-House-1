<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Payment;

class PaymentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payments = [
            [
                'transaction_id' => 2,
                'user_id' => 7,
                'kamar_id' => 2,
                'type_transfer' => 'Bank',
                'nama_bank' => 'BANK BRI',
                'nama_pemilik' => 'ucup',
                'status' => 'Success',
                'bank_tujuan' => 'BANK MANDIRI',
                'jumlah_bayar' => 800661,
                'tgl_transfer' => '12 June, 2023',
                'bukti_bayar' => '1686258782_Screenshot 2023-06-08 201930.png',
                'created_at' => '2023-06-09 04:12:35',
                'updated_at' => '2023-06-09 04:12:39',
            ],
            [
                'transaction_id' => 1,
                'user_id' => 7,
                'kamar_id' => 9,
                'status' => 'Pending',
                'created_at' => '2023-06-09 04:12:35',
                'updated_at' => '2023-06-09 04:12:39',
            ],
            // Tambahkan data lain sesuai kebutuhan
        ];

        foreach ($payments as $paymentData) {
            Payment::create($paymentData);
        }
    }
}
