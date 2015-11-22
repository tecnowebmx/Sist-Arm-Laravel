<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('subcontract_id');
            $table->integer('seller_id');
            $table->tinyInteger('contacto_isi');
            $table->string('name');
            $table->string('contact');
            $table->tinyInteger('type');
            $table->string('phone');
            $table->string('email');
            $table->string('address');
            $table->string('colonia');
            $table->string('municipio');
            $table->string('state');
            $table->string('zipcode');
            $table->date('fecha_alta');
            $table->date('fecha_conversion');
            $table->tinyInteger('solicitud_apertura_cuenta');
            $table->tinyInteger('acta_constitutiva');
            $table->tinyInteger('comprobante_domicilio');
            $table->tinyInteger('copia_cedula_fiscal');
            $table->tinyInteger('rfc');
            $table->tinyInteger('status');
            $table->rememberToken();
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
        Schema::drop('customers');
    }
}
