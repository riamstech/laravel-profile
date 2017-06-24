<?php
namespace  Berkayoztunc\LaravelProfile\Test\Unit;

use Berkayoztunc\LaravelProfile\Test\TestCase;

class ApiTest extends TestCase {
    public function test_get_user()
    {
        $user = $this->createTestUser();
        $response = $this->actingAs($user)->json(
          'GET','api/profile'
        );
        $response->assertJsonStructure($user);
    }
}