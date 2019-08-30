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
    /**
     * @var Config
     */
    private $config;

    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    public function charge($amount)
    {
        return [
            'order_id' => rand(0, 100000),
            'bank_instructions' => 'Please send the money to our bank.',
            'amount' => $amount,
            'currency' => $this->config->getCurrency()
        ];
    }
}
