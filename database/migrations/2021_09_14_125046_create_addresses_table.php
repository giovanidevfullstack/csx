<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('addressable_type')->nullable();
            $table->integer('addressable_id')->nullable();
            $table->string('country')->nullable();
            $table->string('uf', 3)->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('postcode', 15)->nullable();
            $table->string('street_name')->nullable();
            $table->string('street_number', 10)->nullable();
            $table->string('note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
