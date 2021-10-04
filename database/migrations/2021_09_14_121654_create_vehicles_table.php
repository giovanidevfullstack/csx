<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->integer('price')->nullable();
            $table->string('factory')->nullable();
            $table->date('year')->nullable();
            $table->json('details')->nullable();
            $table->string('doc_number')->nullable();
            $table->string('doc_type')->nullable();   
            $table->date('doc_date')->nullable();         
            $table->boolean('is_new')->nullable();
            $table->boolean('has_financing')->nullable();
            $table->boolean('is_sold')->nullable();
            $table->boolean('is_visible')->nullable();
            $table->boolean('is_annual_tax_paid')->nullable();
            $table->boolean('has_crash')->nullable();    
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
        Schema::dropIfExists('vehicles');
    }
}
