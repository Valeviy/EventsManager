
    <?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateEventParticipantsTable extends Migration
    {
        public function up()
        {
            $connection = config('eventmanager.table-models.connection') ?: config('database.default');

            Schema::connection($connection)->create(config('eventmanager.table-models.event_participants_table'),
                function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->integer('user_id');
                $table->integer('event_id');
                $table->json('filled_fields')->nullable();
                $table->timestamps();
            });
        }

        public function down()
        {
            $connection = config('eventmanager.table-models.connection') ?: config('database.default');

            Schema::connection($connection)->dropIfExists(config('eventmanager.table-models.event_participants_table'));
        }
    }


