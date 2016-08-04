<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * SignatureImageDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class SignatureImageDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Image' => 'base64Binary',
'Notifications' => 'Notification',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'SignatureImageDetail';

        
    /**
     * @var base64Binary
     */
    public $Image;

        
    /**
     * @var Notification[]
     */
    public $Notifications = array();



    /**
     * Set Image
     *
     * @param base64Binary $image
     * @return SignatureImageDetail
     */
    public function setImage($image)
    {
        $this->__set('Image', $image);
        $this->Image = $image;
        return $this;
    }
    
    /**
     * Returns Set Image
     *
     * @return base64Binary
     */
    public function getImage()
    {
        return $this->Image;
    }
    
    /**
     * Set Notifications
     *
     * @param Notification[] $notifications
     * @return SignatureImageDetail
     */
    public function setNotifications(array $notifications)
    {
        $this->__set('Notifications', $notifications);
        $this->Notifications = $notifications;
        return $this;
    }
    
    /**
     * Returns Set Notifications
     *
     * @return Notification[]
     */
    public function getNotifications()
    {
        return $this->Notifications;
    }
    

    
}