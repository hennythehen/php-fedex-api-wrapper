<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the details to be used by the user of the pending shipment
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PendingShipmentAccessorDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Role' => 'AccessorRoleType',
'UserId' => 'string',
'Password' => 'string',
'EmailLabelUrl' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PendingShipmentAccessorDetail';

        
    /**
     * @var \FedEx\ShipService\SimpleType\AccessorRoleType|string
     */
    public $Role;

        
    /**
     * @var string
     */
    public $UserId;

        
    /**
     * @var string
     */
    public $Password;

        
    /**
     * @var string
     */
    public $EmailLabelUrl;



    /**
     * Specifies the role of the user who is trying to access the pending shipment.
     *
     * @param \FedEx\ShipService\SimpleType\AccessorRoleType|string $role
     * @return PendingShipmentAccessorDetail
     */
    public function setRole($role)
    {
        $this->__set('Role', $role);
        $this->Role = $role;
        return $this;
    }
    
    /**
     * Returns Specifies the role of the user who is trying to access the pending shipment.
     *
     * @return \FedEx\ShipService\SimpleType\AccessorRoleType|string
     */
    public function getRole()
    {
        return $this->Role;
    }
    
    /**
     * Set UserId
     *
     * @param string $userId
     * @return PendingShipmentAccessorDetail
     */
    public function setUserId($userId)
    {
        $this->__set('UserId', $userId);
        $this->UserId = $userId;
        return $this;
    }
    
    /**
     * Returns Set UserId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->UserId;
    }
    
    /**
     * Set Password
     *
     * @param string $password
     * @return PendingShipmentAccessorDetail
     */
    public function setPassword($password)
    {
        $this->__set('Password', $password);
        $this->Password = $password;
        return $this;
    }
    
    /**
     * Returns Set Password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }
    
    /**
     * Set EmailLabelUrl
     *
     * @param string $emailLabelUrl
     * @return PendingShipmentAccessorDetail
     */
    public function setEmailLabelUrl($emailLabelUrl)
    {
        $this->__set('EmailLabelUrl', $emailLabelUrl);
        $this->EmailLabelUrl = $emailLabelUrl;
        return $this;
    }
    
    /**
     * Returns Set EmailLabelUrl
     *
     * @return string
     */
    public function getEmailLabelUrl()
    {
        return $this->EmailLabelUrl;
    }
    

    
}