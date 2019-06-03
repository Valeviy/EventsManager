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
            $table->text('full_description')->nullable();
            $table->string('city', 100);
            $table->string('address');
            $table->string('begining');
            $table->string('ending')->nullable();
            $table->string('reg_end')->nullable();
            $table->integer('number_participants')->nullable();;
            $table->string('logo');
            $table->string('website');
            $table->string('email',50);
            $table->string('phone', 20);
            $table->integer('user_id');
            $table->text('program')->nullable();
            $table->boolean('status')->default(false);
            $table->json('custom_fields')->nullable();
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

        Schema::connection($connection)->dropIfExists('eventmanager.table-models.events_table');
    }
}
