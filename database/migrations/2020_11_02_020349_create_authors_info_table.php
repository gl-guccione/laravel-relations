<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors_info', function (Blueprint $table) {
            $table->foreignId('author_id')->constrained();
            $table->boolean('alive')->default(0);
            $table->string('image')->default('https://wgntv.com/wp-content/uploads/sites/5/2018/08/gettyimages-1006480588-1.jpg?w=760');
            $table->text('biography')->nullable();
            $table->string('nationality', 50)->nullable();
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
        Schema::dropIfExists('authors_info');
    }
}
