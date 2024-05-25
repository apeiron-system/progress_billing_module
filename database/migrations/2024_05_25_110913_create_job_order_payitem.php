<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobOrderPayitem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_order_payitem', function (Blueprint $table) {
            $table->id('pay_item_id');
            $table->integer('job_order_no');
            $table->integer('job_order_part');
            $table->string('equipment_name');
            $table->timestamps();

            $table->unsignedBigInteger('pi_job_order_no');
            $table->foreign('pi_job_order_no')->references('job_order_no')->on('job_order')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('pi_jo_part_id');
            $table->foreign('pi_jo_part_id')->references('part_id')->on('job_order_part')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_order_payitem');
    }
}
