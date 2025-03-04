<?php

namespace Database\Seeders;

use App\Models\ProfileMethod;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // if (!DB::table('angkatan')->exists() || !DB::table('kuota')->exists() || !DB::table('alternatif')->exists() || !DB::table('subkriteria')->exists()) {
        //     return;
        // }

        // $kuotas = DB::table('kuota')->pluck('max', 'id_angkatan');

        // $alternatifs = DB::table('alternatif')->pluck('id_alternatif');

        // $subkriteriaData = DB::table('subkriteria')->pluck('id', 'subkriteria_name');

        // $alternatifSub = [
        //     1 => [7, 10, 15, 19, 22],
        //     2 => [7, 10, 15, 18, 23],
        //     3 => [7, 10, 14, 18, 25],
        //     4 => [7, 10, 14, 18, 21],
        //     5 => [7, 10, 15, 19, 24],
        //     6 => [7, 10, 14, 18, 22],
        //     7 => [7, 10, 14, 19, 22],
        //     8 => [7, 10, 12, 18, 23],
        //     9 => [7, 10, 14, 18, 24],
        //     10 => [7, 10, 13, 20, 22],
        //     11 => [7, 10, 12, 18, 24],
        //     12 => [7, 10, 12, 18, 25],
        //     13 => [7, 10, 12, 18, 25],
        //     14 => [7, 10, 12, 18, 23],
        //     15 => [7, 10, 12, 18, 22],
        //     16 => [7, 10, 11, 19, 21],
        //     17 => [7, 10, 11, 17, 21],
        //     18 => [7, 10, 11, 18, 23],
        //     19 => [7, 10, 11, 16, 21],
        //     20 => [7, 10, 11, 17, 21],
        // ];

        // $max_to_subkriteria = [];

        // foreach ($subkriteriaData as $name => $id) {
        //     if (preg_match('/(\d+)\s*-\s*(\d+)/', $name, $matches)) {
        //         $angka = (int) $matches[2];
        //         $max_to_subkriteria[$angka] = $id;
        //     }
        // }

        $alternatifs = [
            1 => [
                1 => [
                    ['id_subkriteria' => 4],
                ],
                2 => [
                    ['id_subkriteria' => 7],
                ],
                3 => [
                    ['id_subkriteria' => 10],
                ],
                4 => [
                    ['id_subkriteria' => 15]
                ],
                5 => [
                    ['id_subkriteria' => 19],
                ],
                6 => [
                    ['id_subkriteria' => 22],
                ]
            ],
            2 => [
                1 => [
                    ['id_subkriteria' => 4],
                ],
                2 => [
                    ['id_subkriteria' => 7],
                ],
                3 => [
                    ['id_subkriteria' => 10],
                ],
                4 => [
                    ['id_subkriteria' => 15],
                ],
                5 => [
                    ['id_subkriteria' => 18],
                ],
                6 => [
                    ['id_subkriteria' => 23],
                ]
            ],
            3 => [
                1 => [
                    ['id_subkriteria' => 4],
                ],
                2 => [
                    ['id_subkriteria' => 7],
                ],
                3 => [
                    ['id_subkriteria' => 10],
                ],
                4 => [
                    ['id_subkriteria' => 14],
                ],
                5 => [
                    ['id_subkriteria' => 18],
                ],
                6 => [
                    ['id_subkriteria' => 25],
                ]
            ],
            4 => [
                1 => [
                    ['id_subkriteria' => 4],
                ],
                2 => [
                    ['id_subkriteria' => 7],
                ],
                3 => [
                    ['id_subkriteria' => 10],
                ],
                4 => [
                    ['id_subkriteria' => 14],
                ],
                5 => [
                    ['id_subkriteria' => 18],
                ],
                6 => [
                    ['id_subkriteria' => 21],
                ]
            ],
            5 => [
                1 => [
                    ['id_subkriteria' => 4],
                ],
                2 => [
                    ['id_subkriteria' => 7],
                ],
                3 => [
                    ['id_subkriteria' => 10],
                ],
                4 => [
                    ['id_subkriteria' => 15],
                ],
                5 => [
                    ['id_subkriteria' => 19],
                ],
                6 => [
                    ['id_subkriteria' => 24],
                ]
            ],
            6 => [
                1 => [
                    ['id_subkriteria' => 4],
                ],
                2 => [
                    ['id_subkriteria' => 7],
                ],
                3 => [
                    ['id_subkriteria' => 10],
                ],
                4 => [
                    ['id_subkriteria' => 14],
                ],
                5 => [
                    ['id_subkriteria' => 18],
                ],
                6 => [
                    ['id_subkriteria' => 22],
                ]
            ],
            7 => [
                1 => [
                    ['id_subkriteria' => 4],
                ],
                2 => [
                    ['id_subkriteria' => 7],
                ],
                3 => [
                    ['id_subkriteria' => 10],
                ],
                4 => [
                    ['id_subkriteria' => 14],
                ],
                5 => [
                    ['id_subkriteria' => 19],
                ],
                6 => [
                    ['id_subkriteria' => 22],
                ]
            ],
            8 => [
                1 => [
                    ['id_subkriteria' => 4],
                ],
                2 => [
                    ['id_subkriteria' => 7],
                ],
                3 => [
                    ['id_subkriteria' => 10],
                ],
                4 => [
                    ['id_subkriteria' => 12],
                ],
                5 => [
                    ['id_subkriteria' => 18],
                ],
                6 => [
                    ['id_subkriteria' => 23],
                ]
            ],
            9 => [
                1 => [
                    ['id_subkriteria' => 4],
                ],
                2 => [
                    ['id_subkriteria' => 7],
                ],
                3 => [
                    ['id_subkriteria' => 10],
                ],
                4 => [
                    ['id_subkriteria' => 14],
                ],
                5 => [
                    ['id_subkriteria' => 18],
                ],
                6 => [
                    ['id_subkriteria' => 24],
                ]
            ],
            10 => [
                1 => [
                    ['id_subkriteria' => 4],
                ],
                2 => [
                    ['id_subkriteria' => 7],
                ],
                3 => [
                    ['id_subkriteria' => 10],
                ],
                4 => [
                    ['id_subkriteria' => 13],
                ],
                5 => [
                    ['id_subkriteria' => 20],
                ],
                6 => [
                    ['id_subkriteria' => 22],
                ]
            ],
            11 => [
                1 => [
                    ['id_subkriteria' => 4],
                ],
                2 => [
                    ['id_subkriteria' => 7],
                ],
                3 => [
                    ['id_subkriteria' => 10],
                ],
                4 => [
                    ['id_subkriteria' => 12],
                ],
                5 => [
                    ['id_subkriteria' => 18],
                ],
                6 => [
                    ['id_subkriteria' => 24],
                ]
            ],
            12 => [
                1 => [
                    ['id_subkriteria' => 4],
                ],
                2 => [
                    ['id_subkriteria' => 7],
                ],
                3 => [
                    ['id_subkriteria' => 10],
                ],
                4 => [
                    ['id_subkriteria' => 12],
                ],
                5 => [
                    ['id_subkriteria' => 18],
                ],
                6 => [
                    ['id_subkriteria' => 25],
                ]
            ],
            13 => [
                1 => [
                    ['id_subkriteria' => 4],
                ],
                2 => [
                    ['id_subkriteria' => 7],
                ],
                3 => [
                    ['id_subkriteria' => 10],
                ],
                4 => [
                    ['id_subkriteria' => 12],
                ],
                5 => [
                    ['id_subkriteria' => 18],
                ],
                6 => [
                    ['id_subkriteria' => 25],
                ]
            ],
            14 => [
                1 => [
                    ['id_subkriteria' => 4],
                ],
                2 => [
                    ['id_subkriteria' => 7],
                ],
                3 => [
                    ['id_subkriteria' => 10],
                ],
                4 => [
                    ['id_subkriteria' => 12],
                ],
                5 => [
                    ['id_subkriteria' => 18],
                ],
                6 => [
                    ['id_subkriteria' => 23],
                ]
            ],
            15 => [
                1 => [
                    ['id_subkriteria' => 4],
                ],
                2 => [
                    ['id_subkriteria' => 7],
                ],
                3 => [
                    ['id_subkriteria' => 10],
                ],
                4 => [
                    ['id_subkriteria' => 12],
                ],
                5 => [
                    ['id_subkriteria' => 18],
                ],
                6 => [
                    ['id_subkriteria' => 22],
                ]
            ],
            16 => [
                1 => [
                    ['id_subkriteria' => 4],
                ],
                2 => [
                    ['id_subkriteria' => 7],
                ],
                3 => [
                    ['id_subkriteria' => 10],
                ],
                4 => [
                    ['id_subkriteria' => 11],
                ],
                5 => [
                    ['id_subkriteria' => 19],
                ],
                6 => [
                    ['id_subkriteria' => 21],
                ]
            ],
            17 => [
                1 => [
                    ['id_subkriteria' => 4],
                ],
                2 => [
                    ['id_subkriteria' => 7],
                ],
                3 => [
                    ['id_subkriteria' => 10],
                ],
                4 => [
                    ['id_subkriteria' => 11],
                ],
                5 => [
                    ['id_subkriteria' => 17],
                ],
                6 => [
                    ['id_subkriteria' => 21],
                ]
            ],
            18 => [
                1 => [
                    ['id_subkriteria' => 4],
                ],
                2 => [
                    ['id_subkriteria' => 7],
                ],
                3 => [
                    ['id_subkriteria' => 10],
                ],
                4 => [
                    ['id_subkriteria' => 11],
                ],
                5 => [
                    ['id_subkriteria' => 18],
                ],
                6 => [
                    ['id_subkriteria' => 23],
                ]
            ],
            19 => [
                1 => [
                    ['id_subkriteria' => 4],
                ],
                2 => [
                    ['id_subkriteria' => 7],
                ],
                3 => [
                    ['id_subkriteria' => 10],
                ],
                4 => [
                    ['id_subkriteria' => 11],
                ],
                5 => [
                    ['id_subkriteria' => 16],
                ],
                6 => [
                    ['id_subkriteria' => 21],
                ]
            ],
            20 => [
                1 => [
                    ['id_subkriteria' => 4],
                ],
                2 => [
                    ['id_subkriteria' => 7],
                ],
                3 => [
                    ['id_subkriteria' => 10],
                ],
                4 => [
                    ['id_subkriteria' => 11],
                ],
                5 => [
                    ['id_subkriteria' => 17],
                ],
                6 => [
                    ['id_subkriteria' => 21],
                ]
            ],
            // 1 => [

            // ],
            // 2 => [
            //     1 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 15]
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 19],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 22],
            //         ]
            //     ],
            //     2 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 15],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 18],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 23],
            //         ]
            //     ],
            //     3 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 14],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 18],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 25],
            //         ]
            //     ],
            //     4 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 14],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 18],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 21],
            //         ]
            //     ],
            //     5 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 15],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 19],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 24],
            //         ]
            //     ],
            //     6 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 14],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 18],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 22],
            //         ]
            //     ],
            //     7 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 14],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 19],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 22],
            //         ]
            //     ],
            //     8 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 12],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 18],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 23],
            //         ]
            //     ],
            //     9 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 14],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 18],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 24],
            //         ]
            //     ],
            //     10 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 13],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 20],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 22],
            //         ]
            //     ],
            //     11 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 12],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 18],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 24],
            //         ]
            //     ],
            //     12 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 12],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 18],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 25],
            //         ]
            //     ],
            //     13 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 12],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 18],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 25],
            //         ]
            //     ],
            //     14 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 12],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 18],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 23],
            //         ]
            //     ],
            //     15 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 12],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 18],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 22],
            //         ]
            //     ],
            //     16 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 11],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 19],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 21],
            //         ]
            //     ],
            //     17 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 11],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 17],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 21],
            //         ]
            //     ],
            //     18 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 11],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 18],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 23],
            //         ]
            //     ],
            //     19 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 11],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 16],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 21],
            //         ]
            //     ],
            //     20 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 11],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 21],
            //         ]
            //     ],
            // ],
            // 3 => [
            //     1 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 15]
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 19],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 22],
            //         ]
            //     ],
            //     2 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 15],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 18],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 23],
            //         ]
            //     ],
            //     3 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 14],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 18],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 25],
            //         ]
            //     ],
            //     4 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 14],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 18],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 21],
            //         ]
            //     ],
            //     5 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 15],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 19],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 24],
            //         ]
            //     ],
            //     6 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 14],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 18],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 22],
            //         ]
            //     ],
            //     7 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 14],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 19],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 22],
            //         ]
            //     ],
            //     8 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 12],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 18],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 23],
            //         ]
            //     ],
            //     9 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 14],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 18],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 24],
            //         ]
            //     ],
            //     10 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 13],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 20],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 22],
            //         ]
            //     ],
            //     11 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 12],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 18],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 24],
            //         ]
            //     ],
            //     12 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 12],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 18],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 25],
            //         ]
            //     ],
            //     13 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 12],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 18],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 25],
            //         ]
            //     ],
            //     14 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 12],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 18],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 23],
            //         ]
            //     ],
            //     15 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 12],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 18],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 22],
            //         ]
            //     ],
            //     16 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 11],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 19],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 21],
            //         ]
            //     ],
            //     17 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 11],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 17],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 21],
            //         ]
            //     ],
            //     18 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 11],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 18],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 23],
            //         ]
            //     ],
            //     19 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 11],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 16],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 21],
            //         ]
            //     ],
            //     20 => [
            //         1 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         2 => [
            //             ['id_subkriteria' => 7],
            //         ],
            //         3 => [
            //             ['id_subkriteria' => 10],
            //         ],
            //         4 => [
            //             ['id_subkriteria' => 11],
            //         ],
            //         5 => [
            //             ['id_subkriteria' => 4],
            //         ],
            //         6 => [
            //             ['id_subkriteria' => 21],
            //         ]
            //     ],
            // ],
        ];

        // foreach ($angkatan as $angkatanId => $alternatif) {
            foreach ($alternatifs as $alternatifId => $kriteria) {
                foreach ($kriteria as $kriteriaId => $valueProfile) {
                    foreach ($valueProfile as $value) {
                        ProfileMethod::create([
                            // 'id_angkatan' => $angkatanId,
                            'id_alternatif' => $alternatifId,
                            'id_kriteria' => $kriteriaId,
                            'id_subkriteria' => $value['id_subkriteria'],
                        ]);
                    }
                }
            }
        // }
    }
}