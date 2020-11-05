<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('isbn', 13)->unique();
            $table->string('title', 50);
            $table->foreignId('author_id')->constrained();
            $table->string('cover')->nullable();
            $table->float('price', 6, 2);
            $table->smallInteger('pages')->nullable();
            $table->smallInteger('number');
            $table->date('date_of_release')->nullable();
            $table->string('publisher', 50)->nullable();
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
        Schema::dropIfExists('comics');
    }
}
