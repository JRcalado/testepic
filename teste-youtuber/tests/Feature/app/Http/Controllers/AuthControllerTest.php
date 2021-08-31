<?php

namespace Feature\app\Http\Controllers;

use Laravel\Lumen\Testing\TestCase as TestingTestCase;

class AuthControllerTest extends TestingTestCase
{

    public function createApplication()
    {
        return require './bootstrap/app.php';
    }


    public function testUserShouldNotAuthenticateWithWrongProvider()
    {
        $request = $this->post(
                                route(
                                    'authenticate', ['provider' => 'deixa eu entrar']
                                )
                            );

        $request->assertResponseStatus(status: 422);
        $request->seeJson(['errors' => ['main' => 'Wrong provider provided']]);

    }

    public  function testUserExistsInBothProviders()
    {
        
    }


}