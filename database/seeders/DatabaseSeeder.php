<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $clientes = [
            [
                'dni' => '22334455',
                'nombre' => 'Joaquin',
                'apellido' => 'Padin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'dni' => '33445566',
                'nombre' => 'Manuela',
                'apellido' => 'Martinez',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'dni' => '44556677',
                'nombre' => 'Damian',
                'apellido' => 'Levy',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('clientes')->insert($clientes);

        $creditos = [
            [
                'cliente_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'cliente_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'cliente_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ];

        DB::table('creditos')->insert($creditos);

        $cuotas = [];

        for ($i = 1; $i <= 3; $i++) {
            for ($j = 1; $j <= 12; $j++) {
                $array = [
                    'credito_id' => $i,
                    'nro_cuota' => $j,
                    'importe' => (rand(1000000, 4599999) / 100 ),
                    'created_at' => now(),
                    'updated_at' => now()
                ];
                
                array_push($cuotas, $array);
            }
        }

        DB::table('cuotas')->insert($cuotas);
    }
}
