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
        Schema::create('payroll', function (Blueprint $table) {
            $table->id('payroll_id');
            $table->unsignedBigInteger('emp_id');
            $table->foreign('emp_id')->references('emp_id')->on('employees');
            $table->decimal('salary', 10, 2);
            $table->decimal('bonus', 10, 2);
            $table->decimal('deductions', 10, 2);
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
        Schema::dropIfExists('payroll');
    }
};
