<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Shippers;
class ShippersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $shippers = new Shippers;
        $shippers->CompanyName = 'JNE';
        $shippers-> Phone = fake()->phoneNumber('###########');
        $shippers->save();

        $shippers = new Shippers;
        $shippers->CompanyName = 'Sicepat';
        $shippers-> Phone = fake()->phoneNumber('###########');
        $shippers->save();
    }
}