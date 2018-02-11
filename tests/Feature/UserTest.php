<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
	use RefreshDatabase;

   /** @test */
   public function a_user_can_register()
   {
	   $response = $this->post('/register', ['name' => 'Anna', 'email' => 'anna@lapetie.fr', 'password' => 'password', 'password_confirmation' => 'password']);

	   $response->assertRedirect('/home');
	   $this->assertDatabaseHas('users', ['email' => 'anna@lapetie.fr']);
   }
}
