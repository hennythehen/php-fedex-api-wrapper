<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ReservationAvailabilityDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class ReservationAvailabilityDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Attributes' => 'ReservationAttributesType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ReservationAvailabilityDetail';

        
    /**
     * @var ReservationAttributesType[]
     */
    public $Attributes = array();



    /**
     * Set Attributes
     *
     * @param ReservationAttributesType[] $attributes
     * @return ReservationAvailabilityDetail
     */
    public function setAttributes(array $attributes)
    {
        $this->__set('Attributes', $attributes);
        $this->Attributes = $attributes;
        return $this;
    }
    
    /**
     * Returns Set Attributes
     *
     * @return ReservationAttributesType[]
     */
    public function getAttributes()
    {
        return $this->Attributes;
    }
    

    
}