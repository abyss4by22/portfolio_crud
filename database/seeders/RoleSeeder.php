<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $values = ["Freelancer", "Designer", "Developer", "artist"];

        foreach ($values as $value) {
            DB::table('roles')->insert([
                'role' => $value,
            ]);
        }
    }
   }
