<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Specifies an individual recipient of e-mailed shipping document(s).
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ShippingDocumentEMailRecipient
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'RecipientType' => 'EMailNotificationRecipientType',
'Address' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShippingDocumentEMailRecipient';

        
    /**
     * @var \FedEx\RateService\SimpleType\EMailNotificationRecipientType|string
     */
    public $RecipientType;

        
    /**
     * @var string
     */
    public $Address;



    /**
     * Identifies the relationship of this recipient in the shipment.
     *
     * @param \FedEx\RateService\SimpleType\EMailNotificationRecipientType|string $recipientType
     * @return ShippingDocumentEMailRecipient
     */
    public function setRecipientType($recipientType)
    {
        $this->__set('RecipientType', $recipientType);
        $this->RecipientType = $recipientType;
        return $this;
    }
    
    /**
     * Returns Identifies the relationship of this recipient in the shipment.
     *
     * @return \FedEx\RateService\SimpleType\EMailNotificationRecipientType|string
     */
    public function getRecipientType()
    {
        return $this->RecipientType;
    }
    
    /**
     * Address to which the document is to be sent.
     *
     * @param string $address
     * @return ShippingDocumentEMailRecipient
     */
    public function setAddress($address)
    {
        $this->__set('Address', $address);
        $this->Address = $address;
        return $this;
    }
    
    /**
     * Returns Address to which the document is to be sent.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->Address;
    }
    

    
}