<?php

use Illuminate\Database\Seeder;
use App\Task;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([
            'name' => 'Estudiar',
            'description' => 'Leer el libro de matemáticas',
            'number' => 3,
        ]);

        Task::create([
            'name' => 'Ejercitar',
            'description' => 'Dar 10 vueltas al parque',
            'number' => 12,
        ]);
    }
}
