<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Location;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LocationController extends Controller
{
    public function index()
    {
        $locations = Location::orderBy('is_pinned', 'desc')
            ->orderBy('order')
            ->orderBy('id')
            ->get();

        return response()->json($locations);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'name_khmer' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'google_map_link' => 'required|url',
            'icon' => 'nullable|string|max:10',
            'distance_from_homestay' => 'nullable|numeric|min:0',
            'is_pinned' => 'nullable|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $location = Location::create($request->all());

        return response()->json($location, 201);
    }

    public function show($id)
    {
        $location = Location::with('schedules')->findOrFail($id);
        return response()->json($location);
    }

    public function update(Request $request, $id)
    {
        $location = Location::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'sometimes|required|string|max:255',
            'name_khmer' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'google_map_link' => 'sometimes|required|url',
            'icon' => 'nullable|string|max:10',
            'distance_from_homestay' => 'nullable|numeric|min:0',
            'is_pinned' => 'nullable|boolean',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $location->update($request->all());

        return response()->json($location);
    }

    public function destroy($id)
    {
        $location = Location::findOrFail($id);
        $location->delete();

        return response()->json(['message' => 'Location deleted successfully']);
    }

    public function togglePin($id)
    {
        $location = Location::findOrFail($id);
        $location->is_pinned = !$location->is_pinned;
        $location->save();

        return response()->json($location);
    }
}
