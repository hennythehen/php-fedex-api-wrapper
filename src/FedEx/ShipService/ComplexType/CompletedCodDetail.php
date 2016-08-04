<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the results of processing for the COD special service.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CompletedCodDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'CollectionAmount' => 'Money',
'AdjustmentType' => 'CodAdjustmentType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CompletedCodDetail';

        
    /**
     * @var Money
     */
    public $CollectionAmount;

        
    /**
     * @var \FedEx\ShipService\SimpleType\CodAdjustmentType|string
     */
    public $AdjustmentType;



    /**
     * Set CollectionAmount
     *
     * @param Money $collectionAmount
     * @return CompletedCodDetail
     */
    public function setCollectionAmount(Money $collectionAmount)
    {
        $this->__set('CollectionAmount', $collectionAmount);
        $this->CollectionAmount = $collectionAmount;
        return $this;
    }
    
    /**
     * Returns Set CollectionAmount
     *
     * @return Money
     */
    public function getCollectionAmount()
    {
        return $this->CollectionAmount;
    }
    
    /**
     * Set AdjustmentType
     *
     * @param \FedEx\ShipService\SimpleType\CodAdjustmentType|string $adjustmentType
     * @return CompletedCodDetail
     */
    public function setAdjustmentType($adjustmentType)
    {
        $this->__set('AdjustmentType', $adjustmentType);
        $this->AdjustmentType = $adjustmentType;
        return $this;
    }
    
    /**
     * Returns Set AdjustmentType
     *
     * @return \FedEx\ShipService\SimpleType\CodAdjustmentType|string
     */
    public function getAdjustmentType()
    {
        return $this->AdjustmentType;
    }
    

    
}