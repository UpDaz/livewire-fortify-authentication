<?php

namespace Tests\Feature\Livewire;

use App\Http\Livewire\Authentication;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    /** @test */
    public function shoudlRenderView()
    {
        $component = Livewire::test(Authentication::class);

        $component->assertStatus(200);
    }
}
