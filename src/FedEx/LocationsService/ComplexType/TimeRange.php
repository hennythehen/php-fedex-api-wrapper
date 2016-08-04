<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TimeRange
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class TimeRange
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Begins' => 'time',
'Ends' => 'time',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TimeRange';

        
    /**
     * @var time
     */
    public $Begins;

        
    /**
     * @var time
     */
    public $Ends;



    /**
     * Set Begins
     *
     * @param time $begins
     * @return TimeRange
     */
    public function setBegins(time $begins)
    {
        $this->__set('Begins', $begins);
        $this->Begins = $begins;
        return $this;
    }
    
    /**
     * Returns Set Begins
     *
     * @return time
     */
    public function getBegins()
    {
        return $this->Begins;
    }
    
    /**
     * Set Ends
     *
     * @param time $ends
     * @return TimeRange
     */
    public function setEnds(time $ends)
    {
        $this->__set('Ends', $ends);
        $this->Ends = $ends;
        return $this;
    }
    
    /**
     * Returns Set Ends
     *
     * @return time
     */
    public function getEnds()
    {
        return $this->Ends;
    }
    

    
}