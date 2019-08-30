<?php
/**
 * Copyright © Pronko Consulting (https://www.pronkoconsulting.com)
 * See LICENSE for the license details.
 */
declare(strict_types=1);

namespace Pronko\Training\Model;


use Pronko\Training\Api\PaymentGatewayInterface;

class BankPaymentGateway implements PaymentGatewayInterface
{
    private $currency;

    public function __construct($currency)
    {
        $this->currency = $currency;
    }

    public function charge($amount)
    {
        return [
            'order_id' => rand(0, 100000),
            'bank_instructions' => 'Please send the money to our bank.',
            'amount' => $amount,
            'currency' => $this->currency
        ];
    }
}
