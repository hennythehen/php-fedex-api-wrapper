<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipmentEventNotificationDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ShipmentEventNotificationDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'AggregationType' => 'ShipmentNotificationAggregationType',
'PersonalMessage' => 'string',
'EventNotifications' => 'ShipmentEventNotificationSpecification',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShipmentEventNotificationDetail';

        
    /**
     * @var \FedEx\RateService\SimpleType\ShipmentNotificationAggregationType|string
     */
    public $AggregationType;

        
    /**
     * @var string
     */
    public $PersonalMessage;

        
    /**
     * @var ShipmentEventNotificationSpecification[]
     */
    public $EventNotifications = array();



    /**
     * Set AggregationType
     *
     * @param \FedEx\RateService\SimpleType\ShipmentNotificationAggregationType|string $aggregationType
     * @return ShipmentEventNotificationDetail
     */
    public function setAggregationType($aggregationType)
    {
        $this->__set('AggregationType', $aggregationType);
        $this->AggregationType = $aggregationType;
        return $this;
    }
    
    /**
     * Returns Set AggregationType
     *
     * @return \FedEx\RateService\SimpleType\ShipmentNotificationAggregationType|string
     */
    public function getAggregationType()
    {
        return $this->AggregationType;
    }
    
    /**
     * Set PersonalMessage
     *
     * @param string $personalMessage
     * @return ShipmentEventNotificationDetail
     */
    public function setPersonalMessage($personalMessage)
    {
        $this->__set('PersonalMessage', $personalMessage);
        $this->PersonalMessage = $personalMessage;
        return $this;
    }
    
    /**
     * Returns Set PersonalMessage
     *
     * @return string
     */
    public function getPersonalMessage()
    {
        return $this->PersonalMessage;
    }
    
    /**
     * Set EventNotifications
     *
     * @param ShipmentEventNotificationSpecification[] $eventNotifications
     * @return ShipmentEventNotificationDetail
     */
    public function setEventNotifications(array $eventNotifications)
    {
        $this->__set('EventNotifications', $eventNotifications);
        $this->EventNotifications = $eventNotifications;
        return $this;
    }
    
    /**
     * Returns Set EventNotifications
     *
     * @return ShipmentEventNotificationSpecification[]
     */
    public function getEventNotifications()
    {
        return $this->EventNotifications;
    }
    

    
}