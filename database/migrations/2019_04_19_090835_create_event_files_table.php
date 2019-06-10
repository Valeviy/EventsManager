<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventFilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $connection = config('eventmanager.table-models.connection') ?: config('database.default');
        Schema::connection($connection)->create(config('eventmanager.table-models.event_files_table'), function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('event_id');
            $table->string('filename');
            $table->index('event_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $connection = config('eventmanager.table-models.connection') ?: config('database.default');
        Schema::connection($connection)->dropIfExists(config('eventmanager.table-models.event_files_table'));
    }
}
