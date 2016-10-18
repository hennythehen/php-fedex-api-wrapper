<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipmentEventNotificationSpecification
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ShipmentEventNotificationSpecification
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Role' => 'ShipmentNotificationRoleType',
'Events' => 'NotificationEventType',
'NotificationDetail' => 'NotificationDetail',
'FormatSpecification' => 'ShipmentNotificationFormatSpecification',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShipmentEventNotificationSpecification';

        
    /**
     * @var \FedEx\RateService\SimpleType\ShipmentNotificationRoleType|string
     */
    public $Role;

        
    /**
     * @var NotificationEventType[]
     */
    public $Events = array();

        
    /**
     * @var NotificationDetail
     */
    public $NotificationDetail;

        
    /**
     * @var ShipmentNotificationFormatSpecification
     */
    public $FormatSpecification;



    /**
     * Set Role
     *
     * @param \FedEx\RateService\SimpleType\ShipmentNotificationRoleType|string $role
     * @return ShipmentEventNotificationSpecification
     */
    public function setRole($role)
    {
        $this->__set('Role', $role);
        $this->Role = $role;
        return $this;
    }
    
    /**
     * Returns Set Role
     *
     * @return \FedEx\RateService\SimpleType\ShipmentNotificationRoleType|string
     */
    public function getRole()
    {
        return $this->Role;
    }
    
    /**
     * Set Events
     *
     * @param NotificationEventType[] $events
     * @return ShipmentEventNotificationSpecification
     */
    public function setEvents(array $events)
    {
        $this->__set('Events', $events);
        $this->Events = $events;
        return $this;
    }
    
    /**
     * Returns Set Events
     *
     * @return NotificationEventType[]
     */
    public function getEvents()
    {
        return $this->Events;
    }
    
    /**
     * Set NotificationDetail
     *
     * @param NotificationDetail $notificationDetail
     * @return ShipmentEventNotificationSpecification
     */
    public function setNotificationDetail(NotificationDetail $notificationDetail)
    {
        $this->__set('NotificationDetail', $notificationDetail);
        $this->NotificationDetail = $notificationDetail;
        return $this;
    }
    
    /**
     * Returns Set NotificationDetail
     *
     * @return NotificationDetail
     */
    public function getNotificationDetail()
    {
        return $this->NotificationDetail;
    }
    
    /**
     * Set FormatSpecification
     *
     * @param ShipmentNotificationFormatSpecification $formatSpecification
     * @return ShipmentEventNotificationSpecification
     */
    public function setFormatSpecification(ShipmentNotificationFormatSpecification $formatSpecification)
    {
        $this->__set('FormatSpecification', $formatSpecification);
        $this->FormatSpecification = $formatSpecification;
        return $this;
    }
    
    /**
     * Returns Set FormatSpecification
     *
     * @return ShipmentNotificationFormatSpecification
     */
    public function getFormatSpecification()
    {
        return $this->FormatSpecification;
    }
    

    
}