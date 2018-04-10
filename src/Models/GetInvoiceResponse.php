<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;
use MundiAPILib\Utils\DateTimeHelper;

/**
 *Response object for getting an invoice
 */
class GetInvoiceResponse implements JsonSerializable
{
    /**
     * @todo Write general description for this property
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $code public property
     */
    public $code;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $url public property
     */
    public $url;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $amount public property
     */
    public $amount;

    /**
     * @todo Write general description for this property
     * @required
     * @var string $status public property
     */
    public $status;

    /**
     * @todo Write general description for this property
     * @required
     * @maps payment_method
     * @var string $paymentMethod public property
     */
    public $paymentMethod;

    /**
     * @todo Write general description for this property
     * @required
     * @maps created_at
     * @factory \MundiAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime $createdAt public property
     */
    public $createdAt;

    /**
     * @todo Write general description for this property
     * @required
     * @var \MundiAPILib\Models\GetInvoiceItemResponse[] $items public property
     */
    public $items;

    /**
     * @todo Write general description for this property
     * @required
     * @var \MundiAPILib\Models\GetCustomerResponse $customer public property
     */
    public $customer;

    /**
     * @todo Write general description for this property
     * @required
     * @var \MundiAPILib\Models\GetChargeResponse $charge public property
     */
    public $charge;

    /**
     * @todo Write general description for this property
     * @required
     * @var integer $installments public property
     */
    public $installments;

    /**
     * @todo Write general description for this property
     * @required
     * @maps billing_address
     * @var \MundiAPILib\Models\GetBillingAddressResponse $billingAddress public property
     */
    public $billingAddress;

    /**
     * @todo Write general description for this property
     * @required
     * @var \MundiAPILib\Models\GetSubscriptionResponse $subscription public property
     */
    public $subscription;

    /**
     * @todo Write general description for this property
     * @required
     * @var \MundiAPILib\Models\GetPeriodResponse $cycle public property
     */
    public $cycle;

    /**
     * @todo Write general description for this property
     * @required
     * @var \MundiAPILib\Models\GetShippingResponse $shipping public property
     */
    public $shipping;

    /**
     * @todo Write general description for this property
     * @required
     * @var array $metadata public property
     */
    public $metadata;

    /**
     * @todo Write general description for this property
     * @maps due_at
     * @factory \MundiAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $dueAt public property
     */
    public $dueAt;

    /**
     * @todo Write general description for this property
     * @maps canceled_at
     * @factory \MundiAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $canceledAt public property
     */
    public $canceledAt;

    /**
     * @todo Write general description for this property
     * @maps billing_at
     * @factory \MundiAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $billingAt public property
     */
    public $billingAt;

    /**
     * @todo Write general description for this property
     * @maps seen_at
     * @factory \MundiAPILib\Utils\DateTimeHelper::fromRfc3339DateTime
     * @var \DateTime|null $seenAt public property
     */
    public $seenAt;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                     $id             Initialization value for $this->id
     * @param string                     $code           Initialization value for $this->code
     * @param string                     $url            Initialization value for $this->url
     * @param integer                    $amount         Initialization value for $this->amount
     * @param string                     $status         Initialization value for $this->status
     * @param string                     $paymentMethod  Initialization value for $this->paymentMethod
     * @param \DateTime                  $createdAt      Initialization value for $this->createdAt
     * @param array                      $items          Initialization value for $this->items
     * @param GetCustomerResponse        $customer       Initialization value for $this->customer
     * @param GetChargeResponse          $charge         Initialization value for $this->charge
     * @param integer                    $installments   Initialization value for $this->installments
     * @param GetBillingAddressResponse  $billingAddress Initialization value for $this->billingAddress
     * @param GetSubscriptionResponse    $subscription   Initialization value for $this->subscription
     * @param GetPeriodResponse          $cycle          Initialization value for $this->cycle
     * @param GetShippingResponse        $shipping       Initialization value for $this->shipping
     * @param array                      $metadata       Initialization value for $this->metadata
     * @param \DateTime                  $dueAt          Initialization value for $this->dueAt
     * @param \DateTime                  $canceledAt     Initialization value for $this->canceledAt
     * @param \DateTime                  $billingAt      Initialization value for $this->billingAt
     * @param \DateTime                  $seenAt         Initialization value for $this->seenAt
     */
    public function __construct()
    {
        if (20 == func_num_args()) {
            $this->id             = func_get_arg(0);
            $this->code           = func_get_arg(1);
            $this->url            = func_get_arg(2);
            $this->amount         = func_get_arg(3);
            $this->status         = func_get_arg(4);
            $this->paymentMethod  = func_get_arg(5);
            $this->createdAt      = func_get_arg(6);
            $this->items          = func_get_arg(7);
            $this->customer       = func_get_arg(8);
            $this->charge         = func_get_arg(9);
            $this->installments   = func_get_arg(10);
            $this->billingAddress = func_get_arg(11);
            $this->subscription   = func_get_arg(12);
            $this->cycle          = func_get_arg(13);
            $this->shipping       = func_get_arg(14);
            $this->metadata       = func_get_arg(15);
            $this->dueAt          = func_get_arg(16);
            $this->canceledAt     = func_get_arg(17);
            $this->billingAt      = func_get_arg(18);
            $this->seenAt         = func_get_arg(19);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['id']              = $this->id;
        $json['code']            = $this->code;
        $json['url']             = $this->url;
        $json['amount']          = $this->amount;
        $json['status']          = $this->status;
        $json['payment_method']  = $this->paymentMethod;
        $json['created_at']      = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        $json['items']           = $this->items;
        $json['customer']        = $this->customer;
        $json['charge']          = $this->charge;
        $json['installments']    = $this->installments;
        $json['billing_address'] = $this->billingAddress;
        $json['subscription']    = $this->subscription;
        $json['cycle']           = $this->cycle;
        $json['shipping']        = $this->shipping;
        $json['metadata']        = $this->metadata;
        $json['due_at']          = isset($this->dueAt) ?
            DateTimeHelper::toRfc3339DateTime($this->dueAt) : null;
        $json['canceled_at']     = isset($this->canceledAt) ?
            DateTimeHelper::toRfc3339DateTime($this->canceledAt) : null;
        $json['billing_at']      = isset($this->billingAt) ?
            DateTimeHelper::toRfc3339DateTime($this->billingAt) : null;
        $json['seen_at']         = isset($this->seenAt) ?
            DateTimeHelper::toRfc3339DateTime($this->seenAt) : null;

        return $json;
    }
}
