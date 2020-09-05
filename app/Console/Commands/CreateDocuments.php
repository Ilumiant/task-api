<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateDocuments extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:documents';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Crea los documentos diarios';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $users = \App\User::all();
        foreach ($users as $user) {
            
            if ($user->isAdmin()) continue;

            \App\VehiclesChecklistDocument::create([
                "type_document_id" => 9, 
                "user_id" => $user->id,
                "due_date" => \Carbon\Carbon::today()
            ]);
    
            \App\DriverFatigueControlDocument::create([
                "type_document_id" => 8, 
                "user_id" => $user->id,
                "due_date" => \Carbon\Carbon::today()
            ]);
            \App\HealthDocument::create([
                "type_document_id" => 12, 
                "user_id" => $user->id,
                "due_date" => \Carbon\Carbon::today()
            ]);
        }

    }
}
