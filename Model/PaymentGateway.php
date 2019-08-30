<?php
/**
 * Copyright © Pronko Consulting (https://www.pronkoconsulting.com)
 * See LICENSE for the license details.
 */
declare(strict_types=1);

namespace Pronko\Training\Model;


use Pronko\Training\Api\PaymentGatewayInterface;

class PaymentGateway implements PaymentGatewayInterface
{
    private $currency;

    public function __construct($currency)
    {
        $this->currency = $currency;
    }


    public function charge($amount)
    {
        // connect to gateway and charge an amount

        return [
            'amount' => $amount,
            'currency' => $this->currency,
            'transaction_id' => rand(0, 10000000),
            'type' => 'credit_card'
        ];
    }
}
