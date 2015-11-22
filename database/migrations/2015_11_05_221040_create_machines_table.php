<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMachinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('machines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->decimal('daily_price');
            $table->decimal('weekly_price');
            $table->decimal('monthly_price');
            $table->string('brand');
            $table->string('model');
            $table->string('series');
            $table->string('year');
            $table->float('original_number');
            $table->string('horometro');
            $table->string('motor');
            $table->decimal('costo_adquisicion');
            $table->float('sale_price');
            $table->float('acquisition_cost');
            $table->tinyInteger('availability');
            $table->tinyInteger('status');
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
        Schema::drop('machines');
    }
}
