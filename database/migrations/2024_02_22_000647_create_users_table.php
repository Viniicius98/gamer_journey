<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->date('birth');
            $table->tinyInteger('age');
            $table->tinyInteger('pref_console');
            $table->string('gender',20);
            $table->string('email',50);
            $table->string('password',100);
            $table->unsignedBigInteger('permission_id')->default(3);
            $table->unsignedBigInteger('status_id')->default(1);
            $table->timestamps();

            //constraints
            $table->foreign('permission_id')->references('id')->on('permissions');
            $table->foreign('status_id')->references('id')->on('statuses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::table('users',function(Blueprint $table){
            $table->dropForeign('users_permission_id_foreign');
            $table->dropForeign('users_status_id_foreign');
        });

        Schema::dropIfExists('users');
    }
}
