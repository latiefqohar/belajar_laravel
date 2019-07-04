<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker; //memanggil class faker dan merubahnya menjadi faker

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create('id_ID'); //simpan perintah pada $faker dengan parameter (id_ID)data indo
        for($i=0;$i<=50;$i++){

        
        DB::table('pegawai')->insert([
            'pegawai_nama'=>$faker->name,
            'pegawai_jabatan'=>$faker->jobTitle,
            'pegawai_umur'=>$faker->numberBetween(25,40),
            'pegawai_alamat'=>$faker->address
        ]);
        
    }
    }
    //untuk memanggil fungsi ini jalankan perintah php artisan db:seed --class=PegawaiSeeder pada terminal
}
