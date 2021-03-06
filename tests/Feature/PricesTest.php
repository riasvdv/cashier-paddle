<?php

namespace Tests\Feature;

use Laravel\Paddle\Cashier;
use Laravel\Paddle\ProductPrice;

class PricesTest extends FeatureTestCase
{
    public function test_it_can_fetch_the_prices_of_products()
    {
        $prices = Cashier::productPrices([$_SERVER['PADDLE_TEST_SUBSCRIPTION']]);

        $this->assertContainsOnlyInstancesOf(ProductPrice::class, $prices->all());
    }
}
