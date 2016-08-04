<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * TransactionDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class TransactionDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'CustomerTransactionId' => 'string',
'Localization' => 'Localization',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'TransactionDetail';

        
    /**
     * @var string
     */
    public $CustomerTransactionId;

        
    /**
     * @var Localization
     */
    public $Localization;



    /**
     * Free form text to be echoed back in the reply. Used to match requests and replies.
     *
     * @param string $customerTransactionId
     * @return TransactionDetail
     */
    public function setCustomerTransactionId($customerTransactionId)
    {
        $this->__set('CustomerTransactionId', $customerTransactionId);
        $this->CustomerTransactionId = $customerTransactionId;
        return $this;
    }
    
    /**
     * Returns Free form text to be echoed back in the reply. Used to match requests and replies.
     *
     * @return string
     */
    public function getCustomerTransactionId()
    {
        return $this->CustomerTransactionId;
    }
    
    /**
     * Governs data payload language/translations (contrasted with ClientDetail.localization, which governs Notification.localizedMessage language selection).
     *
     * @param Localization $localization
     * @return TransactionDetail
     */
    public function setLocalization(Localization $localization)
    {
        $this->__set('Localization', $localization);
        $this->Localization = $localization;
        return $this;
    }
    
    /**
     * Returns Governs data payload language/translations (contrasted with ClientDetail.localization, which governs Notification.localizedMessage language selection).
     *
     * @return Localization
     */
    public function getLocalization()
    {
        return $this->Localization;
    }
    

    
}