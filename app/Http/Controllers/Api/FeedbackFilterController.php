<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackFilterController extends Controller
{
    public function getRead() {
        $feedback = Feedback::select('*')
            ->where('feedback.read', '=', '1')
            ->get();

            return response()->json($feedback);
    }

    public function getNotRead() {
        $feedback = Feedback::select('*')
            ->where('feedback.read', '=', '0')
            ->get();

            return response()->json($feedback);
    }
}
