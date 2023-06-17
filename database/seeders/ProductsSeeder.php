<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = new Products;
        $products->ProductName = 'Xiaomi Pro 11';
        $products->SupplierID = '1';
        $products->CategoryID = '1';
        $products->QuantityPerUnit ='1';
        $products->UnitPrice ='2.500.000';
        $products->UnitInStock ='120';
        $products->UnitOnOrder = '15';
        $products->ReorderLevel ='';
        $products->Discontinued ='';
        $products->save();

        $products = new Products;
        $products->ProductName = 'Iphone Pro 11';
        $products->SupplierID = '1';
        $products->CategoryID = '1';
        $products->QuantityPerUnit ='1';
        $products->UnitPrice ='6.500.000';
        $products->UnitInStock ='210';
        $products->UnitOnOrder = '10';
        $products->ReorderLevel ='';
        $products->Discontinued ='';
        $products->save();

        $products = new Products;
        $products->ProductName = 'Laptop Asus Pro 11';
        $products->SupplierID = '2';
        $products->CategoryID = '1';
        $products->QuantityPerUnit ='1';
        $products->UnitPrice ='10.500.000';
        $products->UnitInStock ='150';
        $products->UnitOnOrder = '10';
        $products->ReorderLevel ='';
        $products->Discontinued ='';
        $products->save();

        $products = new Products;
        $products->ProductName = 'Laptop LEnovo Z123';
        $products->SupplierID = '2';
        $products->CategoryID = '1';
        $products->QuantityPerUnit ='1';
        $products->UnitPrice ='8.500.000';
        $products->UnitInStock ='175';
        $products->UnitOnOrder = '15';
        $products->ReorderLevel ='';
        $products->Discontinued ='';
        $products->save();

        $products = new Products;
        $products->ProductName = 'Indomie Soto';
        $products->SupplierID = '3';
        $products->CategoryID = '2';
        $products->QuantityPerUnit ='60';
        $products->UnitPrice ='2.500';
        $products->UnitInStock ='120';
        $products->UnitOnOrder = '50';
        $products->ReorderLevel ='';
        $products->Discontinued ='';
        $products->save();
        
        $products = new Products;
        $products->ProductName = 'Indomie Goreng';
        $products->SupplierID = '3';
        $products->CategoryID = '2';
        $products->QuantityPerUnit ='60';
        $products->UnitPrice ='2.750';
        $products->UnitInStock ='150';
        $products->UnitOnOrder = '75';
        $products->ReorderLevel ='';
        $products->Discontinued ='';
        $products->save();

        $products = new Products;
        $products->ProductName = 'Roti Aoka';
        $products->SupplierID = '4';
        $products->CategoryID = '2';
        $products->QuantityPerUnit ='5';
        $products->UnitPrice ='1000';
        $products->UnitInStock ='175';
        $products->UnitOnOrder = '50';
        $products->ReorderLevel ='';
        $products->Discontinued ='';
        $products->save();

        $products = new Products;
        $products->ProductName = 'Fanta Rasa Jeruk';
        $products->SupplierID = '4';
        $products->CategoryID = '3';
        $products->QuantityPerUnit ='10';
        $products->UnitPrice ='5000';
        $products->UnitInStock ='100';
        $products->UnitOnOrder = '25';
        $products->ReorderLevel ='';
        $products->Discontinued ='';
        $products->save();

        $products = new Products;
        $products->ProductName = 'Alamo';
        $products->SupplierID = '5';
        $products->CategoryID = '3';
        $products->QuantityPerUnit ='10';
        $products->UnitPrice ='3000';
        $products->UnitInStock ='100';
        $products->UnitOnOrder = '25';
        $products->ReorderLevel ='';
        $products->Discontinued ='';
        $products->save();

        $products = new Products;
        $products->ProductName = 'Crystalline';
        $products->SupplierID = '5';
        $products->CategoryID = '3';
        $products->QuantityPerUnit ='10';
        $products->UnitPrice ='3500';
        $products->UnitInStock ='140';
        $products->UnitOnOrder = '45';
        $products->ReorderLevel ='';
        $products->Discontinued ='';
        $products->save();
    }
}