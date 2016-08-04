<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Shipment-level totals of dry ice data across all packages.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class ShipmentDryIceDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'PackageCount' => 'nonNegativeInteger',
'TotalWeight' => 'Weight',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShipmentDryIceDetail';

        
    /**
     * @var nonNegativeInteger
     */
    public $PackageCount;

        
    /**
     * @var Weight
     */
    public $TotalWeight;



    /**
     * Total number of packages in the shipment that contain dry ice.
     *
     * @param nonNegativeInteger $packageCount
     * @return ShipmentDryIceDetail
     */
    public function setPackageCount($packageCount)
    {
        $this->__set('PackageCount', $packageCount);
        $this->PackageCount = $packageCount;
        return $this;
    }
    
    /**
     * Returns Total number of packages in the shipment that contain dry ice.
     *
     * @return nonNegativeInteger
     */
    public function getPackageCount()
    {
        return $this->PackageCount;
    }
    
    /**
     * Total shipment dry ice weight for all packages.
     *
     * @param Weight $totalWeight
     * @return ShipmentDryIceDetail
     */
    public function setTotalWeight(Weight $totalWeight)
    {
        $this->__set('TotalWeight', $totalWeight);
        $this->TotalWeight = $totalWeight;
        return $this;
    }
    
    /**
     * Returns Total shipment dry ice weight for all packages.
     *
     * @return Weight
     */
    public function getTotalWeight()
    {
        return $this->TotalWeight;
    }
    

    
}