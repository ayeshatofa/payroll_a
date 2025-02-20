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
        Schema::create('salaries', function (Blueprint $table) {
            $table->id('salary_id');
            $table->unsignedBigInteger('emp_id');
            $table->foreign('emp_id')->references('emp_id')->on('employees');
            $table->decimal('basic_salary', 10, 2);
            $table->decimal('allowance', 10, 2);
            $table->decimal('tax_amount', 10, 2);
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
        Schema::dropIfExists('salaries');
    }
};
