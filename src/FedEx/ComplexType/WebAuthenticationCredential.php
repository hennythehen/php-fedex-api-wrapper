<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Two part authentication string used for the sender's identity
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class WebAuthenticationCredential
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Key' => 'string',
'Password' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'WebAuthenticationCredential';

        
    /**
     * @var string
     */
    public $Key;

        
    /**
     * @var string
     */
    public $Password;



    /**
     * Identifying part of authentication credential. This value is provided by FedEx after registration
     *
     * @param string $key
     * @return WebAuthenticationCredential
     */
    public function setKey($key)
    {
        $this->__set('Key', $key);
        $this->Key = $key;
        return $this;
    }
    
    /**
     * Returns Identifying part of authentication credential. This value is provided by FedEx after registration
     *
     * @return string
     */
    public function getKey()
    {
        return $this->Key;
    }
    
    /**
     * Secret part of authentication key. This value is provided by FedEx after registration.
     *
     * @param string $password
     * @return WebAuthenticationCredential
     */
    public function setPassword($password)
    {
        $this->__set('Password', $password);
        $this->Password = $password;
        return $this;
    }
    
    /**
     * Returns Secret part of authentication key. This value is provided by FedEx after registration.
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }
    

    
}