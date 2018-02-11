<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use OpenSpaceLife\User;
use Tests\TestCase;

class UserTest extends TestCase {

	use RefreshDatabase;

	/** @test */
	public function a_user_can_register()
	{
		$response = $this->post('/register', ['name' => 'Anna', 'email' => 'anna@lapetie.fr', 'password' => 'password', 'password_confirmation' => 'password']);

		$response->assertRedirect('/home');
		$this->assertDatabaseHas('users', ['email' => 'anna@lapetie.fr']);
	}

	/** @test */
	public function a_user_can_login()
	{
		$user = factory(User::class)->raw();
		$response = $this->post('/login', ['email' => $user['email'], 'password' => $user['password']]);

		$response->assertRedirect('/');
   }

   /** @test */
   public function a_user_can_logout()
   {
	   $user = factory(User::class)->create();

	   $response = $this->actingAs($user)->post('/logout');

	   $response->assertRedirect('/');
   }
}
