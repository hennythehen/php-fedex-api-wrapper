<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * PieceCountVerificationDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class PieceCountVerificationDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'CountLocationType' => 'PieceCountLocationType',
'Count' => 'nonNegativeInteger',
'Description' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PieceCountVerificationDetail';

        
    /**
     * @var \FedEx\TrackService\SimpleType\PieceCountLocationType|string
     */
    public $CountLocationType;

        
    /**
     * @var nonNegativeInteger
     */
    public $Count;

        
    /**
     * @var string
     */
    public $Description;



    /**
     * Set CountLocationType
     *
     * @param \FedEx\TrackService\SimpleType\PieceCountLocationType|string $countLocationType
     * @return PieceCountVerificationDetail
     */
    public function setCountLocationType($countLocationType)
    {
        $this->__set('CountLocationType', $countLocationType);
        $this->CountLocationType = $countLocationType;
        return $this;
    }
    
    /**
     * Returns Set CountLocationType
     *
     * @return \FedEx\TrackService\SimpleType\PieceCountLocationType|string
     */
    public function getCountLocationType()
    {
        return $this->CountLocationType;
    }
    
    /**
     * Set Count
     *
     * @param nonNegativeInteger $count
     * @return PieceCountVerificationDetail
     */
    public function setCount($count)
    {
        $this->__set('Count', $count);
        $this->Count = $count;
        return $this;
    }
    
    /**
     * Returns Set Count
     *
     * @return nonNegativeInteger
     */
    public function getCount()
    {
        return $this->Count;
    }
    
    /**
     * Set Description
     *
     * @param string $description
     * @return PieceCountVerificationDetail
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