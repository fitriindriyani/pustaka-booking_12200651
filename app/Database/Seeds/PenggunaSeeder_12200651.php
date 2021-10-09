<?php

namespace App\Database\Seeds;

use App\Models\Pengguna;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'     => 'fitriindriyani',
                'password' => 'md5'('12200651')
            ],
            [
                'nama'     => 'admin',
                'password' => 'md5'('12200651')
            ],
            [
                'nama'     => '12200651',
                'password' => 'md5'('fitriindriyani')
            ]          
        ];

        $p = new Pengguna();
        $p->insertBatch($data);
    }
}
