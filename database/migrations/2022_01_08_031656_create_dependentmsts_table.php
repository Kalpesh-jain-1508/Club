<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDependentmstsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dependentmsts', function (Blueprint $table) {
            $table->id();
            $table->string('dname');
            $table->integer('membershipid');
            $table->foreign('membershipid')->references('id')->on('membershipmsts');
            $table->string('relation');
            $table->date('birthdate');
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
        Schema::dropIfExists('dependentmsts');
    }
}
