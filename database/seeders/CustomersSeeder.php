<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customers;
class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = new Customers;
        $customers->CompanyName = 'PT Tana';
        $customers->ContactName = 'Rian nand';
        $customers->ContactTitle = 'Rian Tana';
        $customers->Address = 'Jl.Insan 21';
        $customers->City = 'Jambi';
        $customers->Region = 'Jambi Timur';
        $customers->PostalCode = '555431';
        $customers->save();

        $customers = new Customers;
        $customers->CompanyName = 'PT Sianan';
        $customers->ContactName = 'Rina wenda';
        $customers->ContactTitle = 'Rina Sianan';
        $customers->Address = 'Jl. Bekasi timur';
        $customers->City = 'Bekasi';
        $customers->Region = 'Bekasi Barat';
        $customers->PostalCode = '212123';
        $customers->save();

        $customers = new Customers;
        $customers->CompanyName = 'PT DEP';
        $customers->ContactName = 'Warayi Nana';
        $customers->ContactTitle = 'Warayi Dep';
        $customers->Address = 'Jl.Sugiman';
        $customers->City = 'Surabaya';
        $customers->Region = 'Surabaya Barat';
        $customers->PostalCode = '234793';
        $customers->save();

        $customers = new Customers;
        $customers->CompanyName = 'PT SiS';
        $customers->ContactName = 'Leonan Landa';
        $customers->ContactTitle = 'Leonan Sis';
        $customers->Address = 'Jl.Varija';
        $customers->City = 'Bali';
        $customers->Region = 'Bali Utara';
        $customers->PostalCode = '234247';
        $customers->save();

        $customers = new Customers;
        $customers->CompanyName = 'PT RinaD';
        $customers->ContactName = 'Larava nata';
        $customers->ContactTitle = 'Larava RinaD';
        $customers->Address = 'Jl.Sinanajar';
        $customers->City = 'Lampung';
        $customers->Region = 'Lampung Pusat';
        $customers->PostalCode = '345834';
        $customers->save();
    }
}