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
        $admin = new \App\Models\Hr\Department();
        $admin->title = 'Şirket Yönetimi';
        $admin->save();

        $admin->positions()->create(['title' => 'Şirket Sahibi']);

        $orhansad = \App\Personal::create([
            'department_id' => $admin->id,
            'position_id' => $admin->positions()->first()->id,
            'name' => 'Orhan Şad',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'email' => 'orhan@jodreams.dk',
        ]);

        $hr = new \App\Models\Hr\Department();
        $hr->title = 'İnsan Kaynakları';
        $hr->save();

        $hr->positions()->create(['title' => 'Müdür']);

        $kerimcoban = \App\Personal::create([
            'department_id' => $hr->id,
            'position_id' => $hr->positions()->first()->id,
            'name' => 'Kerim Çoban',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'email' => 'kerim_coban@jodreams.dk',
        ]);

        Spatie\Permission\Models\Permission::create(['name' => 'show hr', 'guard_name' => 'dashboard']);

        $kerimcoban->givePermissionTo('show hr');

        $it = new \App\Models\Hr\Department();
        $it->title = 'Bilgi İşlem';
        $it->save();

        $it->positions()->create(['title' => 'Uygulama Geliştirici']);

        $muharremkackin = \App\Personal::create([
            'department_id' => $it->id,
            'position_id' => $it->positions()->first()->id,
            'name' => 'Muharrem Kaçkın',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'email' => 'muharremkackin@jodreams.dk',
        ]);

        $fatihkaftanci = \App\Personal::create([
            'department_id' => $it->id,
            'position_id' => $it->positions()->first()->id,
            'name' => 'Fatih Kaftancı',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'email' => 'fatihkaftanci@jodreams.dk',
        ]);

    }
}
