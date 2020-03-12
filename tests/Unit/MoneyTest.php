<?php

declare(strict_types=1);

/*
 * This file is part of kodekeep/money.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\Money\Tests\Unit;

use KodeKeep\Money\Money;
use KodeKeep\Money\Tests\TestCase;

/**
 * @coversNothing
 */
class MoneyTest extends TestCase
{
    /** @test */
    public function can_format_the_amount_into_a_currency(): void
    {
        $this->assertSame('10,00 €', Money::new(1000, 'EUR')->format('de-DE'));
        $this->assertSame('10,00 €', Money::cents(10, 'EUR')->format('de-DE'));
    }
}
