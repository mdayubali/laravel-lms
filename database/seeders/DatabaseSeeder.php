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
        $defaultPermissions = [
            'lead-management',
            'create-admin',
            'user-management'
        ];
        foreach($defaultPermissions as $permission){
            Permission::create([
                'name' => $permission,
            ]);

        }
        $this->create_user_with_role('Super Admin', 'Super Admin', 'superadmin@lms.test');
        $this->create_user_with_role('Communication', 'Comminication Team', 'communication@lms.test');
        $teacher =$this->create_user_with_role('Teacher', 'Teacher', 'teacher@lms.test');
        $this->create_user_with_role('Leads', 'Leads', 'leads@lms.test');

        // Lead seeder
        Lead::factory()->count(100)->create();
        // course
        $course = Course::create([
            'name' => 'Laravel',
            'slug' => 'laravel',
            'description' => 'lorem Ut tempor rebum consetetur rebum diam sed sit. Justo elitr amet sea sed magna. Aliquyam consetetur sea dolor amet at.',
            'image' => 'https://api.lorem.space/image/movie?w=300&h=300&hash=qiqvhz1e',
            'user_id' => $teacher->id,
            'price'     => 500,

        ]);

        Curriculum::factory()->count(100)->create();
    }

    private function create_user_with_role($type,$name,$email){

        $role = Role::create([
            'name' => $type,
        ]);

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt('password'),
        ]);

        if($type=='Super Admin'){
           $role->givePermissionTo(Permission::all());
        }elseif($type=='Leads'){
            $role->givePermissionTo('lead-management');
        }
        $user->assignRole($role);
        return $user;
    }

}
