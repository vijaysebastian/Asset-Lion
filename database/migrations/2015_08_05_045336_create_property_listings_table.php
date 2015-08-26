<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertyListingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('property_listings', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('type');
			$table->integer('project_id');
			$table->integer('user_id');
			$table->string('gallery');
			$table->string('master_plan');
			$table->string('availability_date');
			$table->string('year_of_construction');
			$table->string('ownership_type');
			$table->string('parking');
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
		Schema::drop('property_listings');
	}

}
