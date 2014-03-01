<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePilotFeedbacksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('PilotFeedbacks', function(Blueprint $table) {
			$table->increments('id');
			$table->string('controller', 50);
			$table->integer('rating', 5);
			$table->string('name', 50);
			$table->string('email', 50);
			$table->string('ip', 16);
			$table->text('comments');
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
		Schema::drop('PilotFeedbacks');
	}

}
