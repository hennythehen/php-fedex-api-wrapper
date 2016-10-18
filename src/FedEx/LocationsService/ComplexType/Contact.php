<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The descriptive data for a point-of-contact person.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class Contact
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'ContactId' => 'string',
'PersonName' => 'string',
'Title' => 'string',
'CompanyName' => 'string',
'PhoneNumber' => 'string',
'PhoneExtension' => 'string',
'TollFreePhoneNumber' => 'string',
'PagerNumber' => 'string',
'FaxNumber' => 'string',
'EMailAddress' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Contact';

        
    /**
     * @var string
     */
    public $ContactId;

        
    /**
     * @var string
     */
    public $PersonName;

        
    /**
     * @var string
     */
    public $Title;

        
    /**
     * @var string
     */
    public $CompanyName;

        
    /**
     * @var string
     */
    public $PhoneNumber;

        
    /**
     * @var string
     */
    public $PhoneExtension;

        
    /**
     * @var string
     */
    public $TollFreePhoneNumber;

        
    /**
     * @var string
     */
    public $PagerNumber;

        
    /**
     * @var string
     */
    public $FaxNumber;

        
    /**
     * @var string
     */
    public $EMailAddress;



    /**
     * Client provided identifier corresponding to this contact information.
     *
     * @param string $contactId
     * @return Contact
     */
    public function setContactId($contactId)
    {
        $this->__set('ContactId', $contactId);
        $this->ContactId = $contactId;
        return $this;
    }
    
    /**
     * Returns Client provided identifier corresponding to this contact information.
     *
     * @return string
     */
    public function getContactId()
    {
        return $this->ContactId;
    }
    
    /**
     * Identifies the contact person's name.
     *
     * @param string $personName
     * @return Contact
     */
    public function setPersonName($personName)
    {
        $this->__set('PersonName', $personName);
        $this->PersonName = $personName;
        return $this;
    }
    
    /**
     * Returns Identifies the contact person's name.
     *
     * @return string
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }
    
    /**
     * Identifies the contact person's title.
     *
     * @param string $title
     * @return Contact
     */
    public function setTitle($title)
    {
        $this->__set('Title', $title);
        $this->Title = $title;
        return $this;
    }
    
    /**
     * Returns Identifies the contact person's title.
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }
    
    /**
     * Identifies the company this contact is associated with.
     *
     * @param string $companyName
     * @return Contact
     */
    public function setCompanyName($companyName)
    {
        $this->__set('CompanyName', $companyName);
        $this->CompanyName = $companyName;
        return $this;
    }
    
    /**
     * Returns Identifies the company this contact is associated with.
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }
    
    /**
     * Identifies the phone number associated with this contact.
     *
     * @param string $phoneNumber
     * @return Contact
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->__set('PhoneNumber', $phoneNumber);
        $this->PhoneNumber = $phoneNumber;
        return $this;
    }
    
    /**
     * Returns Identifies the phone number associated with this contact.
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->PhoneNumber;
    }
    
    /**
     * Identifies the phone extension associated with this contact.
     *
     * @param string $phoneExtension
     * @return Contact
     */
    public function setPhoneExtension($phoneExtension)
    {
        $this->__set('PhoneExtension', $phoneExtension);
        $this->PhoneExtension = $phoneExtension;
        return $this;
    }
    
    /**
     * Returns Identifies the phone extension associated with this contact.
     *
     * @return string
     */
    public function getPhoneExtension()
    {
        return $this->PhoneExtension;
    }
    
    /**
     * Identifies a toll free number, if any, associated with this contact.
     *
     * @param string $tollFreePhoneNumber
     * @return Contact
     */
    public function setTollFreePhoneNumber($tollFreePhoneNumber)
    {
        $this->__set('TollFreePhoneNumber', $tollFreePhoneNumber);
        $this->TollFreePhoneNumber = $tollFreePhoneNumber;
        return $this;
    }
    
    /**
     * Returns Identifies a toll free number, if any, associated with this contact.
     *
     * @return string
     */
    public function getTollFreePhoneNumber()
    {
        return $this->TollFreePhoneNumber;
    }
    
    /**
     * Identifies the pager number associated with this contact.
     *
     * @param string $pagerNumber
     * @return Contact
     */
    public function setPagerNumber($pagerNumber)
    {
        $this->__set('PagerNumber', $pagerNumber);
        $this->PagerNumber = $pagerNumber;
        return $this;
    }
    
    /**
     * Returns Identifies the pager number associated with this contact.
     *
     * @return string
     */
    public function getPagerNumber()
    {
        return $this->PagerNumber;
    }
    
    /**
     * Identifies the fax number associated with this contact.
     *
     * @param string $faxNumber
     * @return Contact
     */
    public function setFaxNumber($faxNumber)
    {
        $this->__set('FaxNumber', $faxNumber);
        $this->FaxNumber = $faxNumber;
        return $this;
    }
    
    /**
     * Returns Identifies the fax number associated with this contact.
     *
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->FaxNumber;
    }
    
    /**
     * Identifies the email address associated with this contact.
     *
     * @param string $eMailAddress
     * @return Contact
     */
    public function setEMailAddress($eMailAddress)
    {
        $this->__set('EMailAddress', $eMailAddress);
        $this->EMailAddress = $eMailAddress;
        return $this;
    }
    
    /**
     * Returns Identifies the email address associated with this contact.
     *
     * @return string
     */
    public function getEMailAddress()
    {
        return $this->EMailAddress;
    }
    

    
}