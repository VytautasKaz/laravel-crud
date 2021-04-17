<?php

namespace Database\Seeders;

use \App\Models\Employee;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $emp1 = new Employee();
        $emp1->name = "Mohamed";
        $emp1->save();

        $emp2 = new Employee();
        $emp2->name = "Ronan";
        $emp2->save();

        $emp3 = new Employee();
        $emp3->name = "Jessica";
        $emp3->save();

        $emp4 = new Employee();
        $emp4->name = "Blake";
        $emp4->save();

        $emp5 = new Employee();
        $emp5->name = "Ashley";
        $emp5->save();
    }
}
