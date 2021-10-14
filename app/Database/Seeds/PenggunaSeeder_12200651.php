<?php

namespace App\Database\Seeds;

use App\Models\PenggunaModel_12200651;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder_12200651 extends Seeder
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

        $p = new PenggunaModel_12200651();
        $p->insertBatch($data);
    }
}
