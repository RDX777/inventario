<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComputerImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('computer_image', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('computer_id');
            $table->foreign('computer_id')
                ->references('id')
                ->on('computers')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->unsignedBigInteger('image_id');
            $table->foreign('image_id')
                ->references('id')
                ->on('images')               
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->dateTime('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('computer_image');
    }
}
