<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('u_name', 191);
			$table->string('u_email', 191)->unique();
			$table->string('u_pass', 191)->nullable();
			$table->string('u_city', 191)->nullable();
			$table->string('u_address', 191)->nullable();
			$table->string('u_postalcode', 191)->nullable();
			$table->string('u_mobile', 191);
			$table->string('admin_role', 191)->nullable();
			$table->string('user_verification', 20)->nullable();
			$table->dateTime('email_verified_at')->nullable();
			$table->string('password', 191)->nullable();
			$table->string('remember_token', 100)->nullable();
			$table->text('user_hash', 65535)->nullable();
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
		Schema::drop('users');
	}

}
