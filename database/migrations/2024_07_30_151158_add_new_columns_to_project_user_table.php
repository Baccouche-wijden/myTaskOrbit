<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('project_user', function (Blueprint $table) {
            // Add new columns or make other changes here
        });
    }

    public function down()
    {
        Schema::table('project_user', function (Blueprint $table) {
            // Drop the columns or revert changes here
        });
    }
};
