<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipmentNeeded extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipment_needed', function (Blueprint $table) {
            $table->id('equipment_id');
            $table->string('equipment_name');
            $table->timestamps();

            $table->unsignedBigInteger('en_job_order_no');
            $table->foreign('en_job_order_no')->references('job_order_no')->on('job_order')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('en_contract_id');
            $table->foreign('en_contract_id')->references('contract_id')->on('contract')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipment_needed');
    }
}
