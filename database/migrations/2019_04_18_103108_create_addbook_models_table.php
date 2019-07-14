<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddbookModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addbook_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bookname');
            $table->string('book_id');
            $table->string('book_category');
            $table->string('book_author');
            $table->string('book_publisher');
            $table->string('book_rack');
            $table->boolean('status')->default(1);
            $table->boolean('trash')->default(1);
            $table->mediumText('book_image')->nullable();
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
        Schema::dropIfExists('addbook_models');
    }
}
