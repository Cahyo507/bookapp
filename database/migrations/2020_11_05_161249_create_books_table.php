<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBooksTable extends Migration
{

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('books');
    }

    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
        
            $table->increments('id');
            $table->string('title');
            $table->text('description');
            $table->string('author');
            $table->timestamps();
        });
    }
}
