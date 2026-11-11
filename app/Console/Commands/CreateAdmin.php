<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CreateAdmin extends Command
{
    protected $signature = 'admin:create';

    protected $description = 'Create an administrator account';

    public function handle(): int
    {
        $name = $this->ask('Admin name');
        $email = Str::lower((string) $this->ask('Admin email'));
        $password = $this->secret('Password (minimum 12 characters)');

        if (blank($name) || ! filter_var($email, FILTER_VALIDATE_EMAIL) || strlen((string) $password) < 12) {
            $this->error('Enter a name, a valid email, and a password with at least 12 characters.');

            return self::FAILURE;
        }

        $user = User::query()->firstOrNew(['email' => $email]);
        $user->name = $name;
        $user->password = Hash::make((string) $password);
        $user->role = 'Administrator';
        $user->save();

        $this->info("Administrator account ready for {$email}.");

        return self::SUCCESS;
    }
}
