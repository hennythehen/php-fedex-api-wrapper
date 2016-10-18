<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * NotificationDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class NotificationDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'NotificationType' => 'NotificationType',
'EmailDetail' => 'EMailDetail',
'Localization' => 'Localization',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'NotificationDetail';

        
    /**
     * @var \FedEx\RateService\SimpleType\NotificationType|string
     */
    public $NotificationType;

        
    /**
     * @var EMailDetail
     */
    public $EmailDetail;

        
    /**
     * @var Localization
     */
    public $Localization;



    /**
     * Indicates the type of notification that will be sent.
     *
     * @param \FedEx\RateService\SimpleType\NotificationType|string $notificationType
     * @return NotificationDetail
     */
    public function setNotificationType($notificationType)
    {
        $this->__set('NotificationType', $notificationType);
        $this->NotificationType = $notificationType;
        return $this;
    }
    
    /**
     * Returns Indicates the type of notification that will be sent.
     *
     * @return \FedEx\RateService\SimpleType\NotificationType|string
     */
    public function getNotificationType()
    {
        return $this->NotificationType;
    }
    
    /**
     * Specifies the email notification details.
     *
     * @param EMailDetail $emailDetail
     * @return NotificationDetail
     */
    public function setEmailDetail(EMailDetail $emailDetail)
    {
        $this->__set('EmailDetail', $emailDetail);
        $this->EmailDetail = $emailDetail;
        return $this;
    }
    
    /**
     * Returns Specifies the email notification details.
     *
     * @return EMailDetail
     */
    public function getEmailDetail()
    {
        return $this->EmailDetail;
    }
    
    /**
     * Specifies the localization for this notification.
     *
     * @param Localization $localization
     * @return NotificationDetail
     */
    public function setLocalization(Localization $localization)
    {
        $this->__set('Localization', $localization);
        $this->Localization = $localization;
        return $this;
    }
    
    /**
     * Returns Specifies the localization for this notification.
     *
     * @return Localization
     */
    public function getLocalization()
    {
        return $this->Localization;
    }
    

    
}