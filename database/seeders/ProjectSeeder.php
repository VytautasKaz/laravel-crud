<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $proj1 = new Project();
        $proj1->title = "PHP";
        $proj1->save();

        $proj2 = new Project();
        $proj2->title = "JS";
        $proj2->save();

        $proj3 = new Project();
        $proj3->title = "Java";
        $proj3->save();

        $proj4 = new Project();
        $proj4->title = "Python";
        $proj4->save();
    }
}
