<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Suppliers;
class SuppliersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $suppliers = new Suppliers;
        $suppliers->CompanyName = 'PT Team';
        $suppliers->ContactName = 'Aris Munandar';
        $suppliers->ContactTitle = 'Aris Team';
        $suppliers->Address = 'Jl.Imam';
        $suppliers->City = 'Jakarta';
        $suppliers->Region = 'Jakarta Timur';
        $suppliers->PostalCode = '124113';
        $suppliers->save();

        $suppliers = new Suppliers;
        $suppliers->CompanyName = 'PT Warners';
        $suppliers->ContactName = 'Joni anada';
        $suppliers->ContactTitle = 'Joni Warners';
        $suppliers->Address = 'Jl.Teuku';
        $suppliers->City = 'Bandung';
        $suppliers->Region = 'Bandung Utara';
        $suppliers->PostalCode = '348271';
        $suppliers->save();

        $suppliers = new Suppliers;
        $suppliers->CompanyName = 'PT Portal';
        $suppliers->ContactName = 'Dania Alara';
        $suppliers->ContactTitle = 'Dania Portal';
        $suppliers->Address = 'Jl.Ciledug';
        $suppliers->City = 'Surabaya';
        $suppliers->Region = 'Surabaya Utara';
        $suppliers->PostalCode = '211322';
        $suppliers->save();
        
        $suppliers = new Suppliers;
        $suppliers->CompanyName = 'PT DNA';
        $suppliers->ContactName = 'Alexa Wardi';
        $suppliers->ContactTitle = 'Alexa DNA';
        $suppliers->Address = 'Jl.Lidah';
        $suppliers->City = 'Yogyakarta';
        $suppliers->Region = 'Yogyakarta Barat';
        $suppliers->PostalCode = '343219';
        $suppliers->save();

        $suppliers = new Suppliers;
        $suppliers->CompanyName = 'PT Umberella';
        $suppliers->ContactName = 'Sidanan Wala';
        $suppliers->ContactTitle = 'Sidana Umberella';
        $suppliers->Address = 'Jl.Imam Malik';
        $suppliers->City = 'Medan';
        $suppliers->Region = 'Medan Utara';
        $suppliers->PostalCode = '2479239';
        $suppliers->save();
    }
}