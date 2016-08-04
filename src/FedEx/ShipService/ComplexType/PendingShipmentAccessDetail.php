<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This information describes how and when a pending shipment may be accessed for completion.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PendingShipmentAccessDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'AccessorDetails' => 'PendingShipmentAccessorDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PendingShipmentAccessDetail';

        
    /**
     * @var PendingShipmentAccessorDetail[]
     */
    public $AccessorDetails = array();



    /**
     * Set AccessorDetails
     *
     * @param PendingShipmentAccessorDetail[] $accessorDetails
     * @return PendingShipmentAccessDetail
     */
    public function setAccessorDetails(array $accessorDetails)
    {
        $this->__set('AccessorDetails', $accessorDetails);
        $this->AccessorDetails = $accessorDetails;
        return $this;
    }
    
    /**
     * Returns Set AccessorDetails
     *
     * @return PendingShipmentAccessorDetail[]
     */
    public function getAccessorDetails()
    {
        return $this->AccessorDetails;
    }
    

    
}