<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ExpressFreightDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ExpressFreightDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'PackingListEnclosed' => 'boolean',
'ShippersLoadAndCount' => 'positiveInteger',
'BookingConfirmationNumber' => 'string',
'ReferenceLabelRequested' => 'boolean',
'BeforeDeliveryContact' => 'ExpressFreightDetailContact',
'UndeliverableContact' => 'ExpressFreightDetailContact',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ExpressFreightDetail';

        
    /**
     * @var boolean
     */
    public $PackingListEnclosed;

        
    /**
     * @var positiveInteger
     */
    public $ShippersLoadAndCount;

        
    /**
     * @var string
     */
    public $BookingConfirmationNumber;

        
    /**
     * @var boolean
     */
    public $ReferenceLabelRequested;

        
    /**
     * @var ExpressFreightDetailContact
     */
    public $BeforeDeliveryContact;

        
    /**
     * @var ExpressFreightDetailContact
     */
    public $UndeliverableContact;



    /**
     * Set PackingListEnclosed
     *
     * @param boolean $packingListEnclosed
     * @return ExpressFreightDetail
     */
    public function setPackingListEnclosed($packingListEnclosed)
    {
        $this->__set('PackingListEnclosed', $packingListEnclosed);
        $this->PackingListEnclosed = $packingListEnclosed;
        return $this;
    }
    
    /**
     * Returns Set PackingListEnclosed
     *
     * @return boolean
     */
    public function getPackingListEnclosed()
    {
        return $this->PackingListEnclosed;
    }
    
    /**
     * Set ShippersLoadAndCount
     *
     * @param positiveInteger $shippersLoadAndCount
     * @return ExpressFreightDetail
     */
    public function setShippersLoadAndCount($shippersLoadAndCount)
    {
        $this->__set('ShippersLoadAndCount', $shippersLoadAndCount);
        $this->ShippersLoadAndCount = $shippersLoadAndCount;
        return $this;
    }
    
    /**
     * Returns Set ShippersLoadAndCount
     *
     * @return positiveInteger
     */
    public function getShippersLoadAndCount()
    {
        return $this->ShippersLoadAndCount;
    }
    
    /**
     * Set BookingConfirmationNumber
     *
     * @param string $bookingConfirmationNumber
     * @return ExpressFreightDetail
     */
    public function setBookingConfirmationNumber($bookingConfirmationNumber)
    {
        $this->__set('BookingConfirmationNumber', $bookingConfirmationNumber);
        $this->BookingConfirmationNumber = $bookingConfirmationNumber;
        return $this;
    }
    
    /**
     * Returns Set BookingConfirmationNumber
     *
     * @return string
     */
    public function getBookingConfirmationNumber()
    {
        return $this->BookingConfirmationNumber;
    }
    
    /**
     * Set ReferenceLabelRequested
     *
     * @param boolean $referenceLabelRequested
     * @return ExpressFreightDetail
     */
    public function setReferenceLabelRequested($referenceLabelRequested)
    {
        $this->__set('ReferenceLabelRequested', $referenceLabelRequested);
        $this->ReferenceLabelRequested = $referenceLabelRequested;
        return $this;
    }
    
    /**
     * Returns Set ReferenceLabelRequested
     *
     * @return boolean
     */
    public function getReferenceLabelRequested()
    {
        return $this->ReferenceLabelRequested;
    }
    
    /**
     * Set BeforeDeliveryContact
     *
     * @param ExpressFreightDetailContact $beforeDeliveryContact
     * @return ExpressFreightDetail
     */
    public function setBeforeDeliveryContact(ExpressFreightDetailContact $beforeDeliveryContact)
    {
        $this->__set('BeforeDeliveryContact', $beforeDeliveryContact);
        $this->BeforeDeliveryContact = $beforeDeliveryContact;
        return $this;
    }
    
    /**
     * Returns Set BeforeDeliveryContact
     *
     * @return ExpressFreightDetailContact
     */
    public function getBeforeDeliveryContact()
    {
        return $this->BeforeDeliveryContact;
    }
    
    /**
     * Set UndeliverableContact
     *
     * @param ExpressFreightDetailContact $undeliverableContact
     * @return ExpressFreightDetail
     */
    public function setUndeliverableContact(ExpressFreightDetailContact $undeliverableContact)
    {
        $this->__set('UndeliverableContact', $undeliverableContact);
        $this->UndeliverableContact = $undeliverableContact;
        return $this;
    }
    
    /**
     * Returns Set UndeliverableContact
     *
     * @return ExpressFreightDetailContact
     */
    public function getUndeliverableContact()
    {
        return $this->UndeliverableContact;
    }
    

    
}