<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ParimparTest extends TestCase
{
    public function test_par_impar(): void
    {
        $this->post('/', ['numeru' => 2])
        ->assertSeeText('Numeru Par');
    }
}
