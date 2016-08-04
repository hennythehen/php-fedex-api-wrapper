<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Party
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class Party
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'AccountNumber' => 'string',
'Tins' => 'TaxpayerIdentification',
'Contact' => 'Contact',
'Address' => 'Address',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Party';

        
    /**
     * @var string
     */
    public $AccountNumber;

        
    /**
     * @var TaxpayerIdentification[]
     */
    public $Tins = array();

        
    /**
     * @var Contact
     */
    public $Contact;

        
    /**
     * @var Address
     */
    public $Address;



    /**
     * Set AccountNumber
     *
     * @param string $accountNumber
     * @return Party
     */
    public function setAccountNumber($accountNumber)
    {
        $this->__set('AccountNumber', $accountNumber);
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    
    /**
     * Returns Set AccountNumber
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }
    
    /**
     * Set Tins
     *
     * @param TaxpayerIdentification[] $tins
     * @return Party
     */
    public function setTins(array $tins)
    {
        $this->__set('Tins', $tins);
        $this->Tins = $tins;
        return $this;
    }
    
    /**
     * Returns Set Tins
     *
     * @return TaxpayerIdentification[]
     */
    public function getTins()
    {
        return $this->Tins;
    }
    
    /**
     * Set Contact
     *
     * @param Contact $contact
     * @return Party
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
     * @return Party
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