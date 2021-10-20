<?php

namespace App\Database\Seeds;

use App\Models\Pengguna12200651;
use CodeIgniter\Database\Seeder;

class PenggunaSeeder12200651 extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama'     => 'fitri',
                'password' => 'md5'('12200651')
            ],
            [
                'nama'     => 'admin',
                'password' => 'md5'('12345')
            ],
            [
                'nama'     => '12200651',
                'password' => 'md5'('fitri')
            ]          
        ];

        $p = new Pengguna12200651();
        $p->insertBatch($data);
    }
}
