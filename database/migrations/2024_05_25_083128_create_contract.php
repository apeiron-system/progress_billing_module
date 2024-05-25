<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContract extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contract', function (Blueprint $table) {
            $table->id('contract_id');
            $table->text('description');
            $table->string('contract_name');
            $table->text('location');
            $table->string('designation');
            $table->date('date_signed');
            $table->string('submitted_by');
            $table->string('signing_authority');
            $table->string('authorized_representative');
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
        Schema::dropIfExists('contract');
    }
}
