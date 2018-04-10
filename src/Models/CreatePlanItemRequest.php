<?php
/*
 * MundiAPILib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace MundiAPILib\Models;

use JsonSerializable;

/**
 *Request for creating a plan item
 */
class CreatePlanItemRequest implements JsonSerializable
{
    /**
     * Item name
     * @required
     * @var string $name public property
     */
    public $name;

    /**
     * Item's pricing scheme
     * @required
     * @maps pricing_scheme
     * @var \MundiAPILib\Models\CreatePricingSchemeRequest $pricingScheme public property
     */
    public $pricingScheme;

    /**
     * Item's id
     * @required
     * @var string $id public property
     */
    public $id;

    /**
     * Item's description
     * @required
     * @var string $description public property
     */
    public $description;

    /**
     * Number of cycles where the item will be charged
     * @var integer|null $cycles public property
     */
    public $cycles;

    /**
     * Quantity
     * @var integer|null $quantity public property
     */
    public $quantity;

    /**
     * Constructor to set initial or default values of member properties
     * @param string                     $name          Initialization value for $this->name
     * @param CreatePricingSchemeRequest $pricingScheme Initialization value for $this->pricingScheme
     * @param string                     $id            Initialization value for $this->id
     * @param string                     $description   Initialization value for $this->description
     * @param integer                    $cycles        Initialization value for $this->cycles
     * @param integer                    $quantity      Initialization value for $this->quantity
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->name          = func_get_arg(0);
            $this->pricingScheme = func_get_arg(1);
            $this->id            = func_get_arg(2);
            $this->description   = func_get_arg(3);
            $this->cycles        = func_get_arg(4);
            $this->quantity      = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['name']           = $this->name;
        $json['pricing_scheme'] = $this->pricingScheme;
        $json['id']             = $this->id;
        $json['description']    = $this->description;
        $json['cycles']         = $this->cycles;
        $json['quantity']       = $this->quantity;

        return $json;
    }
}
