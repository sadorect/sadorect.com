<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('portfolios', function (Blueprint $table) {
          $table->id();
          $table->string('title');
          $table->text('description')->nullable();
          $table->string('image')->nullable(); // Made nullable since it will be auto-generated
          $table->string('project_url');       // Added project URL field
          $table->string('category')->nullable();
          $table->string('client')->nullable();
          $table->date('completion_date');
          $table->boolean('is_active')->default(true); // Added status field
          $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('portfolios');
    }
};
