<?php

namespace Tests\Feature;

use App\Http\Controllers\FormController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormControllerTest extends TestCase
{
    public function testLoginSuccess()
    {
        $response = $this->post('/form/login', [
            "username" => "admin",
            "password" => "rahasia"
        ]);
        $response->assertStatus(200);
    }
    public function testLoginFailed()
    {
        $response = $this->post('/form/login', [
            "username" => "",
            "password" => ""
        ]);
        $response->assertStatus(400);
    }
}
