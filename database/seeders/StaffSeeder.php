<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Staff::create([
            //'nip' => '2314020760',
            //'email' => 'lisapjt@gmail.com',
            //'nama' => 'Lisa Panjaitan',           karena sudah diganti jd yg bawah etph1
            //'tanggal_lahir' => '2005-08-06',
            //'no_hp' => '089101112131'
        //]);

        Staff::factory(8)->create();
    }
}
