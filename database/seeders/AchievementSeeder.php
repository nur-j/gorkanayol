<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Achievement;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = new Achievement;
        $a->clients = 0;
        $a->km = 0;
        $a->shipped = 0;
        $a->staff = 0;
        $a->save();
    }
}
