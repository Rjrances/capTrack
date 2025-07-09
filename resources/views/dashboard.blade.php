@extends('layouts.app')

@section('content')
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Student Dashboard</h1>
    
    @if($project)
    <div class="bg-white rounded-lg shadow-md p-6 mb-6">
        <h2 class="text-xl font-semibold mb-4">Project Overview</h2>
        
        <h3 class="text-lg font-medium">{{ $project->title }}</h3>
        <p class="text-gray-600 mb-2">Team: {{ $project->team_members }}</p>
        
        <a href="{{ route('projects.show', $project) }}" 
           class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            View Project
        </a>
    </div>
    @endif

    <div class="grid md:grid-cols-2 gap-6">
        <!-- Upcoming Deadlines -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4">Upcoming Deadlines</h2>
            
            @forelse($deadlines as $deadline)
            <div class="mb-4 flex items-start">
                <input type="checkbox" 
                       {{ $deadline->completed ? 'checked' : '' }}
                       class="mt-1 mr-2">
                <div>
                    <p class="font-medium">{{ $deadline->title }}</p>
                    <p class="text-gray-600">Due: {{ $deadline->due_date->format('F j, Y') }}</p>
                </div>
            </div>
            @empty
            <p class="text-gray-500">No upcoming deadlines</p>
            @endforelse
        </div>

        <!-- Recent Feedback -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4">Recent Feedback</h2>
            
            @forelse($feedbacks as $feedback)
            <div class="mb-4">
                <h3 class="font-medium">{{ $feedback->reviewer_name }}</h3>
                <p class="text-gray-500 text-sm mb-1">{{ $feedback->created_at->diffForHumans() }}</p>
                <p class="text-gray-700">{{ $feedback->comments }}</p>
            </div>
            @empty
            <p class="text-gray-500">No feedback yet</p>
            @endforelse
        </div>
    </div>

    @if($project)
    <div class="grid md:grid-cols-2 gap-6 mt-6">
        <!-- Milestone Progress -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4">Milestone Progress</h2>
            <p class="mb-2">Overall Project Completion</p>
            <div class="w-full bg-gray-200 rounded-full h-4">
                <div class="bg-blue-500 h-4 rounded-full" 
                     style="width: {{ $project->completion }}%"></div>
            </div>
            <p class="text-right mt-1">{{ $project->completion }}%</p>
        </div>

        <!-- Quick Access -->
        <div class="bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold mb-4">Quick Access</h2>
            <div class="space-y-3">
                <div class="flex items-center">
                    <input type="checkbox" class="mr-2">
                    <span>Project Documents</span>
                </div>
                <div class="flex items-center">
                    <input type="checkbox" class="mr-2">
                    <span>Team Communication</span>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
@endsection