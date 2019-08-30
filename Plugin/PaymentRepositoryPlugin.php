<?php
/**
 * Copyright © Pronko Consulting (https://www.pronkoconsulting.com)
 * See LICENSE for the license details.
 */
declare(strict_types=1);

namespace Pronko\Training\Plugin;

use Pronko\Training\Api\PaymentGatewayInterface;
use Pronko\Training\Model\BankPaymentGateway;
use Pronko\Training\Model\BankPaymentGatewayFactory;
use Pronko\Training\Model\PaymentRepository;

/**
 * Class PaymentRepositoryPlugin
 */
class PaymentRepositoryPlugin
{
    /**
     * @var BankPaymentGatewayFactory
     */
    private $paymentFactory;

    public function __construct(BankPaymentGatewayFactory $paymentFactory)
    {
        $this->paymentFactory = $paymentFactory;
    }


    public function beforeGet(
        PaymentRepository $paymentRepository,
        $paymentType
    ) {
        if ('bank' === $paymentType) {
            $paymentType = 'credit_card';
        }

        return [$paymentType];
    }

    /**
     * @param PaymentRepository $paymentRepository
     * @param PaymentGatewayInterface $return
     */
    public function afterGet(
        PaymentRepository $paymentRepository,
        $return
    ) {
        var_dump($return);
    }
}
