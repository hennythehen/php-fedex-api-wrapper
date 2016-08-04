<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Details specific to an Express freight shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ExpressFreightDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'PackingListEnclosed' => 'boolean',
'ShippersLoadAndCount' => 'positiveInteger',
'BookingConfirmationNumber' => 'string',

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
     * Indicates whether or nor a packing list is enclosed.
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
     * Returns Indicates whether or nor a packing list is enclosed.
     *
     * @return boolean
     */
    public function getPackingListEnclosed()
    {
        return $this->PackingListEnclosed;
    }
    
    /**
     * 
                Total shipment pieces.
                e.g. 3 boxes and 3 pallets of 100 pieces each = Shippers Load and Count of 303.
                Applicable to International Priority Freight and International Economy Freight.
                Values must be in the range of 1 - 99999
              
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
     * Returns 
                Total shipment pieces.
                e.g. 3 boxes and 3 pallets of 100 pieces each = Shippers Load and Count of 303.
                Applicable to International Priority Freight and International Economy Freight.
                Values must be in the range of 1 - 99999
              
     *
     * @return positiveInteger
     */
    public function getShippersLoadAndCount()
    {
        return $this->ShippersLoadAndCount;
    }
    
    /**
     * Required for International Freight shipping. Values must be 8- 12 characters in length.
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
     * Returns Required for International Freight shipping. Values must be 8- 12 characters in length.
     *
     * @return string
     */
    public function getBookingConfirmationNumber()
    {
        return $this->BookingConfirmationNumber;
    }
    

    
}