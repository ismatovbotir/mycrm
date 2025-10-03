<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Company;
use App\Models\User;
use App\MOdels\Role;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $company=Company::create([
            'name'=>'RSG',
            'type'=>1
        ]);

        $roles = ['Admin', 'Manager','Operator','Finance','Collector','Service','Owner','User'];

        foreach ($roles as $role) {
            Role::create(['uz' => $role,'ru'=>$role,'en'=>$role]);
        };




        $company->users()->updateOrCreate(
            ['email'=>'info@rsg.uz'],
            [
               'role_id'=>1,
                'name'=>'Admin',
                'mob'=>"998901754001",
                'lang'=>'uz',
                'email'=>'info@rsg.uz',
                'password'=>Hash::make('123456789')
            ]

        );


    }
}
