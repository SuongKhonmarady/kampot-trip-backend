<?php

namespace Database\Seeders;

use App\Models\Schedule;
use App\Models\Location;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    public function run(): void
    {
        // Find location IDs by name
        $dongTe = Location::where('name', 'LIKE', '%Dong Te%')->first();
        $phumThmei = Location::where('name', 'LIKE', '%Phum Thmei%')->first();
        
        // Day 1 Schedule
        if ($dongTe) {
            Schedule::create([
                'day' => 1,
                'day_title' => 'Day 1 - Exploring Local Culture',
                'location_id' => $dongTe->id,
                'time' => '9:00 AM',
                'notes' => 'Morning visit to explore the local area and culture',
                'order' => 1
            ]);
        }
        
        if ($phumThmei) {
            Schedule::create([
                'day' => 1,
                'day_title' => 'Day 1 - Exploring Local Culture',
                'location_id' => $phumThmei->id,
                'time' => '2:00 PM',
                'notes' => 'Afternoon visit to the traditional village',
                'order' => 2
            ]);
        }
        
        // Day 2 and Day 3 - To Be Planned (empty for user to fill)
        // You can add more schedules here if needed
    }
}
