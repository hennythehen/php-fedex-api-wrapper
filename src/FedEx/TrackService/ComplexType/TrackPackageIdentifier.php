<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * The type and value of the package identifier that is to be used to retrieve the tracking information for a package.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackPackageIdentifier
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Type' => 'TrackIdentifierType',
'Value' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TrackPackageIdentifier';

        
    /**
     * @var \FedEx\TrackService\SimpleType\TrackIdentifierType|string
     */
    public $Type;

        
    /**
     * @var string
     */
    public $Value;



    /**
     * The type of the Value to be used to retrieve tracking information for a package (e.g. SHIPPER_REFERENCE, PURCHASE_ORDER, TRACKING_NUMBER_OR_DOORTAG, etc..) .
     *
     * @param \FedEx\TrackService\SimpleType\TrackIdentifierType|string $type
     * @return TrackPackageIdentifier
     */
    public function setType($type)
    {
        $this->__set('Type', $type);
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns The type of the Value to be used to retrieve tracking information for a package (e.g. SHIPPER_REFERENCE, PURCHASE_ORDER, TRACKING_NUMBER_OR_DOORTAG, etc..) .
     *
     * @return \FedEx\TrackService\SimpleType\TrackIdentifierType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * The value to be used to retrieve tracking information for a package.
     *
     * @param string $value
     * @return TrackPackageIdentifier
     */
    public function setValue($value)
    {
        $this->__set('Value', $value);
        $this->Value = $value;
        return $this;
    }
    
    /**
     * Returns The value to be used to retrieve tracking information for a package.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->Value;
    }
    

    
}