<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePromocodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $connection = config('eventmanager.table-models.connection') ?: config('database.default');

        Schema::connection($connection)->create(config('eventmanager.table-models.promocodes_table') , function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('number');
            $table->integer('event_id');
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

        Schema::connection($connection)->dropIfExists(config('eventmanager.table-models.promocodes_table'));
    }
}
