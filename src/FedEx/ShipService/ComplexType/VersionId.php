<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Identifies the version/level of a service operation expected by a caller (in each request) and performed by the callee (in each reply).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class VersionId
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'ServiceId' => 'string',
'Major' => 'int',
'Intermediate' => 'int',
'Minor' => 'int',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'VersionId';

        
    /**
     * @var string
     */
    public $ServiceId;

        
    /**
     * @var int
     */
    public $Major;

        
    /**
     * @var int
     */
    public $Intermediate;

        
    /**
     * @var int
     */
    public $Minor;



    /**
     * Identifies a system or sub-system which performs an operation.
     *
     * @param string $serviceId
     * @return VersionId
     */
    public function setServiceId($serviceId)
    {
        $this->__set('ServiceId', $serviceId);
        $this->ServiceId = $serviceId;
        return $this;
    }
    
    /**
     * Returns Identifies a system or sub-system which performs an operation.
     *
     * @return string
     */
    public function getServiceId()
    {
        return $this->ServiceId;
    }
    
    /**
     * Identifies the service business level.
     *
     * @param int $major
     * @return VersionId
     */
    public function setMajor($major)
    {
        $this->__set('Major', $major);
        $this->Major = $major;
        return $this;
    }
    
    /**
     * Returns Identifies the service business level.
     *
     * @return int
     */
    public function getMajor()
    {
        return $this->Major;
    }
    
    /**
     * Identifies the service interface level.
     *
     * @param int $intermediate
     * @return VersionId
     */
    public function setIntermediate($intermediate)
    {
        $this->__set('Intermediate', $intermediate);
        $this->Intermediate = $intermediate;
        return $this;
    }
    
    /**
     * Returns Identifies the service interface level.
     *
     * @return int
     */
    public function getIntermediate()
    {
        return $this->Intermediate;
    }
    
    /**
     * Identifies the service code level.
     *
     * @param int $minor
     * @return VersionId
     */
    public function setMinor($minor)
    {
        $this->__set('Minor', $minor);
        $this->Minor = $minor;
        return $this;
    }
    
    /**
     * Returns Identifies the service code level.
     *
     * @return int
     */
    public function getMinor()
    {
        return $this->Minor;
    }
    

    
}