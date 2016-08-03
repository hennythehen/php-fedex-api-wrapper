<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Payment
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class Payment
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'PaymentType' => 'PaymentType',
'Payor' => 'Payor',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Payment';

        
    /**
     * @var \FedEx\SimpleType\PaymentType|string
     */
    public $PaymentType;

        
    /**
     * @var Payor
     */
    public $Payor;



    /**
     * Set PaymentType
     *
     * @param \FedEx\SimpleType\PaymentType|string $paymentType
     * @return Payment
     */
    public function setPaymentType($paymentType)
    {
        $this->__set('PaymentType', $paymentType);
        $this->PaymentType = $paymentType;
        return $this;
    }
    
    /**
     * Returns Set PaymentType
     *
     * @return \FedEx\SimpleType\PaymentType|string
     */
    public function getPaymentType()
    {
        return $this->PaymentType;
    }
    
    /**
     * Set Payor
     *
     * @param Payor $payor
     * @return Payment
     */
    public function setPayor(Payor $payor)
    {
        $this->__set('Payor', $payor);
        $this->Payor = $payor;
        return $this;
    }
    
    /**
     * Returns Set Payor
     *
     * @return Payor
     */
    public function getPayor()
    {
        return $this->Payor;
    }
    

    
}