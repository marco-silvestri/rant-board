<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageTagTable extends Migration
{

    public function up()
    {
        Schema::create('message_tag', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('message_id');
            $table->unsignedBigInteger('tag_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('message_tag');
    }
}
