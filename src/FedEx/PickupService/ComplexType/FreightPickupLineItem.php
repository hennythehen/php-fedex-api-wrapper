<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * FreightPickupLineItem
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class FreightPickupLineItem
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Service' => 'ServiceType',
'SequenceNumber' => 'nonNegativeInteger',
'Destination' => 'Address',
'Packaging' => 'PhysicalPackagingType',
'Pieces' => 'int',
'Weight' => 'Weight',
'TotalHandlingUnits' => 'int',
'PurchaseOrderNumber' => 'string',
'JustOneMore' => 'boolean',
'SpecialServicesRequested' => 'ShipmentSpecialServicesRequested',
'Description' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'FreightPickupLineItem';

        
    /**
     * @var \FedEx\PickupService\SimpleType\ServiceType|string
     */
    public $Service;

        
    /**
     * @var nonNegativeInteger
     */
    public $SequenceNumber;

        
    /**
     * @var Address
     */
    public $Destination;

        
    /**
     * @var \FedEx\PickupService\SimpleType\PhysicalPackagingType|string
     */
    public $Packaging;

        
    /**
     * @var int
     */
    public $Pieces;

        
    /**
     * @var Weight
     */
    public $Weight;

        
    /**
     * @var int
     */
    public $TotalHandlingUnits;

        
    /**
     * @var string
     */
    public $PurchaseOrderNumber;

        
    /**
     * @var boolean
     */
    public $JustOneMore;

        
    /**
     * @var ShipmentSpecialServicesRequested
     */
    public $SpecialServicesRequested;

        
    /**
     * @var string
     */
    public $Description;



    /**
     * Set Service
     *
     * @param \FedEx\PickupService\SimpleType\ServiceType|string $service
     * @return FreightPickupLineItem
     */
    public function setService($service)
    {
        $this->__set('Service', $service);
        $this->Service = $service;
        return $this;
    }
    
    /**
     * Returns Set Service
     *
     * @return \FedEx\PickupService\SimpleType\ServiceType|string
     */
    public function getService()
    {
        return $this->Service;
    }
    
    /**
     * Identifies the line item, to match reply line with request line.
     *
     * @param nonNegativeInteger $sequenceNumber
     * @return FreightPickupLineItem
     */
    public function setSequenceNumber($sequenceNumber)
    {
        $this->__set('SequenceNumber', $sequenceNumber);
        $this->SequenceNumber = $sequenceNumber;
        return $this;
    }
    
    /**
     * Returns Identifies the line item, to match reply line with request line.
     *
     * @return nonNegativeInteger
     */
    public function getSequenceNumber()
    {
        return $this->SequenceNumber;
    }
    
    /**
     * Set Destination
     *
     * @param Address $destination
     * @return FreightPickupLineItem
     */
    public function setDestination(Address $destination)
    {
        $this->__set('Destination', $destination);
        $this->Destination = $destination;
        return $this;
    }
    
    /**
     * Returns Set Destination
     *
     * @return Address
     */
    public function getDestination()
    {
        return $this->Destination;
    }
    
    /**
     * Set Packaging
     *
     * @param \FedEx\PickupService\SimpleType\PhysicalPackagingType|string $packaging
     * @return FreightPickupLineItem
     */
    public function setPackaging($packaging)
    {
        $this->__set('Packaging', $packaging);
        $this->Packaging = $packaging;
        return $this;
    }
    
    /**
     * Returns Set Packaging
     *
     * @return \FedEx\PickupService\SimpleType\PhysicalPackagingType|string
     */
    public function getPackaging()
    {
        return $this->Packaging;
    }
    
    /**
     * Set Pieces
     *
     * @param int $pieces
     * @return FreightPickupLineItem
     */
    public function setPieces($pieces)
    {
        $this->__set('Pieces', $pieces);
        $this->Pieces = $pieces;
        return $this;
    }
    
    /**
     * Returns Set Pieces
     *
     * @return int
     */
    public function getPieces()
    {
        return $this->Pieces;
    }
    
    /**
     * Set Weight
     *
     * @param Weight $weight
     * @return FreightPickupLineItem
     */
    public function setWeight(Weight $weight)
    {
        $this->__set('Weight', $weight);
        $this->Weight = $weight;
        return $this;
    }
    
    /**
     * Returns Set Weight
     *
     * @return Weight
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    
    /**
     * Set TotalHandlingUnits
     *
     * @param int $totalHandlingUnits
     * @return FreightPickupLineItem
     */
    public function setTotalHandlingUnits($totalHandlingUnits)
    {
        $this->__set('TotalHandlingUnits', $totalHandlingUnits);
        $this->TotalHandlingUnits = $totalHandlingUnits;
        return $this;
    }
    
    /**
     * Returns Set TotalHandlingUnits
     *
     * @return int
     */
    public function getTotalHandlingUnits()
    {
        return $this->TotalHandlingUnits;
    }
    
    /**
     * Set PurchaseOrderNumber
     *
     * @param string $purchaseOrderNumber
     * @return FreightPickupLineItem
     */
    public function setPurchaseOrderNumber($purchaseOrderNumber)
    {
        $this->__set('PurchaseOrderNumber', $purchaseOrderNumber);
        $this->PurchaseOrderNumber = $purchaseOrderNumber;
        return $this;
    }
    
    /**
     * Returns Set PurchaseOrderNumber
     *
     * @return string
     */
    public function getPurchaseOrderNumber()
    {
        return $this->PurchaseOrderNumber;
    }
    
    /**
     * Set JustOneMore
     *
     * @param boolean $justOneMore
     * @return FreightPickupLineItem
     */
    public function setJustOneMore($justOneMore)
    {
        $this->__set('JustOneMore', $justOneMore);
        $this->JustOneMore = $justOneMore;
        return $this;
    }
    
    /**
     * Returns Set JustOneMore
     *
     * @return boolean
     */
    public function getJustOneMore()
    {
        return $this->JustOneMore;
    }
    
    /**
     * Set SpecialServicesRequested
     *
     * @param ShipmentSpecialServicesRequested $specialServicesRequested
     * @return FreightPickupLineItem
     */
    public function setSpecialServicesRequested(ShipmentSpecialServicesRequested $specialServicesRequested)
    {
        $this->__set('SpecialServicesRequested', $specialServicesRequested);
        $this->SpecialServicesRequested = $specialServicesRequested;
        return $this;
    }
    
    /**
     * Returns Set SpecialServicesRequested
     *
     * @return ShipmentSpecialServicesRequested
     */
    public function getSpecialServicesRequested()
    {
        return $this->SpecialServicesRequested;
    }
    
    /**
     * Set Description
     *
     * @param string $description
     * @return FreightPickupLineItem
     */
    public function setDescription($description)
    {
        $this->__set('Description', $description);
        $this->Description = $description;
        return $this;
    }
    
    /**
     * Returns Set Description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }
    

    
}