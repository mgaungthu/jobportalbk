<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Mail\ApplyVacantMail;
use Illuminate\Http\Request;
use App\Models\Applicant;
use App\Models\Application;
use Illuminate\Support\Facades\Mail;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        // $applicant = new Applicant();
        // $applicant->salutation = 'Mr.';
        // $applicant->git_url = 'https://github.com/example';
        // $applicant->authorization = true;
        // $applicant->sponsorship = false;
        // $applicant->first_name = 'John';
        // $applicant->last_name = 'Doe';
        // $applicant->email = 'hellos@example.com';
        // $applicant->phone = '1234567890';
        // $applicant->country = 'USA';
        // $applicant->former_employee = false;
        // $applicant->confirm_policy = 'Yes';
        // $applicant->save();

        // $application = new Application();
        // $application->job_id = 1; // Assuming job_id exists in job_vacancies table
        // $application->applicant_id = $applicant->id; // Use the ID of the newly inserted applicant
        // $application->status = 'pending';
        // $application->notes = 'This is a note for the application.';
        // $application->save();

        Mail::to('mr.mgaungthu@gmail.com')->send(new ApplyVacantMail('dwadwad'));

        return response()->json([
            'status' => 'ok'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
