<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * CompletedHoldAtLocationDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CompletedHoldAtLocationDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'HoldingLocation' => 'ContactAndAddress',
'HoldingLocationType' => 'FedExLocationType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CompletedHoldAtLocationDetail';

        
    /**
     * @var ContactAndAddress
     */
    public $HoldingLocation;

        
    /**
     * @var \FedEx\ShipService\SimpleType\FedExLocationType|string
     */
    public $HoldingLocationType;



    /**
     * Identifies the branded location name, the hold at location phone number and the address of the location.
     *
     * @param ContactAndAddress $holdingLocation
     * @return CompletedHoldAtLocationDetail
     */
    public function setHoldingLocation(ContactAndAddress $holdingLocation)
    {
        $this->__set('HoldingLocation', $holdingLocation);
        $this->HoldingLocation = $holdingLocation;
        return $this;
    }
    
    /**
     * Returns Identifies the branded location name, the hold at location phone number and the address of the location.
     *
     * @return ContactAndAddress
     */
    public function getHoldingLocation()
    {
        return $this->HoldingLocation;
    }
    
    /**
     * Identifies the type of FedEx location.
     *
     * @param \FedEx\ShipService\SimpleType\FedExLocationType|string $holdingLocationType
     * @return CompletedHoldAtLocationDetail
     */
    public function setHoldingLocationType($holdingLocationType)
    {
        $this->__set('HoldingLocationType', $holdingLocationType);
        $this->HoldingLocationType = $holdingLocationType;
        return $this;
    }
    
    /**
     * Returns Identifies the type of FedEx location.
     *
     * @return \FedEx\ShipService\SimpleType\FedExLocationType|string
     */
    public function getHoldingLocationType()
    {
        return $this->HoldingLocationType;
    }
    

    
}