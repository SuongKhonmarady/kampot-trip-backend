<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::with('location')
            ->orderBy('day')
            ->orderBy('order')
            ->get()
            ->groupBy('day');

        return response()->json($schedules);
    }

    public function getByDay($day)
    {
        $schedules = Schedule::with('location')
            ->where('day', $day)
            ->orderBy('order')
            ->get();

        return response()->json($schedules);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'day' => 'required|integer|min:1|max:3',
            'day_title' => 'nullable|string|max:255',
            'location_id' => 'required|exists:locations,id',
            'time' => 'nullable|string|max:50',
            'notes' => 'nullable|string',
            'order' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $schedule = Schedule::create($request->all());
        $schedule->load('location');

        return response()->json($schedule, 201);
    }

    public function update(Request $request, $id)
    {
        $schedule = Schedule::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'day' => 'sometimes|required|integer|min:1|max:3',
            'day_title' => 'nullable|string|max:255',
            'location_id' => 'sometimes|required|exists:locations,id',
            'time' => 'nullable|string|max:50',
            'notes' => 'nullable|string',
            'order' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $schedule->update($request->all());
        $schedule->load('location');

        return response()->json($schedule);
    }

    public function destroy($id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();

        return response()->json(['message' => 'Schedule deleted successfully']);
    }

    public function updateDayTitle(Request $request, $day)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        Schedule::where('day', $day)->update(['day_title' => $request->title]);

        return response()->json(['message' => 'Day title updated successfully']);
    }
}
