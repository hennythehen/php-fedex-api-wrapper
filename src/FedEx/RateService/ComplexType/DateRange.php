<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DateRange
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class DateRange
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Begins' => 'date',
'Ends' => 'date',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'DateRange';

        
    /**
     * @var date
     */
    public $Begins;

        
    /**
     * @var date
     */
    public $Ends;



    /**
     * Set Begins
     *
     * @param date $begins
     * @return DateRange
     */
    public function setBegins($begins)
    {
        $this->__set('Begins', $begins);
        $this->Begins = $begins;
        return $this;
    }
    
    /**
     * Returns Set Begins
     *
     * @return date
     */
    public function getBegins()
    {
        return $this->Begins;
    }
    
    /**
     * Set Ends
     *
     * @param date $ends
     * @return DateRange
     */
    public function setEnds($ends)
    {
        $this->__set('Ends', $ends);
        $this->Ends = $ends;
        return $this;
    }
    
    /**
     * Returns Set Ends
     *
     * @return date
     */
    public function getEnds()
    {
        return $this->Ends;
    }
    

    
}