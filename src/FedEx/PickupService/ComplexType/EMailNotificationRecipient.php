<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * EMailNotificationRecipient
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class EMailNotificationRecipient
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'EMailNotificationRecipientType' => 'EMailNotificationRecipientType',
'EMailAddress' => 'string',
'NotificationEventsRequested' => 'EMailNotificationEventType',
'Format' => 'EMailNotificationFormatType',
'Localization' => 'Localization',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'EMailNotificationRecipient';

        
    /**
     * @var \FedEx\PickupService\SimpleType\EMailNotificationRecipientType|string
     */
    public $EMailNotificationRecipientType;

        
    /**
     * @var string
     */
    public $EMailAddress;

        
    /**
     * @var EMailNotificationEventType[]
     */
    public $NotificationEventsRequested = array();

        
    /**
     * @var \FedEx\PickupService\SimpleType\EMailNotificationFormatType|string
     */
    public $Format;

        
    /**
     * @var Localization
     */
    public $Localization;



    /**
     * Identifies the relationship this email recipient has to the shipment.
     *
     * @param \FedEx\PickupService\SimpleType\EMailNotificationRecipientType|string $eMailNotificationRecipientType
     * @return EMailNotificationRecipient
     */
    public function setEMailNotificationRecipientType($eMailNotificationRecipientType)
    {
        $this->__set('EMailNotificationRecipientType', $eMailNotificationRecipientType);
        $this->EMailNotificationRecipientType = $eMailNotificationRecipientType;
        return $this;
    }
    
    /**
     * Returns Identifies the relationship this email recipient has to the shipment.
     *
     * @return \FedEx\PickupService\SimpleType\EMailNotificationRecipientType|string
     */
    public function getEMailNotificationRecipientType()
    {
        return $this->EMailNotificationRecipientType;
    }
    
    /**
     * The email address to send the notification to
     *
     * @param string $eMailAddress
     * @return EMailNotificationRecipient
     */
    public function setEMailAddress($eMailAddress)
    {
        $this->__set('EMailAddress', $eMailAddress);
        $this->EMailAddress = $eMailAddress;
        return $this;
    }
    
    /**
     * Returns The email address to send the notification to
     *
     * @return string
     */
    public function getEMailAddress()
    {
        return $this->EMailAddress;
    }
    
    /**
     * The types of email notifications being requested for this recipient.
     *
     * @param EMailNotificationEventType[] $notificationEventsRequested
     * @return EMailNotificationRecipient
     */
    public function setNotificationEventsRequested(array $notificationEventsRequested)
    {
        $this->__set('NotificationEventsRequested', $notificationEventsRequested);
        $this->NotificationEventsRequested = $notificationEventsRequested;
        return $this;
    }
    
    /**
     * Returns The types of email notifications being requested for this recipient.
     *
     * @return EMailNotificationEventType[]
     */
    public function getNotificationEventsRequested()
    {
        return $this->NotificationEventsRequested;
    }
    
    /**
     * The format of the email notification.
     *
     * @param \FedEx\PickupService\SimpleType\EMailNotificationFormatType|string $format
     * @return EMailNotificationRecipient
     */
    public function setFormat($format)
    {
        $this->__set('Format', $format);
        $this->Format = $format;
        return $this;
    }
    
    /**
     * Returns The format of the email notification.
     *
     * @return \FedEx\PickupService\SimpleType\EMailNotificationFormatType|string
     */
    public function getFormat()
    {
        return $this->Format;
    }
    
    /**
     * The language/locale to be used in this email notification.
     *
     * @param Localization $localization
     * @return EMailNotificationRecipient
     */
    public function setLocalization(Localization $localization)
    {
        $this->__set('Localization', $localization);
        $this->Localization = $localization;
        return $this;
    }
    
    /**
     * Returns The language/locale to be used in this email notification.
     *
     * @return Localization
     */
    public function getLocalization()
    {
        return $this->Localization;
    }
    

    
}