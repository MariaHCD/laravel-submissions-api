<?php

namespace App\Http\Controllers;

use App\Http\Requests\IndexSubmissions;
use App\Http\Requests\StoreSubmission;
use App\Http\Requests\UpdateSubmission;
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
     * @param App\Http\Requests\IndexSubmissions $request
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
     * @param  App\Http\Requests\StoreSubmission  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubmission $request)
    {
        $submission = Submission::create($request->validated());

        return $this->response->item($submission, new SubmissionTransformer)->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function show(Submission $submission)
    {
        return $this->response->item($submission, new SubmissionTransformer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\UpdateSubmission  $request
     * @param  \App\Submission  $submission
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubmission $request, Submission $submission)
    {
        $submission->update($request->validated());

        return $this->response->item($submission, new SubmissionTransformer);
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
