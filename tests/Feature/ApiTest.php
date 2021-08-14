<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_order()
    {
        $this->seed();

        $formData = [
            "payment_method_id" => 1,
            "date" => now(),
            "products" => [1,5]
        ];

        //$this->withoutExceptionHandling();

        $this->post(route('orders.store'),$formData)
             ->assertStatus(201)
             //->assertJson($formData)
             ;
    }

    public function test_can_list_orders()
    {
        $this->get(route('orders.index'))
            ->assertStatus(200);
    }


}
