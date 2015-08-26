<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Model\Aminities;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		//$this->call('UserTableSeeder');
		$names = [


						'Controlled Access',

						'Laundry Facilities',

						'Elevator Service',

						'Storage Space',

						'High Speed Internet Available',

						'Clubhouse',

						'Fitness Center',

						'Near Public Transit',

						'Business Center',

						'Courtyard',

						'Rec Room',

						'On-site Maintenance/Management',

						'Resident Functions',

						'Library With Internet Access',

						'Garages Available',

						'TV & Billiards',

						'Guest Suite Available',

						'Wellness Room',

						'Movie Theatre',

						'Arts & Craft Room',

						'Beauty Shop/Nail Salon',

						'Legacy Rehab On-site'


		];

		foreach ($names as $name) {
			Aminities::create(array('name' => $name));
		}

	}

}
