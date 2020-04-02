<?php

use Illuminate\Database\Seeder;

class PersonalsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $personals = [
            'muharremkackin',
            'kerimcoban',
            'orhansad',
            'farukozdemir',
            'fatihkaftanci',
        ];

        foreach ($personals as $personal) {
            factory('App\Personal')->create([
                'email' => $personal.'@jodreams.dk'
            ]);
        }

    }
}
