<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('meets', function (Blueprint $table) {
            $table->id(); // or $table->bigIncrements('id');
            $table->string('title');
            $table->date('date');
            $table->time('time');
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    public function down()
    {
        Schema::dropIfExists('meets');
    }

};
