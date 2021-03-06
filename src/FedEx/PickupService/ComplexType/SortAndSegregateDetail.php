<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specification for sorting and/or segregating performed on shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class SortAndSegregateDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'PieceCount' => 'nonNegativeInteger',
'Weight' => 'Weight',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'SortAndSegregateDetail';

        
    /**
     * @var nonNegativeInteger
     */
    public $PieceCount;

        
    /**
     * @var Weight
     */
    public $Weight;



    /**
     * Number of pieces or packages to be sorted/segregated
     *
     * @param nonNegativeInteger $pieceCount
     * @return SortAndSegregateDetail
     */
    public function setPieceCount($pieceCount)
    {
        $this->__set('PieceCount', $pieceCount);
        $this->PieceCount = $pieceCount;
        return $this;
    }
    
    /**
     * Returns Number of pieces or packages to be sorted/segregated
     *
     * @return nonNegativeInteger
     */
    public function getPieceCount()
    {
        return $this->PieceCount;
    }
    
    /**
     * Total weight of pieces or packages to be sorted/segregated
     *
     * @param Weight $weight
     * @return SortAndSegregateDetail
     */
    public function setWeight(Weight $weight)
    {
        $this->__set('Weight', $weight);
        $this->Weight = $weight;
        return $this;
    }
    
    /**
     * Returns Total weight of pieces or packages to be sorted/segregated
     *
     * @return Weight
     */
    public function getWeight()
    {
        return $this->Weight;
    }
    

    
}