<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('seller_id');
            $table->string('project_image')->nullable();
            $table->string('project_name')->nullable();
            $table->string('project_type')->nullable();
            $table->string('rera')->nullable();
            $table->date('project_completion_date')->nullable();
            $table->string('project_area')->nullable();
            $table->double('min_price')->default(0);
            $table->double('max_price')->default(0);
            $table->longText('project_description')->nullable();
            $table->enum('type', ['rent', 'sale']);
            $table->string('area')->nullable();
            $table->double('price')->default(0);
            $table->string('units')->nullable();
            $table->string('video_link')->nullable();
            $table->string('project_brochure')->nullable();
            $table->string('walk_through')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
