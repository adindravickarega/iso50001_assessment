<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question; // Add this line to import the Question model
use App\Models\Assessment; // Add this line to import the Assessment model
use Auth;

class AssessmentController extends Controller {
    public function start() {
        $questions = Question::all();
        return view('assessment.start', compact('questions'));
    }

    public function store(Request $request) {
        $score = 0;
        foreach ($request->answers as $answer) {
            $score += $answer;
        }

        $readiness_level = $score >= (count($request->answers) * 3) ? 'Advanced' : 'Basic';

        $assessment = Assessment::create([
            'user_id' => Auth::id(),
            'total_score' => $score,
            'readiness_level' => $readiness_level,
        ]);

        return redirect()->route('assessment.result', $assessment);
    }

    public function result(Assessment $assessment) {
        return view('assessment.result', compact('assessment'));
    }

    public function start2() {
        $questions = Question::all();
        return view('assessment.start2', compact('questions'));
    }
}
