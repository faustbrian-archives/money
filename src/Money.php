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

namespace KodeKeep\Money;

use Illuminate\Support\Traits\ForwardsCalls;
use Money\Currencies\ISOCurrencies;
use Money\Currency;
use Money\Formatter\IntlMoneyFormatter;
use Money\Money as Fowler;

class Money
{
    use ForwardsCalls;

    private Fowler $money;

    private function __construct(Fowler $money)
    {
        $this->money = $money;
    }

    public static function new(int $amount, string $currency): self
    {
        return new static(new Fowler($amount, new Currency($currency)));
    }

    public static function cents(int $amount, string $currency): self
    {
        return new static(new Fowler($amount * 100, new Currency($currency)));
    }

    public function format(string $locale = 'en-US'): string
    {
        $numberFormatter = new \NumberFormatter($locale, \NumberFormatter::CURRENCY);
        $moneyFormatter  = new IntlMoneyFormatter($numberFormatter, new ISOCurrencies());

        return $moneyFormatter->format($this->money);
    }

    public function __call($method, $parameters)
    {
        return $this->forwardCallTo($this->money, $method, $parameters);
    }
}
