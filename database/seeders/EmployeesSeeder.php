<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Employees;

class EmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = new Employees;
        $employees->LastName = 'Siregar';
        $employees->FirstName = 'Tegah';
        $employees->Title = 'IT';
        $employees->TitleOfCourtesy = 'Mr.';
        $employees->BirthDate = '21-04-1998';
        $employees->HireDate = '22-05-2021';
        $employees->Address = fake()->Address('50');
        $employees->City =  fake()->City();
        $employees->Region = '';
        $employees->save();

        $employees = new Employees;
        $employees->LastName = 'Galeh';
        $employees->FirstName = 'Herman';
        $employees->Title = 'Admin';
        $employees->TitleOfCourtesy = 'Mr.';
        $employees->BirthDate = '22-09-1995';
        $employees->HireDate = '23-09-2020';
        $employees->Address = fake()->Address('50');
        $employees->City =  fake()->City();
        $employees->Region = '';
        $employees->save();
        
        $employees = new Employees;
        $employees->LastName = 'Dave';
        $employees->FirstName = 'Victor';
        $employees->Title = 'IT';
        $employees->TitleOfCourtesy = 'Mr.';
        $employees->BirthDate = '15-03-1995';
        $employees->HireDate = '22-05-2019';
        $employees->Address = fake()->Address('50');
        $employees->City =  fake()->City();
        $employees->Region = '';
        $employees->save();

        $employees = new Employees;
        $employees->LastName = 'Lana';
        $employees->FirstName = 'Wiech';
        $employees->Title = 'Admin';
        $employees->TitleOfCourtesy = 'Mr.';
        $employees->BirthDate = '21-04-2000';
        $employees->HireDate = '22-05-2022';
        $employees->Address = fake()->Address('50');
        $employees->City =  fake()->City();
        $employees->Region = '';
        $employees->save();
        
        $employees = new Employees;
        $employees->LastName = 'Dawin';
        $employees->FirstName = 'Hasan';
        $employees->Title = 'IT';
        $employees->TitleOfCourtesy = 'Mr.';
        $employees->BirthDate = '21-04-1999';
        $employees->HireDate = '22-05-2021';
        $employees->Address = fake()->Address('50');
        $employees->City =  fake()->City();
        $employees->Region = '';
        $employees->save();
        
    }
}