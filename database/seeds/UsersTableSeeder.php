<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @throws \Spatie\MediaLibrary\Exceptions\FileCannotBeAdded
     * @return void
     */
    public function run()
    {
        $admin = new User();

        $admin->name = 'Muhammad Hamdi';
        $admin->email = 'admin@blog.hamdi-dev.com';
        $admin->password = bcrypt('#muhammad#blog#123456##');
        $admin->role = User::ADMIN_USER;
        $admin->title = 'Admin';
        $admin->save();

        $admin->addMediaFromUrl('http://placehold.it/300x300')->toMediaCollection();

        $this->command->line('New Admin has been created.');
        $this->command->line("Email: {$admin->email}");
        $this->command->line('Password: #muhammad#blog#123456##');
    }
}
