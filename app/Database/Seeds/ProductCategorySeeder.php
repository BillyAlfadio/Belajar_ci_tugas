<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'category_name' => 'Teknologi',
                'created_at' => date("Y-m-d H:i:s")
            ],

            [
                'category_name' => 'Game',
                'created_at' => date("Y-m-d H:i:s")
            ],

            [
                'category_name' => 'Pendidikan',
                'created_at' => date("Y-m-d H:i:s")
            ],

            [
                'category_name' => 'Olahraga',
                'created_at' => date("Y-m-d H:i:s")
            ],

            [
                'category_name' => 'Hiburan',
                'created_at' => date("Y-m-d H:i:s")
            ]
        ];

        foreach ($data as $item) {
            $this->db->table('product_category')->insert($item);
        }
    }
}
