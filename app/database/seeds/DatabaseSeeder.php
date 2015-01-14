<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('TweetsTableSeeder');
		$this->call('DadosTableSeeder');
		$this->call('EscolaridadesTableSeeder');
		$this->call('FuncionaisTableSeeder');
		$this->call('DiciplinasTableSeeder');
		$this->call('DocumentacaosTableSeeder');
		$this->call('EnderecosTableSeeder');
		$this->call('SuperiorsTableSeeder');
		$this->call('HabilitacosTableSeeder');
	}

}
