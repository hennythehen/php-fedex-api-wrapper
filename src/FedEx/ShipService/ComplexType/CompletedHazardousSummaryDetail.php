<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CompletedHazardousSummaryDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CompletedHazardousSummaryDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'SmallQuantityExceptionPackageCount' => 'nonNegativeInteger',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CompletedHazardousSummaryDetail';

        
    /**
     * @var nonNegativeInteger
     */
    public $SmallQuantityExceptionPackageCount;



    /**
     * Specifies the total number of packages containing hazardous commodities in small exceptions.
     *
     * @param nonNegativeInteger $smallQuantityExceptionPackageCount
     * @return CompletedHazardousSummaryDetail
     */
    public function setSmallQuantityExceptionPackageCount($smallQuantityExceptionPackageCount)
    {
        $this->__set('SmallQuantityExceptionPackageCount', $smallQuantityExceptionPackageCount);
        $this->SmallQuantityExceptionPackageCount = $smallQuantityExceptionPackageCount;
        return $this;
    }
    
    /**
     * Returns Specifies the total number of packages containing hazardous commodities in small exceptions.
     *
     * @return nonNegativeInteger
     */
    public function getSmallQuantityExceptionPackageCount()
    {
        return $this->SmallQuantityExceptionPackageCount;
    }
    

    
}