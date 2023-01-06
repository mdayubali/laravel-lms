<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Course;
use App\Models\Curriculum;
use App\Models\Lead;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = new User();
        $user->name = 'Super Admin';
        $user->email = 'super@admin.com';
        $user->password = bcrypt('password');

        $user->save();

        //roles and permission
        $role =Role::create([
            'name' => 'Super Admin',
        ]);
        $permission = Permission::create([
            'name' => 'create admin'
        ]);

        $role->givePermissionTo($permission);
        $permission->assignRole($role);

        $user->assignRole($role);

        // Lead seeder

        Lead::factory()->count(100)->create();
        // course
        $course = Course::create([
            'name' => 'Laravel',
            'description' => 'lorem Ut tempor rebum consetetur rebum diam sed sit. Justo elitr amet sea sed magna. Aliquyam consetetur sea dolor amet at.',
            'image' => 'https://api.lorem.space/image/movie?w=300&h=300&hash=qiqvhz1e',

        ]);

        Curriculum::factory()->count(100)->create();
    }

}
