<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Orders;
class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orders = new Orders;
        $orders->OrderID = '1';
        $orders->CustomerID = '1';
        $orders->EmployeeID = '1';
        $orders->OrderDate ='2023-05-16';
        $orders->RequiredDate ='2023-05-19';
        $orders->ShippedDate ='2023-05-20';
        $orders->ShipVia = '1';
        $orders->Freight ='1.500.000';
        $orders->ShipName ='Ship JNE';
        $orders->ShipAddress ='Jl.Insan 21';
        $orders->ShipCity ='Jambi';
        $orders->ShipRegion ='Jambi Timur';
        $orders->ShipPostalCode ='555431';
        $orders->ShipCountry ='Indonesia';
        $orders->save();

        $orders = new Orders;
        $orders->OrderID = '2';
        $orders->CustomerID = '2';
        $orders->EmployeeID = '2';
        $orders->OrderDate ='2023-04-18';
        $orders->RequiredDate ='2023-04-24';
        $orders->ShippedDate ='2023-04-20';
        $orders->ShipVia = '1';
        $orders->Freight ='1.800.000';
        $orders->ShipName ='Ship JNE';
        $orders->ShipAddress ='Jl. Bekasi timur';
        $orders->ShipCity ='Bekasi';
        $orders->ShipRegion ='Bekasi Barat';
        $orders->ShipPostalCode ='212123';
        $orders->ShipCountry ='Indonesia';
        $orders->save();

        $orders = new Orders;
        $orders->OrderID = '3';
        $orders->CustomerID = '3';
        $orders->EmployeeID = '3';
        $orders->OrderDate ='2023-06-05';
        $orders->RequiredDate ='2023-06-14';
        $orders->ShippedDate ='2023-06-10';
        $orders->ShipVia = '2';
        $orders->Freight ='1.300.000';
        $orders->ShipName ='Ship Sicepat';
        $orders->ShipAddress ='Jl.Sugiman';
        $orders->ShipCity ='Surabaya';
        $orders->ShipRegion ='Surabaya Barat';
        $orders->ShipPostalCode ='234793';
        $orders->ShipCountry ='Indonesia';
        $orders->save();

        $orders = new Orders;
        $orders->OrderID = '4';
        $orders->CustomerID = '4';
        $orders->EmployeeID = '4';
        $orders->OrderDate ='2023-02-05';
        $orders->RequiredDate ='2023-02-10';
        $orders->ShippedDate ='2023-02-07';
        $orders->ShipVia = '2';
        $orders->Freight ='1.900.000';
        $orders->ShipName ='Ship Sicepat';
        $orders->ShipAddress ='Jl.Varija';
        $orders->ShipCity ='Bali';
        $orders->ShipRegion ='Bali Utara';
        $orders->ShipPostalCode ='234247';
        $orders->ShipCountry ='Indonesia';
        $orders->save();

        $orders = new Orders;
        $orders->OrderID = '5';
        $orders->CustomerID = '5';
        $orders->EmployeeID = '5';
        $orders->OrderDate ='2023-03-21';
        $orders->RequiredDate ='2023-03-27';
        $orders->ShippedDate ='2023-03-22';
        $orders->ShipVia = '2';
        $orders->Freight ='2.500.000';
        $orders->ShipName ='Ship Sicepat';
        $orders->ShipAddress ='Jl.Sinanajar';
        $orders->ShipCity ='Lampung';
        $orders->ShipRegion ='Lampung Pusat';
        $orders->ShipPostalCode ='345834';
        $orders->ShipCountry ='Indonesia';
        $orders->save();

    }
}