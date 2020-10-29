<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
              $table->unsignedBigInteger('user_id');
              $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            //   $table->unsignedBigInteger('faculty_id')->nullable()->unsigned();
            //   $table->unsignedBigInteger('department_id')->nullable()->unsigned();
              $table->string('location')->nullable();;
              $table->string('problem_description')->nullable();;
              $table->string('priority')->nullable();;
            //   $table->boolean('head_dept_state')->nullable();
            //   $table->boolean('dean_state')->nullable();
            //   $table->boolean('ict_fac_state')->nullable();
            //   $table->boolean('ict_pre_state')->nullable();
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
        Schema::dropIfExists('orders');
    }
}