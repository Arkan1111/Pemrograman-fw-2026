<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProductAccessTest extends TestCase
{
    public function test_guest_cannot_open_product_creation_page(): void
    {
        $response = $this->get('/products/create');
        $response->assertRedirect('/login');
    }
}
