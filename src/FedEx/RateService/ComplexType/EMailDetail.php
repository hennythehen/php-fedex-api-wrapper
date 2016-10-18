<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * EMailDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class EMailDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'EmailAddress' => 'string',
'Name' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'EMailDetail';

        
    /**
     * @var string
     */
    public $EmailAddress;

        
    /**
     * @var string
     */
    public $Name;



    /**
     * Set EmailAddress
     *
     * @param string $emailAddress
     * @return EMailDetail
     */
    public function setEmailAddress($emailAddress)
    {
        $this->__set('EmailAddress', $emailAddress);
        $this->EmailAddress = $emailAddress;
        return $this;
    }
    
    /**
     * Returns Set EmailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }
    
    /**
     * Specifies the name associated with the email address.
     *
     * @param string $name
     * @return EMailDetail
     */
    public function setName($name)
    {
        $this->__set('Name', $name);
        $this->Name = $name;
        return $this;
    }
    
    /**
     * Returns Specifies the name associated with the email address.
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }
    

    
}