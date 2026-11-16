<?php

namespace Tests\Unit;

use App\Models\Product;
use PHPUnit\Framework\TestCase;

class ProductPriceTest extends TestCase
{
    public function test_price_is_formatted_as_rupiah(): void
    {
        $product = new Product([
            'price' => 75000,
        ]);

        $this->assertSame('Rp 75.000', $product->price);
    }

    public function test_zero_price_is_formatted_as_rupiah(): void
    {
        $product = new Product([
            'price' => 0,
        ]);

        $this->assertSame('Rp 0', $product->price);
    }
}
