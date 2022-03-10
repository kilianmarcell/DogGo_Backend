<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackCountController extends Controller
{

    public function getReadFeedbackCount() {
        $feedbackCount = Feedback::where('feedback.read', '=', '1')->count();
             return response()->json($feedbackCount);
    }

    public function getNewFeedbackCount() {
        $feedbackCount = Feedback::where('feedback.read', '=', '0')->count();
             return response()->json($feedbackCount);
    }
}