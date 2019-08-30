<?php
/**
 * Copyright © Pronko Consulting (https://www.pronkoconsulting.com)
 * See LICENSE for the license details.
 */
declare(strict_types=1);

namespace Pronko\Training\Model;

/**
 * Class Order
 */
class Order
{
    private $paymentRepository;

    /**
     * Order constructor.
     * @param PaymentRepository $paymentRepository
     */
    public function __construct(PaymentRepository $paymentRepository)
    {
        $this->paymentRepository = $paymentRepository;
    }

    public function placeOrder($amount, $paymentType)
    {
        $payment = $this->paymentRepository->get($paymentType);

        //call service after successful charge
        return $payment->charge($amount);
    }
}
