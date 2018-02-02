<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class userModuleTest extends TestCase {

     
    /** @test */
    function it_shows_the_users_lists() {

        $this->get("/usuarios")
            ->assertStatus(200) 
            ->assertSee('Titulo Dinamico')
            ->assertSee('Jose')
            ->assertSee('Andrea');
        

    }

     /** @test */
     function it_shows_the_users_lists_has_empty() {
        
                $this->get("/usuarios?empty")
                    ->assertStatus(200) 
                    ->assertSee('No hay usuarios registrados.');
        
    }

    /** @test */
    function it_loads_the_users_details_page() {
        
        $this->get("/usuarios/5")
                ->assertStatus(200) 
                ->assertSee('Detalles del usuario: 5');   
    }


    /** @test */
    function it_loads_the_new_user_page() {
        $this->get("/usuarios/nuevo/")
                ->assertStatus(200) 
                ->assertSee('Crear usuario Nuevo');   
    }

    /** @test */
    function it_loads_the_users_lists_page() {
        
                $this->get("/usuarios")
                    ->assertStatus(200) 
                    ->assertSee('Titulo Dinamico');
        
    }



} //userModuleTest
