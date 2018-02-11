<?php

namespace OpenSpaceLife\Http\Controllers;

use OpenSpaceLife\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function store(Request $request)
    {
        Job::create($request->all());

        return redirect()->back();
    }
}
