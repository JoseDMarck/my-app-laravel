<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class WelcomeUsersTest extends TestCase
{


    /** @test */
    public function it_welcome_users_with_nickname()  {
        $this->get("/saludo/Deuteros/JoseBMX")
            ->assertStatus(200) 
            ->assertSee('Bienvenido Deuteros, tu apodo es JoseBMX');
    }

    /** @test */
    public function it_welcome_users_without_nickname()  {
        $this->get("/saludo/Deuteros")
            ->assertStatus(200) 
            ->assertSee('Bienvenido Deuteros, no tienes apodo');      
    }


} //WelcomeUsersTest 
