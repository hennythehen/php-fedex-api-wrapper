<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DocTabContentZone001
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class DocTabContentZone001
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'DocTabZoneSpecifications' => 'DocTabZoneSpecification',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'DocTabContentZone001';

        
    /**
     * @var DocTabZoneSpecification[]
     */
    public $DocTabZoneSpecifications = array();



    /**
     * Set DocTabZoneSpecifications
     *
     * @param DocTabZoneSpecification[] $docTabZoneSpecifications
     * @return DocTabContentZone001
     */
    public function setDocTabZoneSpecifications(array $docTabZoneSpecifications)
    {
        $this->__set('DocTabZoneSpecifications', $docTabZoneSpecifications);
        $this->DocTabZoneSpecifications = $docTabZoneSpecifications;
        return $this;
    }
    
    /**
     * Returns Set DocTabZoneSpecifications
     *
     * @return DocTabZoneSpecification[]
     */
    public function getDocTabZoneSpecifications()
    {
        return $this->DocTabZoneSpecifications;
    }
    

    
}