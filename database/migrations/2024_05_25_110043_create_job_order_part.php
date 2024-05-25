<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobOrderPart extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_order_part', function (Blueprint $table) {
            $table->id('part_id');
            $table->string('job_order_part');
            $table->text('description');
            $table->timestamps();

            $table->unsignedBigInteger('part_job_order_id');
            $table->foreign('part_job_order_id')->references('job_order_id')->on('job_order')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_order_part');
    }
}
