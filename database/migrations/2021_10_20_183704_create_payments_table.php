<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->integer('payment_id');
            $table->foreignId('student_id')
                  ->constrained('students')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreignId('subject_id')
                  ->constrained('subjects');
            $table->decimal('amount_paid',10,2);
            $table->decimal('balance_amount',10,2);
            $table->date('date_paid');
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
        Schema::dropIfExists('payments');
    }
}
