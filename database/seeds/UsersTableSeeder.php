<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();

        $admin->name = 'Muhammad Hamdi';
        $admin->email = 'admin@blog.hamdi-dev.com';
        $admin->password = bcrypt('#muhammad#blog#123456##');
        $admin->role = User::ADMIN_USER;
        $admin->save();

        $this->command->line('New Admin has been created.');
        $this->command->line("Email: {$admin->email}");
        $this->command->line('Password: #muhammad#blog#123456##');
    }
}
