<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies the information necessary for printing the NAFTA Low Value statement on customs documentation.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class NaftaLowValueStatementDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Role' => 'CustomsRoleType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'NaftaLowValueStatementDetail';

        
    /**
     * @var \FedEx\ShipService\SimpleType\CustomsRoleType|string
     */
    public $Role;



    /**
     * Specifies the NAFTA statement role.
     *
     * @param \FedEx\ShipService\SimpleType\CustomsRoleType|string $role
     * @return NaftaLowValueStatementDetail
     */
    public function setRole($role)
    {
        $this->__set('Role', $role);
        $this->Role = $role;
        return $this;
    }
    
    /**
     * Returns Specifies the NAFTA statement role.
     *
     * @return \FedEx\ShipService\SimpleType\CustomsRoleType|string
     */
    public function getRole()
    {
        return $this->Role;
    }
    

    
}