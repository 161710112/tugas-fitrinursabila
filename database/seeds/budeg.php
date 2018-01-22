<?php

use Illuminate\Database\Seeder;

class budeg extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $a=[
              ['Nis'=>'123',
              'Nama'=>'fitrinursabila',
              'Tempat_lahir'=>'bandung',
              'Tanggal_lahir'=>'2000-12-12',
              'Alamat'=>'bahuan',
              'Cita-cita'=>'polisi',
              'hobi'=>'solawatan',
              'photo'=>'ada meren']
              ];
                DB::table('siswas')->insert($a);
             
    }
}
