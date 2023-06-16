<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transactions = [
            [
                'key' => 'confirm-payment-qQ7xS71lz0uHbxH7ZAq5oWdKXiPKi6xvoAcILSP5sIONHPrVp6mZe92uC4vypOIPT0HRwSVDCVPRohdlMt4ETssqoHzhn8FmZd9LHPrD0FK5p',
                'transaction_number' => 'BOOK-2822-090623',
                'kamar_id' => 2,
                'user_id' => 7,
                'pemilik_id' => 2,
                'lama_sewa' => 1,
                'hari' => 30,
                'harga_kamar' => 8000000,
                'harga_total' => 8000282,
                'tgl_sewa' => '11-06-2023',
                'end_date_sewa' => '11-07-2023',
                'status' => 'Pending',
            ],
            [
                'key' => 'confirm-payment-29LQ8DGNYmL4VIj24KH6djAjgIgBkIPVcozQxjFRVoPbvYkTpStXb7HajBga5hr3tfIxn4bowBePwTNuHmC6BJ797V8663OhV79FPkcDPCohm',
                'transaction_number' => 'BOOK-2209-090623',
                'kamar_id' => 9,
                'pemilik_id' => 3,
                'user_id' => 2,
                'lama_sewa' => 3,
                'hari' => 10,
                'harga_kamar' => 150000,
                'harga_total' => 450000,
                'tgl_sewa' => '2023-06-02',
                'end_date_sewa' => '2023-06-12',
                'status' => 'Pending',
            ],
        ];

        foreach ($transactions as $transactionData) {
            Transaction::create($transactionData);
        }
    }
}
