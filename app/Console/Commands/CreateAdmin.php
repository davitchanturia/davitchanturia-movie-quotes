<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateAdmin extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'create:admin';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Creates admin user and inster data into the database';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct(User $user)
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return int
	 */
	public function handle()
	{
		$name = $this->ask('what is yout name?');
		$email = $this->ask('what is your email?');
		$password = $this->secret('enter password');
		$confirmPassword = $this->secret('confirm password');

		while (!(strlen($password) > 8 && $password === $confirmPassword))
		{
			if (!strlen($password) > 8)
			{
				$this->error('Password must be more that 8 characters');
			}
			if ($password !== $confirmPassword)
			{
				$this->error('Password and Confirm password do not match');
			}

			$password = $this->secret('Password');

			$confirmPassword = $this->secret('Confirm password');
		}

		User::create(['name' => $name, 'email' => $email, 'password' => $password]);

		$this->info('Admin is created succesfully!');
	}
}
