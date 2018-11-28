<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleDatabaseTest extends TestCase
{
    public function testDatabaseHas_users_by_email()
    {
        $this->assertDatabaseHas('users', [
            'email' => 'u1@gmail.com',
        ]);
    }

    public function testDatabaseMissing_users_by_email()
    {
        $this->assertDatabaseMissing('users', [
            'email' => 'not found',
        ]);
    }
}
