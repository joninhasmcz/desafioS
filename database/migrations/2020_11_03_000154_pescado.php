<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pescado extends Migration
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
			$table->float('massa', 12,2);
			$table->float('tamanho', 12,2);
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
