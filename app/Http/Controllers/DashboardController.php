<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $project = $user->projects()->first();
        
        $data = [
            'project' => $project,
            'deadlines' => $project ? $project->deadlines()->orderBy('due_date')->get() : collect(),
            'feedbacks' => $project ? $project->feedbacks()->latest()->take(3)->get() : collect(),
        ];

        return view('dashboard', $data);
    }
}