<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Options available for a tracking notification recipient.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackNotificationRecipientDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'NotificationEventsAvailable' => 'EMailNotificationEventType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TrackNotificationRecipientDetail';

        
    /**
     * @var EMailNotificationEventType[]
     */
    public $NotificationEventsAvailable = array();



    /**
     * The types of email notifications available for this recipient.
     *
     * @param EMailNotificationEventType[] $notificationEventsAvailable
     * @return TrackNotificationRecipientDetail
     */
    public function setNotificationEventsAvailable(array $notificationEventsAvailable)
    {
        $this->__set('NotificationEventsAvailable', $notificationEventsAvailable);
        $this->NotificationEventsAvailable = $notificationEventsAvailable;
        return $this;
    }
    
    /**
     * Returns The types of email notifications available for this recipient.
     *
     * @return EMailNotificationEventType[]
     */
    public function getNotificationEventsAvailable()
    {
        return $this->NotificationEventsAvailable;
    }
    

    
}