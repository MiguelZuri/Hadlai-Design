<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();
        User::truncate();

        $adminRole = Role::create(['name' => 'Admin']);
        $workerRole = Role::create(['name' => 'Worker']);

        $admin = new User();
        $admin->name = 'admin';
        $admin->email = 'admin@mail.com';
        $admin->password = bcrypt('abc123');
        $admin->save();

        $admin->assignRole($adminRole);

        $worker = new User();
        $worker->name = 'worker';
        $worker->email = 'worker@mail.com';
        $worker->password = bcrypt('abc123');
        $worker->save();

        $worker->assignRole($workerRole);
    }
}
