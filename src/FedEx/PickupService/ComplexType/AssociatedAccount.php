<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * AssociatedAccount
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class AssociatedAccount
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Type' => 'AssociatedAccountNumberType',
'AccountNumber' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'AssociatedAccount';

        
    /**
     * @var \FedEx\PickupService\SimpleType\AssociatedAccountNumberType|string
     */
    public $Type;

        
    /**
     * @var string
     */
    public $AccountNumber;



    /**
     * Set Type
     *
     * @param \FedEx\PickupService\SimpleType\AssociatedAccountNumberType|string $type
     * @return AssociatedAccount
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
     * @return \FedEx\PickupService\SimpleType\AssociatedAccountNumberType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Set AccountNumber
     *
     * @param string $accountNumber
     * @return AssociatedAccount
     */
    public function setAccountNumber($accountNumber)
    {
        $this->__set('AccountNumber', $accountNumber);
        $this->AccountNumber = $accountNumber;
        return $this;
    }
    
    /**
     * Returns Set AccountNumber
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }
    

    
}