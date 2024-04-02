<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\JobVacancy;
use Illuminate\Http\Request;



class JobVacancyController extends Controller
{
    // Show a list of all job vacancies

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['index']]);
    }


    public function index()
    {
        $jobVacancies = JobVacancy::all();
        if ($jobVacancies->isEmpty()) {
            return response()->json([
                'status' => 'success',
                'message' => 'No job vacancies found',
                'data' => $jobVacancies
            ], 200);
        }
        return response()->json([
            'status'=> 'success',
            'data' => $jobVacancies,
            'message' => 'Job vacancies retrieved successfully'
        ]);
    }

    // Show the form for creating a new job vacancy
    public function store(Request $request)
    {
        $jobVacancy = JobVacancy::create($request->all());
        return response()->json($jobVacancy, 201);
    }

    // Display the specified job vacancy
    public function show(JobVacancy $jobVacancy)
    {
        return response()->json($jobVacancy);
    }

    // Update the specified job vacancy in the database
    public function update(Request $request, JobVacancy $jobVacancy)
    {
        $jobVacancy->update($request->all());
        return response()->json($jobVacancy, 200);
    }

    // Remove the specified job vacancy from the database
    public function destroy(JobVacancy $jobVacancy)
    {
        $jobVacancy->delete();
        return response()->json(null, 204);
    }
}
