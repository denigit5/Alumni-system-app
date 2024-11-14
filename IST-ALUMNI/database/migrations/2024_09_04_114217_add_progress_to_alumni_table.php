<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProgressToAlumniTable extends Migration
{
    public function up()
    {
        Schema::table('alumni', function (Blueprint $table) {
            $table->string('progress')->default('in_school'); // or 'graduate'
        });
    }

    public function down()
    {
        Schema::table('alumni', function (Blueprint $table) {
            $table->dropColumn('progress');
        });
    }
}
