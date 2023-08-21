<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $this->call([
            NameSeeder::class,
        ]);
        //info seeders
        $this->call([
            BirthdaySeeder::class,
        ]);
        $this->call([
            WebsiteSeeder::class,
        ]);
        $this->call([
            CitySeeder::class,
        ]);
        $this->call([
            DegreeSeeder::class,
        ]);
        $this->call([
            EmailSeeder::class,
        ]);
        $this->call([
            FreelanceSeeder::class,
        ]);
        $this->call([
            AgeSeeder::class,
        ]);
        $this->call([
            PhoneSeeder::class,
        ]);
        //role seeder
        $this->call([
            RoleSeeder::class,
        ]);
    }
}
