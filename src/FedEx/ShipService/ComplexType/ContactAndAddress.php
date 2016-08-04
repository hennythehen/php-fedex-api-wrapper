<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ContactAndAddress
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ContactAndAddress
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Contact' => 'Contact',
'Address' => 'Address',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ContactAndAddress';

        
    /**
     * @var Contact
     */
    public $Contact;

        
    /**
     * @var Address
     */
    public $Address;



    /**
     * Set Contact
     *
     * @param Contact $contact
     * @return ContactAndAddress
     */
    public function setContact(Contact $contact)
    {
        $this->__set('Contact', $contact);
        $this->Contact = $contact;
        return $this;
    }
    
    /**
     * Returns Set Contact
     *
     * @return Contact
     */
    public function getContact()
    {
        return $this->Contact;
    }
    
    /**
     * Set Address
     *
     * @param Address $address
     * @return ContactAndAddress
     */
    public function setAddress(Address $address)
    {
        $this->__set('Address', $address);
        $this->Address = $address;
        return $this;
    }
    
    /**
     * Returns Set Address
     *
     * @return Address
     */
    public function getAddress()
    {
        return $this->Address;
    }
    

    
}