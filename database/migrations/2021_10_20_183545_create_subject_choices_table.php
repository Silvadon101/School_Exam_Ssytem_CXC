<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectChoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject_choices', function (Blueprint $table) {
            $table->id();
            $table->integer('subchoice_id');
            $table->foreignId('student_id')
                  ->constrained('students')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreignId('subject_id')
                  ->constrained('subjects');
            $table->Text('approved');
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
        Schema::dropIfExists('subject_choices');
    }
}
