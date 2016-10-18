<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipmentNotificationFormatSpecification
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ShipmentNotificationFormatSpecification
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Type' => 'NotificationFormatType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShipmentNotificationFormatSpecification';

        
    /**
     * @var \FedEx\RateService\SimpleType\NotificationFormatType|string
     */
    public $Type;



    /**
     * Set Type
     *
     * @param \FedEx\RateService\SimpleType\NotificationFormatType|string $type
     * @return ShipmentNotificationFormatSpecification
     */
    public function setType($type)
    {
        $this->__set('Type', $type);
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns Set Type
     *
     * @return \FedEx\RateService\SimpleType\NotificationFormatType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    

    
}