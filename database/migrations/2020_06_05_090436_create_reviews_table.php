<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            //method with type and name
            $table->id(); // this will create column 'id' BIGINT, AUTO_INCREMENT, UNSIGNED, PRIMARY KEY
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('movie_id');
            $table->text('text');  
            $table->timestamps(); //this method creates both 'created_at' and 'updated_at' columns (datetime)

            $table->unique(['user_id', 'movie_id']); // creates array of id-s that should be unique
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
