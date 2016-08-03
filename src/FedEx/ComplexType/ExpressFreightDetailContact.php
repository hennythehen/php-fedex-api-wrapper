<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ExpressFreightDetailContact
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ExpressFreightDetailContact
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Name' => 'string',
'Phone' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ExpressFreightDetailContact';

        
    /**
     * @var string
     */
    public $Name;

        
    /**
     * @var string
     */
    public $Phone;



    /**
     * Set Name
     *
     * @param string $name
     * @return ExpressFreightDetailContact
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
     * Set Phone
     *
     * @param string $phone
     * @return ExpressFreightDetailContact
     */
    public function setPhone($phone)
    {
        $this->__set('Phone', $phone);
        $this->Phone = $phone;
        return $this;
    }
    
    /**
     * Returns Set Phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->Phone;
    }
    

    
}