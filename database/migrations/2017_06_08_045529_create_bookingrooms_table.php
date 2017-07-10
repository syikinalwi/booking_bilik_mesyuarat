<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingroomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookingrooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('department_name', 50);
            $table->enum('room', ['bilikgerakan', 'bilikmesyuaratA', 'bilikmesyuaratC']);//radiobtn
            $table->string('stuff_list', 50);//checkbox
            $table->date('start');
            $table->string('meetingtitle_name', 50);
            $table->text('food_name', 50);
            $table->text('drink_name', 50);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('bookingrooms');
    }
}
