<?php
namespace FedEx\TrackService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TrackServiceDescriptionDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Track Service
 */
class TrackServiceDescriptionDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Type' => 'ServiceType',
'Description' => 'string',
'ShortDescription' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TrackServiceDescriptionDetail';

        
    /**
     * @var \FedEx\TrackService\SimpleType\ServiceType|string
     */
    public $Type;

        
    /**
     * @var string
     */
    public $Description;

        
    /**
     * @var string
     */
    public $ShortDescription;



    /**
     * Set Type
     *
     * @param \FedEx\TrackService\SimpleType\ServiceType|string $type
     * @return TrackServiceDescriptionDetail
     */
    public function setType($type)
    {
        $this->__set('Type', $type);
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns Set Type
     *
     * @return \FedEx\TrackService\SimpleType\ServiceType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Set Description
     *
     * @param string $description
     * @return TrackServiceDescriptionDetail
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
    
    /**
     * Specifies a shorter description for the service that is calculated per the service code.
     *
     * @param string $shortDescription
     * @return TrackServiceDescriptionDetail
     */
    public function setShortDescription($shortDescription)
    {
        $this->__set('ShortDescription', $shortDescription);
        $this->ShortDescription = $shortDescription;
        return $this;
    }
    
    /**
     * Returns Specifies a shorter description for the service that is calculated per the service code.
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->ShortDescription;
    }
    

    
}