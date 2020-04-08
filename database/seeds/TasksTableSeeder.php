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
            'name'=>'study',
            'complete'=>true
        ]);

        factory(App\Task::class)->create([
            'name'=>'sleep',
            'complete'=>false
        ]);
        //
    }
}
