<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexSubmissions;
use App\Submission;
use App\Transformers\SubmissionTransformer;
use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;

class SubmissionController extends Controller
{
    use Helpers;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(IndexSubmissions $request)
    {
        $submissions = Submission::filter($request->validated())
            ->orderBy('created_at', 'desc')
            ->paginate(ENV('PAGINATION'));

        return $this->response->paginator($submissions, new SubmissionTransformer);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function show(Submission $submission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Submission $submission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Submission $submission)
    {
        //
    }
}
