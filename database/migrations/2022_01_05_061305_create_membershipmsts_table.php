<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipmstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
       Schema::create('membershipmsts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('mstypeid');
            $table->foreign('mstypeid')->references('id')->on('membershiptypemsts');
            $table->integer('noofdependant');
            $table->date('joiningdate');
            $table->date('expirydate');
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
        Schema::dropIfExists('membershipmsts');
    }
}
