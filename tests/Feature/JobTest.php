<?php

namespace Tests\Feature;

use OpenSpaceLife\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class JobTest extends TestCase {
	/** @test */
	public function a_user_can_create_a_new_job()
	{
	    $user = factory(User::class)->create();

	    $params= [
	    	'name' => 'Wash Sink',
			'description' => 'Wash sink every days',
			'team_id' => 3,
		];

	    $this->post('jobs', $params);

	    $this->assertDatabaseHas('jobs',['name' => 'Wash Sink']);
	}
}
