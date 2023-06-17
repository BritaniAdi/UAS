<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('ProductID');
            $table->string('ProductName');
            $table->integer('SupplierID');
            $table->integer('CategoryID');
            $table->string('QuantityPerUnit');
            $table->string('UnitPrice');
            $table->string('UnitInstock');
            $table->string('UnitOnOrder');
            $table->string('ReorderLevel');
            $table->string('Discontinued');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};