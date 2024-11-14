<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfoliosTable extends Migration
{
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('alumni_id')->constrained('alumni')->onDelete('cascade'); // Foreign key to alumni table
            $table->string('name'); // Name of the portfolio
            $table->string('profession'); // Profession of the alumnus
            $table->text('bio'); // Bio or description
            $table->string('profile_image')->nullable(); // Path to the profile image
            $table->string('intro_video')->nullable(); // Path to the intro video
            $table->json('portfolio_files')->nullable(); // Store portfolio files as JSON
            $table->timestamps(); // Created at & Updated at
        });
    }

    public function down()
    {
        Schema::dropIfExists('portfolios');
    }
}