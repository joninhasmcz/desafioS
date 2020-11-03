<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreatePescariasTable.
 */
class CreatePescariasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pescarias', function(Blueprint $table) {
			$table->increments('id');
			$table->string('localizacao');
			$table->date('dataPescaria');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pescarias');
	}
}
