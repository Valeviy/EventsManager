<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $connection = config('eventmanager.table-models.connection') ?: config('database.default');

        Schema::connection($connection)->create(config('eventmanager.table-models.roles_table'), function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
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

        Schema::connection($connection)->dropIfExists(config('eventmanager.table-models.roles_table'));
    }
}
