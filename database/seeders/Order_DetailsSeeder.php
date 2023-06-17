<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Order_Details;
class Order_DetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $order_details = new order_details;
        $order_details->OrderID = '1';
        $order_details->ProductID = '1';
        $order_details->UnitPrice = '2.500.000';
        $order_details->Quantity = '4';
        $order_details->Discount = '';
        $order_details->Save();

        $order_details = new order_details;
        $order_details->OrderID = '1';
        $order_details->ProductID = '2';
        $order_details->UnitPrice = '6.500.000';
        $order_details->Quantity = '3';
        $order_details->Discount = '';
        $order_details->Save();

        $order_details = new order_details;
        $order_details->OrderID = '3';
        $order_details->ProductID = '2';
        $order_details->UnitPrice = '6.500.000';
        $order_details->Quantity = '4';
        $order_details->Discount = '';
        $order_details->Save();

        $order_details = new order_details;
        $order_details->OrderID = '5';
        $order_details->ProductID = '1';
        $order_details->UnitPrice = '2.500.000';
        $order_details->Quantity = '6';
        $order_details->Discount = '';
        $order_details->Save();

        $order_details = new order_details;
        $order_details->OrderID = '4';
        $order_details->ProductID = '3';
        $order_details->UnitPrice = '10.500.000';
        $order_details->Quantity = '3';
        $order_details->Discount = '10';
        $order_details->Save();

        $order_details = new order_details;
        $order_details->OrderID = '3';
        $order_details->ProductID = '5';
        $order_details->UnitPrice = '3500';
        $order_details->Quantity = '20';
        $order_details->Discount = '';
        $order_details->Save();

        $order_details = new order_details;
        $order_details->OrderID = '1';
        $order_details->ProductID = '4';
        $order_details->UnitPrice = '8.500.000';
        $order_details->Quantity = '3';
        $order_details->Discount = '25';
        $order_details->Save();

        $order_details = new order_details;
        $order_details->OrderID = '2';
        $order_details->ProductID = '3';
        $order_details->UnitPrice = '10.500.000';
        $order_details->Quantity = '3';
        $order_details->Discount = '10';
        $order_details->Save();

        $order_details = new order_details;
        $order_details->OrderID = '4';
        $order_details->ProductID = '8';
        $order_details->UnitPrice = '5000';
        $order_details->Quantity = '30';
        $order_details->Discount = '';
        $order_details->Save();

        $order_details = new order_details;
        $order_details->OrderID = '3';
        $order_details->ProductID = '6';
        $order_details->UnitPrice = '2750';
        $order_details->Quantity = '30';
        $order_details->Discount = '';
        $order_details->Save();
        
        $order_details = new order_details;
        $order_details->OrderID = '1';
        $order_details->ProductID = '7';
        $order_details->UnitPrice = '1000';
        $order_details->Quantity = '40';
        $order_details->Discount = '';
        $order_details->Save();

        $order_details = new order_details;
        $order_details->OrderID = '3';
        $order_details->ProductID = '5';
        $order_details->UnitPrice = '2500';
        $order_details->Quantity = '40';
        $order_details->Discount = '';
        $order_details->Save();

        $order_details = new order_details;
        $order_details->OrderID = '5';
        $order_details->ProductID = '2';
        $order_details->UnitPrice = '6.500.000';
        $order_details->Quantity = '1';
        $order_details->Discount = '';
        $order_details->Save();

        $order_details = new order_details;
        $order_details->OrderID = '2';
        $order_details->ProductID = '1';
        $order_details->UnitPrice = '2.500.000';
        $order_details->Quantity = '2';
        $order_details->Discount = '';
        $order_details->Save();

        $order_details = new order_details;
        $order_details->OrderID = '4';
        $order_details->ProductID = '8';
        $order_details->UnitPrice = '5000';
        $order_details->Quantity = '10';
        $order_details->Discount = '';
        $order_details->Save();

        $order_details = new order_details;
        $order_details->OrderID = '3';
        $order_details->ProductID = '6';
        $order_details->UnitPrice = '2750';
        $order_details->Quantity = '30';
        $order_details->Discount = '';
        $order_details->Save();

        $order_details = new order_details;
        $order_details->OrderID = '4';
        $order_details->ProductID = '1';
        $order_details->UnitPrice = '2.500.000';
        $order_details->Quantity = '1';
        $order_details->Discount = '4';
        $order_details->Save();
        
        $order_details = new order_details;
        $order_details->OrderID = '2';
        $order_details->ProductID = '6';
        $order_details->UnitPrice = '2750';
        $order_details->Quantity = '10';
        $order_details->Discount = '';
        $order_details->Save();

        $order_details = new order_details;
        $order_details->OrderID = '5';
        $order_details->ProductID = '6';
        $order_details->UnitPrice = '2750';
        $order_details->Quantity = '30';
        $order_details->Discount = '';
        $order_details->Save();
        
        $order_details = new order_details;
        $order_details->OrderID = '2';
        $order_details->ProductID = '10';
        $order_details->UnitPrice = '3000';
        $order_details->Quantity = '30';
        $order_details->Discount = '';
        $order_details->Save();
        
    }
}