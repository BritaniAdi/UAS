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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id('SupplierID',11);
            $table->string('CompanyName',100);
            $table->string('contactName',100);
            $table->string('ContactTitle',100);
            $table->string('Address',100);
            $table->string('City',100);
            $table->string('Region',100);
            $table->string('PostalCode',11);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};