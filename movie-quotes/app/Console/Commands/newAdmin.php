<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class newAdmin extends Command
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
        $adminDetails = $this->getDetails();

        User::create($adminDetails);

        $this->info('Admin is created succesfully!');
    }

    private function getDetails() : array
    {
        $details['name'] = $this->ask('what is yout name?');
        $details['email'] = $this->ask('what is your email?');
        $details['password'] = $this->secret('enter password');
        $details['confirm_password'] = $this->secret('confirm password');


        // error messages
        while (! $this->isValidPassword($details['password'], $details['confirm_password'])) {
            if (! $this->length($details['password'])) {
                $this->error('Password must be more that 8 characters');
            }
            if (! $this->match($details['password'], $details['confirm_password'])) {
                $this->error('Password and Confirm password do not match');
            }

            //თავიდან შეყავს მონაცემები
            $details['password'] = $this->secret('Password');
            $details['confirm_password'] = $this->secret('Confirm password');
        }


        return $details;
    }

    // ამოწმებს პაროლის ვალიდურობას
    private function isValidPassword(string $password, string $confirmPassword) : bool
    {
        return $this->length($password) && $this->match($password, $confirmPassword);
    }

    //ამოწმებს პაროლის სიგრძეს
    private function length(string $password) : bool
    {
        return strlen($password) > 8;
    }

    //ამოწმებს პაროლის და განმეორებითი პაროლის დამთხვევას
    private function match(string $password, string $confirmPassword) : bool
    {
        return $password === $confirmPassword;
    }
}