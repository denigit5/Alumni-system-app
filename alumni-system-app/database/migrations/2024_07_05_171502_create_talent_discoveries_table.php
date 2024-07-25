<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('talent_discoveries', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employer_id');
            $table->unsignedBigInteger('alumni_id');
            $table->timestamps();

            $table->foreign('employer_id')->references('id')->on('employers')->onDelete('cascade');
            $table->foreign('alumni_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('talent_discoveries');
    }
};
