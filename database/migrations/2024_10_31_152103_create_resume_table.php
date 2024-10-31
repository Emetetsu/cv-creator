<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResumeTable extends Migration
{
    public function up()
    {
        Schema::create('resume', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->text('summary');
            $table->string('education');
            $table->string('experience');
            $table->string('skills');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('resume');
    }

};
