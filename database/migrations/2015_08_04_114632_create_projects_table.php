<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('logo');
			$table->string('phone');
			$table->string('mobile');
			$table->string('town');
			$table->string('city');
			$table->string('address');
			$table->string('fax');
			$table->string('pin');
			$table->string('latitude');
			$table->string('longitude');
			$table->string('website');
			$table->string('aminaties');
			$table->string('no_units');
			$table->string('type');
			$table->string('status');
			$table->string('possesion_start');
			$table->string('configuration');
			$table->string('min_price');
			$table->string('max_price');
			$table->string('emi_starts');
			$table->string('project_size');
			$table->string('carpet_min');
			$table->string('carpet_max');
			$table->string('about_location');
			$table->string('near_area');
			$table->string('land_size');
			$table->string('no_floor');
			$table->string('specification');
			$table->string('legal_approve');
			$table->string('bank_approve');
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
		Schema::drop('projects');
	}

}
