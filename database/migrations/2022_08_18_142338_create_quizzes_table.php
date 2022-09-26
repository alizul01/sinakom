<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('modul_id')->constrained();
            $table->string('image')->nullable();
            $table->string('slug')->nullable();
            $table->string('quiz_path');
            $table->text('desc');
            $table->enum('status', ['dibuka', 'draft', 'ditutup'])->default('draft');
            $table->timestamp('finished_at')->nullable();
            $table->timestamp('started_at')->nullable();
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
        Schema::dropIfExists('quizzes');
    }
};
