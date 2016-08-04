<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * HomeDeliveryPremiumDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class HomeDeliveryPremiumDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'HomeDeliveryPremiumType' => 'HomeDeliveryPremiumType',
'Date' => 'date',
'PhoneNumber' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'HomeDeliveryPremiumDetail';

        
    /**
     * @var \FedEx\PickupService\SimpleType\HomeDeliveryPremiumType|string
     */
    public $HomeDeliveryPremiumType;

        
    /**
     * @var date
     */
    public $Date;

        
    /**
     * @var string
     */
    public $PhoneNumber;



    /**
     * Set HomeDeliveryPremiumType
     *
     * @param \FedEx\PickupService\SimpleType\HomeDeliveryPremiumType|string $homeDeliveryPremiumType
     * @return HomeDeliveryPremiumDetail
     */
    public function setHomeDeliveryPremiumType($homeDeliveryPremiumType)
    {
        $this->__set('HomeDeliveryPremiumType', $homeDeliveryPremiumType);
        $this->HomeDeliveryPremiumType = $homeDeliveryPremiumType;
        return $this;
    }
    
    /**
     * Returns Set HomeDeliveryPremiumType
     *
     * @return \FedEx\PickupService\SimpleType\HomeDeliveryPremiumType|string
     */
    public function getHomeDeliveryPremiumType()
    {
        return $this->HomeDeliveryPremiumType;
    }
    
    /**
     * Set Date
     *
     * @param date $date
     * @return HomeDeliveryPremiumDetail
     */
    public function setDate($date)
    {
        $this->__set('Date', $date);
        $this->Date = $date;
        return $this;
    }
    
    /**
     * Returns Set Date
     *
     * @return date
     */
    public function getDate()
    {
        return $this->Date;
    }
    
    /**
     * Set PhoneNumber
     *
     * @param string $phoneNumber
     * @return HomeDeliveryPremiumDetail
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->__set('PhoneNumber', $phoneNumber);
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    
    /**
     * Returns Set PhoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    

    
}