<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Task::class)->create([
            'name'=>'Estudar php',
            'complete'=>false
        ]);
        factory(App\Task::class)->create([
            'name'=>'Estudar vue.js',
            'complete'=>false
        ]);
        factory(App\Task::class)->create([
            'name'=>'Estudar node.js',
            'complete'=>false
        ]);
    }
}
