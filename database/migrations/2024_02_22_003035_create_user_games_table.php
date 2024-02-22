<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_games', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('game',50);
            $table->unsignedBigInteger('console_id');
            $table->date('start');
            $table->date('end');
            $table->text('review');
            $table->float('rating',3,1);
            $table->timestamps();

            //constraints
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('console_id')->references('id')->on('consoles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()

    {
        Schema::table('user_games',function(Blueprint $table){
            $table->dropForeign('user_games_user_id_foreign');
            $table->dropForeign('user_games_console_id_foreign');
        });

        Schema::dropIfExists('user_games');
    }
}
