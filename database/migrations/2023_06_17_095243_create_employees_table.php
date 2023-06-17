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
        Schema::create('employees', function (Blueprint $table) {
            $table->id('EmployeeID',11);
            $table->string('LastName',100);
            $table->string('FirstName',100);
            $table->string('Title',100);
            $table->string('TitleOfCourtesy',100);
            $table->string('BirthDate',100);
            $table->string('HireDate',100);
            $table->string('Address',100);
            $table->string('City',100);
            $table->string('Region',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};