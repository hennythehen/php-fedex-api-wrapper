<?php
namespace FedEx\LocationsService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Holiday
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Locations Service
 */
class Holiday
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Name' => 'string',
'Date' => 'date',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'Holiday';

        
    /**
     * @var string
     */
    public $Name;

        
    /**
     * @var date
     */
    public $Date;



    /**
     * Set Name
     *
     * @param string $name
     * @return Holiday
     */
    public function setName($name)
    {
        $this->__set('Name', $name);
        $this->Name = $name;
        return $this;
    }
    
    /**
     * Returns Set Name
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }
    
    /**
     * Set Date
     *
     * @param date $date
     * @return Holiday
     */
    public function setDate($date)
    {
        $this->__set('Date', $date);
        $this->Date = $date;
        return $this;
    }
    
    /**
     * Returns Set Date
     *
     * @return date
     */
    public function getDate()
    {
        return $this->Date;
    }
    

    
}