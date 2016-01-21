<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */

	//tabela chamada songs

	public function up()
	{
		Schema::create('songs', function(Blueprint $table)
		{	//colunas das tabelas
			$table->increments('id');
			$table->string('title');
			$table->text('lyrics')->nullable(); //pode se nulo
			$table->string('slug')->unique();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	//se eu quiser fazer um rollback
	public function down()
	{
		Schema::drop('songs');
	}

}
