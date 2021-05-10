<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourtsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courts', function (Blueprint $table) {
            $table->id();
            $table->integer('jurisdiction_id'); //юрисдикция
            $table->integer('trial_id'); //суд
            $table->string('plaintiff', 255); //истец
            $table->string('defendant', 255); //ответчик
            $table->string('third_party', 255); //третье лицо
            $table->string('interested_person', 255); //заинтересовнаое лицо
            $table->string('issue',255); //предмет спора
            $table->integer('user_id'); //ответственное лицо
            $table->integer('direction_id'); //направление
            $table->integer('instance_id'); //инстанция
            $table->integer('appeal_id'); //апеляция
            $table->string('result', 255); //результат
            $table->string('comment', 255);
            $table->date('date_create');
            $table->date('date_appo');
            $table->time('time_appo');
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
        Schema::dropIfExists('courts');
    }
}
