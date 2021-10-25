<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFirstUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('first_users', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->char('fname',8);
            $table->char('lname',10);
            $table->string('r_num',100);
            $table->char('class',10);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('first_users');
    }
}
