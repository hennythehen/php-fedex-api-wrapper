<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ShipmentAuthorizationDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ShipmentAuthorizationDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'AccountNumber' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShipmentAuthorizationDetail';

        
    /**
     * @var string
     */
    public $AccountNumber;



    /**
     * Set AccountNumber
     *
     * @param string $accountNumber
     * @return ShipmentAuthorizationDetail
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