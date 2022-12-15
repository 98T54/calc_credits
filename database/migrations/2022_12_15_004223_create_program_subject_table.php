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
        Schema::create('program_subject', function (Blueprint $table) {
            $table->foreignId('program_id')->constrained('programs');
            $table->foreignId('subject_id')->constrained('subjects');
            $table->primary(['program_id', 'subject_id']);
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program_subject');
    }
};
