<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ResetVehicles extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reset:vehicles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        DB::statement("DELETE FROM oauth_access_tokens");
        

        $documents = \App\HcrDocument::all();

        foreach ($documents as $d) {
            $document = \App\HcrDocument::where('id', $d->id);
            $document->update(['enabled' => 0]);
        }

        $documents = \App\LostSuopDocument::all();

        foreach ($documents as $d) {
            $document = \App\LostSuopDocument::where('id', $d->id);
            $document->update(['enabled' => 0]);
        }

        $documents = \App\LostEjecDocument::all();

        foreach ($documents as $d) {
            $document = \App\LostEjecDocument::where('id', $d->id);
            $document->update(['enabled' => 0]);
        }

        $documents = \App\InteractionSuopDoc::all();

        foreach ($documents as $d) {
            $document = \App\InteractionSuopDoc::where('id', $d->id);
            $document->update(['enabled' => 0]);
        }

        $documents = \App\InteractionSuopDoc::all();

        foreach ($documents as $d) {
            $document = \App\InteractionSuopDoc::where('id', $d->id);
            $document->update(['enabled' => 0]);
        }

        $documents = \App\VehiclesChecklistDocument::all();

        foreach ($documents as $d) {
            $document = \App\VehiclesChecklistDocument::where('id', $d->id);
            $document->update(['enabled' => 0]);
        }

        $documents = \App\DriverFatigueControlDocument::all();

        foreach ($documents as $d) {
            $document = \App\DriverFatigueControlDocument::where('id', $d->id);
            $document->update(['enabled' => 0]);
        }

        $documents = \App\HealthDocument::all();

        foreach ($documents as $d) {
            $document = \App\HealthDocument::where('id', $d->id);
            $document->update(['enabled' => 0]);
        }

        $documents = \App\MettingDocument::all();

        foreach ($documents as $d) {
            $document = \App\MettingDocument::where('id', $d->id);
            $document->update(['enabled' => 0]);
        }

        $documents = \App\SafetyTalkDocument::all();

        foreach ($documents as $d) {
            $document = \App\SafetyTalkDocument::where('id', $d->id);
            $document->update(['enabled' => 0]);
        }

        $documents = \App\PlannedDoc::all();

        foreach ($documents as $d) {
            $document = \App\PlannedDoc::where('id', $d->id);
            $document->update(['enabled' => 0]);
        }

        $documents = \App\HvvvHcrAuditDocument::all();

        foreach ($documents as $d) {
            $document = \App\HvvvHcrAuditDocument::where('id', $d->id);
            $document->update(['enabled' => 0]);
        }

        DB::statement("UPDATE vehicles SET user_id = NULL");

        
    }
}
