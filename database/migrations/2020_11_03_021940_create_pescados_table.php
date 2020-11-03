<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreatePescadosTable.
 */
class CreatePescadosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pescados', function(Blueprint $table) {
            $table->increments('id');
			$table->string('nome', 50);
			$table->float('massa', 12);
			$table->float('tamanho', 12);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pescados');
	}
}
