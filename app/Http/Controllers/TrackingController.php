<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tracking; // Assuming your model name is Tracking and it's in the appropriate namespace

class TrackingController extends Controller
{
    public function track(Request $request)
    {
        $trackingId = $request->input('tracking_id');

        // Break down the tracking ID into individual digits
        $digits = str_split($trackingId);

        // Start a new query
        $query = Tracking::query();

        // Add a 'where' clause for each digit
        foreach ($digits as $digit) {
            $query->orWhere('product_number', 'like', "%$digit%");
        }

        // Execute the query and get the first result
        $trackingDetails = $query->first();

        // Pass the tracking details to the view
        return view('tracking.details', ['trackingDetails' => $trackingDetails]);
    }

}
