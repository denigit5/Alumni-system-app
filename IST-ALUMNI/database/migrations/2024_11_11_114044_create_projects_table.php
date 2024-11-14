<?php

// database/migrations/xxxx_xx_xx_xxxxxx_create_projects_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Project title
            $table->text('description'); // Project description
            $table->string('github_link')->nullable(); // Optional GitHub link
            $table->json('files')->nullable(); // Store uploaded files as JSON (file paths)
            $table->timestamps(); // Created at and Updated at
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
