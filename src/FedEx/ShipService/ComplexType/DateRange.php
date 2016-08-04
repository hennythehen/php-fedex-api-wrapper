<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DateRange
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
     * The beginning date in a date range.
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
     * Returns The beginning date in a date range.
     *
     * @return date
     */
    public function getBegins()
    {
        return $this->Begins;
    }
    
    /**
     * The end date in a date range.
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
     * Returns The end date in a date range.
     *
     * @return date
     */
    public function getEnds()
    {
        return $this->Ends;
    }
    

    
}