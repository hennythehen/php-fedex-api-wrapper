<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Money
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class Money
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Currency' => 'string',
'Amount' => 'decimal',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Money';

        
    /**
     * @var string
     */
    public $Currency;

        
    /**
     * @var decimal
     */
    public $Amount;



    /**
     * Set Currency
     *
     * @param string $currency
     * @return Money
     */
    public function setCurrency($currency)
    {
        $this->__set('Currency', $currency);
        $this->Currency = $currency;
        return $this;
    }
    
    /**
     * Returns Set Currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->Currency;
    }
    
    /**
     * Set Amount
     *
     * @param decimal $amount
     * @return Money
     */
    public function setAmount($amount)
    {
        $this->__set('Amount', $amount);
        $this->Amount = $amount;
        return $this;
    }
    
    /**
     * Returns Set Amount
     *
     * @return decimal
     */
    public function getAmount()
    {
        return $this->Amount;
    }
    

    
}