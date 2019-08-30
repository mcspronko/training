<?php
/**
 * Copyright © Pronko Consulting (https://www.pronkoconsulting.com)
 * See LICENSE for the license details.
 */
declare(strict_types=1);

namespace Pronko\Training\Model;

use Pronko\Training\Api\PaymentGatewayInterface;

class PaymentRepository
{
    /**
     * @var PaymentGatewayInterface[]
     */
    private $paymentPool;

    public function __construct(array $paymentPool)
    {
        $this->paymentPool = $paymentPool;
    }

    public function get($paymentType)
    {
        if ('credit_card' === $paymentType) {
            $payment = $this->paymentPool['credit_card'];
        } else {
            $payment = $this->paymentPool['bank'];
        }
        return $payment;
    }
}
