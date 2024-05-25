<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemWorks extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_works', function (Blueprint $table) {
            $table->id('item_work_id');
            $table->text('item_works');
            $table->timestamps();

            $table->unsignedBigInteger('iw_job_order_no');
            $table->foreign('iw_job_order_no')->references('job_order_no')->on('job_order')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('iw_contract_id');
            $table->foreign('iw_contract_id')->references('contract_id')->on('contract')->onDelete('cascade')->onUpdate('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('item_works');
    }
}
