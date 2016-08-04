<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * UniqueTrackingNumber
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class UniqueTrackingNumber
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'TrackingNumber' => 'string',
'TrackingNumberUniqueIdentifier' => 'string',
'ShipDate' => 'date',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'UniqueTrackingNumber';

        
    /**
     * @var string
     */
    public $TrackingNumber;

        
    /**
     * @var string
     */
    public $TrackingNumberUniqueIdentifier;

        
    /**
     * @var date
     */
    public $ShipDate;



    /**
     * Set TrackingNumber
     *
     * @param string $trackingNumber
     * @return UniqueTrackingNumber
     */
    public function setTrackingNumber($trackingNumber)
    {
        $this->__set('TrackingNumber', $trackingNumber);
        $this->TrackingNumber = $trackingNumber;
        return $this;
    }
    
    /**
     * Returns Set TrackingNumber
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }
    
    /**
     * Set TrackingNumberUniqueIdentifier
     *
     * @param string $trackingNumberUniqueIdentifier
     * @return UniqueTrackingNumber
     */
    public function setTrackingNumberUniqueIdentifier($trackingNumberUniqueIdentifier)
    {
        $this->__set('TrackingNumberUniqueIdentifier', $trackingNumberUniqueIdentifier);
        $this->TrackingNumberUniqueIdentifier = $trackingNumberUniqueIdentifier;
        return $this;
    }
    
    /**
     * Returns Set TrackingNumberUniqueIdentifier
     *
     * @return string
     */
    public function getTrackingNumberUniqueIdentifier()
    {
        return $this->TrackingNumberUniqueIdentifier;
    }
    
    /**
     * Set ShipDate
     *
     * @param date $shipDate
     * @return UniqueTrackingNumber
     */
    public function setShipDate($shipDate)
    {
        $this->__set('ShipDate', $shipDate);
        $this->ShipDate = $shipDate;
        return $this;
    }
    
    /**
     * Returns Set ShipDate
     *
     * @return date
     */
    public function getShipDate()
    {
        return $this->ShipDate;
    }
    

    
}