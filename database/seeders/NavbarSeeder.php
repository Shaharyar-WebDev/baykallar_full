<?php

namespace Database\Seeders;

use App\Models\Navbar;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Navbar::create([
            'layout_no' => '1'
        ]);
    }
}
