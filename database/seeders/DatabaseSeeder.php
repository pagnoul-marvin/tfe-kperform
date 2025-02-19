<?php

namespace Database\Seeders;

use App\Enum\UserRoles;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $marine = User::factory()->create([
            'firstname' => 'Marine',
            'lastname' => 'Pagnoul',
            'email' => 'marine.pagnoul.kine@gmail.com',
            'password' => 'Admin1234@',
            'telephone' => '+32(0) 472 553 266',
            'job' => 'physiotherapist',
            'school_career' => 'marine_career',
            'role' => UserRoles::Admin->value,
        ]);

        $melissa = User::factory()->create([
            'firstname' => 'Mélissa',
            'lastname' => 'Hanquet',
            'email' => 'hanquetmelissa@hotmail.com',
            'password' => 'Admin1234@',
            'telephone' => '+32(0) 494 18 83 44',
            'job' => "massage_therapist",
            'school_career' => 'melissa_career',
            'role' => UserRoles::Admin->value,
        ]);
    }
}
