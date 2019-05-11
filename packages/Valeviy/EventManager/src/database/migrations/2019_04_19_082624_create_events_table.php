<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $connection = config('eventmanager.table-models.connection') ?: config('database.default');

        Schema::connection($connection)->create(config('eventmanager.table-models.events_table'), function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('type', 150);
            $table->text('short_description');
            $table->text('full_description');
            $table->string('city', 100);
            $table->string('address');
            $table->timestamp('begining')->nullable();
            $table->timestamp('ending')->nullable();
            $table->timestamp('reg_end')->nullable();
            $table->integer('number_participants');
            $table->string('logo');
            $table->string('website');
            $table->string('email',50);
            $table->string('phone', 11);
            $table->text('program')->nullable();
            $table->boolean('ticket_available');
            $table->boolean('promocode_available');
            $table->boolean('status')->nullable();
            $table->json('custom_fields')->nullable();
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

        Schema::connection($connection)->dropIfExists('eventmanager.table-models.events_table');
    }
}
