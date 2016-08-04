<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specification for services performed during non-business hours and/or days.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class NonBusinessTimeDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'PersonDays' => 'nonNegativeInteger',
'PersonHours' => 'nonNegativeInteger',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'NonBusinessTimeDetail';

        
    /**
     * @var nonNegativeInteger
     */
    public $PersonDays;

        
    /**
     * @var nonNegativeInteger
     */
    public $PersonHours;



    /**
     * Total number of person days for full non-business days.
     *
     * @param nonNegativeInteger $personDays
     * @return NonBusinessTimeDetail
     */
    public function setPersonDays($personDays)
    {
        $this->__set('PersonDays', $personDays);
        $this->PersonDays = $personDays;
        return $this;
    }
    
    /**
     * Returns Total number of person days for full non-business days.
     *
     * @return nonNegativeInteger
     */
    public function getPersonDays()
    {
        return $this->PersonDays;
    }
    
    /**
     * Total number of person hours (whole or partial hours) for non-business hours.
     *
     * @param nonNegativeInteger $personHours
     * @return NonBusinessTimeDetail
     */
    public function setPersonHours($personHours)
    {
        $this->__set('PersonHours', $personHours);
        $this->PersonHours = $personHours;
        return $this;
    }
    
    /**
     * Returns Total number of person hours (whole or partial hours) for non-business hours.
     *
     * @return nonNegativeInteger
     */
    public function getPersonHours()
    {
        return $this->PersonHours;
    }
    

    
}