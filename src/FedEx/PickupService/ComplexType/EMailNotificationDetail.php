<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Information describing email notifications that will be sent in relation to events that occur during package movement
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class EMailNotificationDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'AggregationType' => 'EMailNotificationAggregationType',
'PersonalMessage' => 'string',
'Recipients' => 'EMailNotificationRecipient',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'EMailNotificationDetail';

        
    /**
     * @var \FedEx\PickupService\SimpleType\EMailNotificationAggregationType|string
     */
    public $AggregationType;

        
    /**
     * @var string
     */
    public $PersonalMessage;

        
    /**
     * @var EMailNotificationRecipient[]
     */
    public $Recipients = array();



    /**
     * Specifies whether/how email notifications are grouped.
     *
     * @param \FedEx\PickupService\SimpleType\EMailNotificationAggregationType|string $aggregationType
     * @return EMailNotificationDetail
     */
    public function setAggregationType($aggregationType)
    {
        $this->__set('AggregationType', $aggregationType);
        $this->AggregationType = $aggregationType;
        return $this;
    }
    
    /**
     * Returns Specifies whether/how email notifications are grouped.
     *
     * @return \FedEx\PickupService\SimpleType\EMailNotificationAggregationType|string
     */
    public function getAggregationType()
    {
        return $this->AggregationType;
    }
    
    /**
     * A message that will be included in the email notifications
     *
     * @param string $personalMessage
     * @return EMailNotificationDetail
     */
    public function setPersonalMessage($personalMessage)
    {
        $this->__set('PersonalMessage', $personalMessage);
        $this->PersonalMessage = $personalMessage;
        return $this;
    }
    
    /**
     * Returns A message that will be included in the email notifications
     *
     * @return string
     */
    public function getPersonalMessage()
    {
        return $this->PersonalMessage;
    }
    
    /**
     * Information describing the destination of the email, format of the email and events to be notified on
     *
     * @param EMailNotificationRecipient[] $recipients
     * @return EMailNotificationDetail
     */
    public function setRecipients(array $recipients)
    {
        $this->__set('Recipients', $recipients);
        $this->Recipients = $recipients;
        return $this;
    }
    
    /**
     * Returns Information describing the destination of the email, format of the email and events to be notified on
     *
     * @return EMailNotificationRecipient[]
     */
    public function getRecipients()
    {
        return $this->Recipients;
    }
    

    
}