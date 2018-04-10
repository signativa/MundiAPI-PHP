<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 *Payment data
 */
class CreatePaymentRequest implements JsonSerializable
{
    /**
     * Payment method
     * @required
     * @maps payment_method
     * @var string $paymentMethod public property
     */
    public $paymentMethod;

    /**
     * Settings for credit card payment
     * @required
     * @maps credit_card
     * @var \MundiAPILib\Models\CreateCreditCardPaymentRequest $creditCard public property
     */
    public $creditCard;

    /**
     * Settings for boleto payment
     * @required
     * @var \MundiAPILib\Models\CreateBoletoPaymentRequest $boleto public property
     */
    public $boleto;

    /**
     * Currency. Must be informed using 3 characters
     * @required
     * @var string $currency public property
     */
    public $currency;

    /**
     * Settings for voucher payment
     * @required
     * @var \MundiAPILib\Models\CreateVoucherPaymentRequest $voucher public property
     */
    public $voucher;

    /**
     * Metadata
     * @required
     * @var array $metadata public property
     */
    public $metadata;

    /**
     * Splits
     * @required
     * @var \MundiAPILib\Models\CreateSplitRequest[] $split public property
     */
    public $split;

    /**
     * Customer Id
     * @required
     * @maps customer_id
     * @var string $customerId public property
     */
    public $customerId;

    /**
     * Customer
     * @required
     * @var \MundiAPILib\Models\CreateCustomerRequest $customer public property
     */
    public $customer;

    /**
     * Settings for bank transfer payment
     * @maps bank_transfer
     * @var \MundiAPILib\Models\CreateBankTransferPaymentRequest|null $bankTransfer public property
     */
    public $bankTransfer;

    /**
     * Gateway affiliation code
     * @maps gateway_affiliation_id
     * @var string|null $gatewayAffiliationId public property
     */
    public $gatewayAffiliationId;

    /**
     * The amount of the payment, in cents
     * @var integer|null $amount public property
     */
    public $amount;

    /**
     * Settings for checkout payment
     * @var \MundiAPILib\Models\CreateCheckoutPaymentRequest|null $checkout public property
     */
    public $checkout;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                           $paymentMethod        Initialization value for $this->paymentMethod
     * @param CreateCreditCardPaymentRequest   $creditCard           Initialization value for $this->creditCard
     * @param CreateBoletoPaymentRequest       $boleto               Initialization value for $this->boleto
     * @param string                           $currency             Initialization value for $this->currency
     * @param CreateVoucherPaymentRequest      $voucher              Initialization value for $this->voucher
     * @param array                            $metadata             Initialization value for $this->metadata
     * @param array                            $split                Initialization value for $this->split
     * @param string                           $customerId           Initialization value for $this->customerId
     * @param CreateCustomerRequest            $customer             Initialization value for $this->customer
     * @param CreateBankTransferPaymentRequest $bankTransfer         Initialization value for $this->bankTransfer
     * @param string                           $gatewayAffiliationId Initialization value for $this-
     *                                                                 >gatewayAffiliationId
     * @param integer                          $amount               Initialization value for $this->amount
     * @param CreateCheckoutPaymentRequest     $checkout             Initialization value for $this->checkout
     */
    public function __construct()
    {
        if (13 == func_num_args()) {
            $this->paymentMethod        = func_get_arg(0);
            $this->creditCard           = func_get_arg(1);
            $this->boleto               = func_get_arg(2);
            $this->currency             = func_get_arg(3);
            $this->voucher              = func_get_arg(4);
            $this->metadata             = func_get_arg(5);
            $this->split                = func_get_arg(6);
            $this->customerId           = func_get_arg(7);
            $this->customer             = func_get_arg(8);
            $this->bankTransfer         = func_get_arg(9);
            $this->gatewayAffiliationId = func_get_arg(10);
            $this->amount               = func_get_arg(11);
            $this->checkout             = func_get_arg(12);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['payment_method']         = $this->paymentMethod;
        $json['credit_card']            = $this->creditCard;
        $json['boleto']                 = $this->boleto;
        $json['currency']               = $this->currency;
        $json['voucher']                = $this->voucher;
        $json['metadata']               = $this->metadata;
        $json['split']                  = $this->split;
        $json['customer_id']            = $this->customerId;
        $json['customer']               = $this->customer;
        $json['bank_transfer']          = $this->bankTransfer;
        $json['gateway_affiliation_id'] = $this->gatewayAffiliationId;
        $json['amount']                 = $this->amount;
        $json['checkout']               = $this->checkout;

        return $json;
    }
}
