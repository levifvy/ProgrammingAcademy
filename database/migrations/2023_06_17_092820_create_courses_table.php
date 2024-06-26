<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug');

            $table->foreignId('category_id')
                ->constrained('categories')
                ->onUpdate('cascade')
                ->onDelete('cascade');

            $table->text('description')->nullable();
            $table->integer('goals')->default(0);
            $table->integer('fouls_commited')->default(0);
            $table->integer('fouls_received')->default(0);
            $table->integer('red_cards')->default(0);
            $table->integer('yellow_cards')->default(0);
            $table->integer('match_results')->default(0);
            $table->integer('score')->default(100);

            $table->timestamps();
        });
    }
    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
}