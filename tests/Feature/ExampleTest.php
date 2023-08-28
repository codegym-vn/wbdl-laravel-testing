<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testHomePage(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testAboutPage()
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
        $response->assertSeeText('About Page');
    }

    public function testContactPage()
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
        $response->assertSeeText('Contact Page');
    }

    public function testRouteReturns404NotFound()
    {
        $response = $this->get('/shop');
        $response->assertStatus(404);
    }
}
