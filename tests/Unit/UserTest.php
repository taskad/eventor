<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{

    public function testRootUrl()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testLoginUrl()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function testRegistrationUrl()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }


}
