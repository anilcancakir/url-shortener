<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCalculateUrlKeyByIdTrigger extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        if (!app()->environment('testing')) {
            DB::statement(file_get_contents(__DIR__ . '/statements/create_calculate_url_key_by_id_trigger.sql'));
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        if (!app()->environment('testing')) {
            DB::statement(file_get_contents(__DIR__ . '/statements/drop_calculate_url_key_by_id_trigger.sql'));
        }
    }
}
