<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateReservasTable.
 */
class CreateReservasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reservas', function(Blueprint $table) 
		{
			$table->increments('id');
			$table->integer('id_pescaria')->default('0');
			$table->integer('id_pescado');
			$table->integer('id_pescador');

			$table->foreign('id_pescaria')->references('id')->on('pescarias');
			$table->foreign('id_pescado')->references('id')->on('pescados');
			$table->foreign('id_pescador')->references('id')->on('pescadores');
            
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		
		Schema::drop('reservas');
	}
}
