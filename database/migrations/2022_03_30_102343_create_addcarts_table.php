<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddcartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addcarts', function (Blueprint $table) {
            $table->id();
            $table->integer('pid');
            $table->integer('uid');
            $table->integer('price');
            $table->integer('quantity')->default(1);
            $table->string('status')->default('addcart');
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
        Schema::dropIfExists('addcarts');
    }
}
