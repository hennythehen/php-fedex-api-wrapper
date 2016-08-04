<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PickupShipmentAttributes
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class PickupShipmentAttributes
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'ServiceType' => 'ServiceType',
'PackagingType' => 'PackagingType',
'Dimensions' => 'Dimensions',
'Weight' => 'Weight',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PickupShipmentAttributes';

        
    /**
     * @var \FedEx\PickupService\SimpleType\ServiceType|string
     */
    public $ServiceType;

        
    /**
     * @var \FedEx\PickupService\SimpleType\PackagingType|string
     */
    public $PackagingType;

        
    /**
     * @var Dimensions
     */
    public $Dimensions;

        
    /**
     * @var Weight
     */
    public $Weight;



    /**
     * Set ServiceType
     *
     * @param \FedEx\PickupService\SimpleType\ServiceType|string $serviceType
     * @return PickupShipmentAttributes
     */
    public function setServiceType($serviceType)
    {
        $this->__set('ServiceType', $serviceType);
        $this->ServiceType = $serviceType;
        return $this;
    }
    
    /**
     * Returns Set ServiceType
     *
     * @return \FedEx\PickupService\SimpleType\ServiceType|string
     */
    public function getServiceType()
    {
        return $this->ServiceType;
    }
    
    /**
     * Set PackagingType
     *
     * @param \FedEx\PickupService\SimpleType\PackagingType|string $packagingType
     * @return PickupShipmentAttributes
     */
    public function setPackagingType($packagingType)
    {
        $this->__set('PackagingType', $packagingType);
        $this->PackagingType = $packagingType;
        return $this;
    }
    
    /**
     * Returns Set PackagingType
     *
     * @return \FedEx\PickupService\SimpleType\PackagingType|string
     */
    public function getPackagingType()
    {
        return $this->PackagingType;
    }
    
    /**
     * Set Dimensions
     *
     * @param Dimensions $dimensions
     * @return PickupShipmentAttributes
     */
    public function setDimensions(Dimensions $dimensions)
    {
        $this->__set('Dimensions', $dimensions);
        $this->Dimensions = $dimensions;
        return $this;
    }
    
    /**
     * Returns Set Dimensions
     *
     * @return Dimensions
     */
    public function getDimensions()
    {
        return $this->Dimensions;
    }
    
    /**
     * Set Weight
     *
     * @param Weight $weight
     * @return PickupShipmentAttributes
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
    

    
}