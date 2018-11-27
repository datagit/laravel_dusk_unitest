<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleDatabaseTest extends TestCase
{
    public function testDatabase()
    {
        // Make call to application...
        $this->assertDatabaseHas('users', [
            'email' => 'u1@gmail.com',
        ]);

        $this->assertDatabaseMissing('users', [
            'email' => 'notfound',
        ]);
    }
}
