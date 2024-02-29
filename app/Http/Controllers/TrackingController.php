<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tracking; // Assuming your model name is Tracking and it's in the appropriate namespace

class TrackingController extends Controller
{
    public function track(Request $request)
    {
        $trackingId = $request->input('tracking_id');

        // Search for tracking details in the database based on a pattern
        $trackingDetails = Tracking::where('product_number', 'like', "%$trackingId%")->first();

        // Pass the tracking details to the view
        return view('tracking.details', ['trackingDetails' => $trackingDetails]);
    }
}
