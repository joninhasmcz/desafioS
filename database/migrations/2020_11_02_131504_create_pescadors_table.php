<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreatePescadorsTable.
 */
class CreatePescadorsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pescadores', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nome', 50);
			$table->string('cpf', 20)->unique();
			$table->string('telefone', 50);
			$table->string('endereco', 50);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{

		Schema::drop('pescadores');
	}
}
