<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmailQueueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('email_queue', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('user_id')->nullable();
			$table->text('email_content')->nullable();
			$table->text('email_to')->nullable();
			$table->text('email_cc')->nullable();
			$table->text('email_subject')->nullable();
			$table->string('attachment', 200)->nullable();
			$table->string('secret_key', 200)->nullable();
			$table->boolean('email_status')->default(0);
			$table->string('response', 200)->nullable();
			$table->dateTime('sent_on')->nullable();
			$table->integer('no_of_try')->default(0);
			$table->string('others_info', 100)->nullable();
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
		Schema::drop('email_queue');
	}

}
