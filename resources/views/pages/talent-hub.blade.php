@extends('layouts.app')

@section('content')
<section class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4 text-center">
        <h1 class="text-4xl font-bold mb-8 text-blue-600">Talent Hub</h1>

        <!-- Employers Section -->
        <h2 class="text-2xl font-semibold mb-6 text-blue-500">Employers</h2>
        <div class="grid md:grid-cols-3 gap-8 mb-12">
            @foreach($employers as $employer)
                <div class="bg-white shadow-lg rounded-2xl p-6 flex flex-col">
                    <h3 class="text-xl font-semibold mb-2">{{ $employer['type'] }}</h3>
                    <p class="text-gray-700 mb-4">{{ $employer['description'] }}</p>
                    <p class="text-gray-800 font-bold mb-4">€{{ $employer['price'] }}</p>
                    <a href="#employer-form" class="mt-auto px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Apply Now</a>
                </div>
            @endforeach
        </div>

        <!-- Job Seekers Section -->
        <h2 class="text-2xl font-semibold mb-6 text-blue-500">Job Seekers</h2>
        <div class="grid md:grid-cols-2 gap-8 mb-12">
            @foreach($jobSeekers as $job)
                <div class="bg-white shadow-lg rounded-2xl p-6 flex flex-col">
                    <h3 class="text-xl font-semibold mb-2">{{ $job['type'] }}</h3>
                    <p class="text-gray-700 mb-4">{{ $job['description'] }}</p>
                    <p class="text-gray-800 font-bold mb-4">{{ $job['price'] }}</p>
                    <a href="#jobseeker-form" class="mt-auto px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Join Talent Pool</a>
                </div>
            @endforeach
        </div>

        <!-- Employer Form -->
        <div id="employer-form" class="max-w-xl mx-auto bg-white shadow-lg rounded-2xl p-6 mb-12">
            <h2 class="text-2xl font-bold mb-4 text-blue-600">Employer Application</h2>

            @if(session('employer_success'))
                <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
                    {{ session('employer_success') }}
                </div>
            @endif

            <form action="{{ route('employer.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block font-medium mb-1">Company</label>
                    <input type="text" name="company" class="w-full border p-2 rounded" required>
                </div>
                <div>
                    <label class="block font-medium mb-1">Contact Person</label>
                    <input type="text" name="contact" class="w-full border p-2 rounded" required>
                </div>
                <div>
                    <label class="block font-medium mb-1">Email</label>
                    <input type="email" name="email" class="w-full border p-2 rounded" required>
                </div>
                <div>
                    <label class="block font-medium mb-1">Select Option</label>
                    <select name="option" class="w-full border p-2 rounded" required>
                        <option value="">-- Select Option --</option>
                        @foreach($employers as $employer)
                            <option value="{{ $employer['type'] }}">{{ $employer['type'] }} (€{{ $employer['price'] }})</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Submit</button>
            </form>
        </div>

        <!-- Job Seeker Form -->
        <div id="jobseeker-form" class="max-w-xl mx-auto bg-white shadow-lg rounded-2xl p-6">
            <h2 class="text-2xl font-bold mb-4 text-blue-600">Join Talent Pool</h2>

            @if(session('job_success'))
                <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
                    {{ session('job_success') }}
                </div>
            @endif

            <form action="{{ route('jobseeker.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div>
                    <label class="block font-medium mb-1">Name</label>
                    <input type="text" name="name" class="w-full border p-2 rounded" required>
                </div>
                <div>
                    <label class="block font-medium mb-1">Email</label>
                    <input type="email" name="email" class="w-full border p-2 rounded" required>
                </div>
                <div>
                    <label class="block font-medium mb-1">Desired Role</label>
                    <input type="text" name="role" class="w-full border p-2 rounded" required>
                </div>
                <div>
                    <label class="block font-medium mb-1">Upload CV</label>
                    <input type="file" name="cv" accept=".pdf,.doc,.docx" class="w-full border p-2 rounded">
                </div>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Join</button>
            </form>
        </div>
    </div>
</section>
@endsection
