<?php

namespace OpenSpaceLife\Http\Controllers;

use Illuminate\Http\Request;
use OpenSpaceLife\Job;

class JobController extends Controller
{
    public function store(Request $request){
		Job::create($request->all());

		return redirect()->back();
	}
}
