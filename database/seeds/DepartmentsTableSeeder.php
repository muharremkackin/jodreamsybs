<?php

use Illuminate\Database\Seeder;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $hr = new \App\Models\Hr\Department();
        $hr->title = 'İnsan Kaynakları';
        $hr->save();


        $it = new \App\Models\Hr\Department();
        $it->title = 'Bilgi İşlem';
        $it->save();

    }
}
