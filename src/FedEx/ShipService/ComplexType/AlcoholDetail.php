<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies details for a package containing alcohol
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class AlcoholDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'RecipientType' => 'AlcoholRecipientType',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'AlcoholDetail';

        
    /**
     * @var \FedEx\ShipService\SimpleType\AlcoholRecipientType|string
     */
    public $RecipientType;



    /**
     * The license type that the recipient of the alcohol package.
     *
     * @param \FedEx\ShipService\SimpleType\AlcoholRecipientType|string $recipientType
     * @return AlcoholDetail
     */
    public function setRecipientType($recipientType)
    {
        $this->__set('RecipientType', $recipientType);
        $this->RecipientType = $recipientType;
        return $this;
    }
    
    /**
     * Returns The license type that the recipient of the alcohol package.
     *
     * @return \FedEx\ShipService\SimpleType\AlcoholRecipientType|string
     */
    public function getRecipientType()
    {
        return $this->RecipientType;
    }
    

    
}