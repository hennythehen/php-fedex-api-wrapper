<?php
namespace FedEx\PickupService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Descriptive data required for a FedEx COD (Collect-On-Delivery) shipment.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Pickup Service
 */
class CodDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'CodCollectionAmount' => 'Money',
'AddTransportationChargesDetail' => 'CodAddTransportationChargesDetail',
'CollectionType' => 'CodCollectionType',
'CodRecipient' => 'Party',
'FinancialInstitutionContactAndAddress' => 'ContactAndAddress',
'RemitToName' => 'string',
'ReferenceIndicator' => 'CodReturnReferenceIndicatorType',
'ReturnTrackingId' => 'TrackingId',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CodDetail';

        
    /**
     * @var Money
     */
    public $CodCollectionAmount;

        
    /**
     * @var CodAddTransportationChargesDetail
     */
    public $AddTransportationChargesDetail;

        
    /**
     * @var \FedEx\PickupService\SimpleType\CodCollectionType|string
     */
    public $CollectionType;

        
    /**
     * @var Party
     */
    public $CodRecipient;

        
    /**
     * @var ContactAndAddress
     */
    public $FinancialInstitutionContactAndAddress;

        
    /**
     * @var string
     */
    public $RemitToName;

        
    /**
     * @var \FedEx\PickupService\SimpleType\CodReturnReferenceIndicatorType|string
     */
    public $ReferenceIndicator;

        
    /**
     * @var TrackingId
     */
    public $ReturnTrackingId;



    /**
     * Set CodCollectionAmount
     *
     * @param Money $codCollectionAmount
     * @return CodDetail
     */
    public function setCodCollectionAmount(Money $codCollectionAmount)
    {
        $this->__set('CodCollectionAmount', $codCollectionAmount);
        $this->CodCollectionAmount = $codCollectionAmount;
        return $this;
    }
    
    /**
     * Returns Set CodCollectionAmount
     *
     * @return Money
     */
    public function getCodCollectionAmount()
    {
        return $this->CodCollectionAmount;
    }
    
    /**
     * Specifies the details of the charges are to be added to the COD collect amount.
     *
     * @param CodAddTransportationChargesDetail $addTransportationChargesDetail
     * @return CodDetail
     */
    public function setAddTransportationChargesDetail(CodAddTransportationChargesDetail $addTransportationChargesDetail)
    {
        $this->__set('AddTransportationChargesDetail', $addTransportationChargesDetail);
        $this->AddTransportationChargesDetail = $addTransportationChargesDetail;
        return $this;
    }
    
    /**
     * Returns Specifies the details of the charges are to be added to the COD collect amount.
     *
     * @return CodAddTransportationChargesDetail
     */
    public function getAddTransportationChargesDetail()
    {
        return $this->AddTransportationChargesDetail;
    }
    
    /**
     * Identifies the type of funds FedEx should collect upon package delivery
     *
     * @param \FedEx\PickupService\SimpleType\CodCollectionType|string $collectionType
     * @return CodDetail
     */
    public function setCollectionType($collectionType)
    {
        $this->__set('CollectionType', $collectionType);
        $this->CollectionType = $collectionType;
        return $this;
    }
    
    /**
     * Returns Identifies the type of funds FedEx should collect upon package delivery
     *
     * @return \FedEx\PickupService\SimpleType\CodCollectionType|string
     */
    public function getCollectionType()
    {
        return $this->CollectionType;
    }
    
    /**
     * For Express this is the descriptive data that is used for the recipient of the FedEx Letter containing the COD payment. For Ground this is the descriptive data for the party to receive the payment that prints the COD receipt.
     *
     * @param Party $codRecipient
     * @return CodDetail
     */
    public function setCodRecipient(Party $codRecipient)
    {
        $this->__set('CodRecipient', $codRecipient);
        $this->CodRecipient = $codRecipient;
        return $this;
    }
    
    /**
     * Returns For Express this is the descriptive data that is used for the recipient of the FedEx Letter containing the COD payment. For Ground this is the descriptive data for the party to receive the payment that prints the COD receipt.
     *
     * @return Party
     */
    public function getCodRecipient()
    {
        return $this->CodRecipient;
    }
    
    /**
     * When the FedEx COD payment type is not CASH, indicates the contact and address of the financial institution used to service the payment of the COD.
     *
     * @param ContactAndAddress $financialInstitutionContactAndAddress
     * @return CodDetail
     */
    public function setFinancialInstitutionContactAndAddress(ContactAndAddress $financialInstitutionContactAndAddress)
    {
        $this->__set('FinancialInstitutionContactAndAddress', $financialInstitutionContactAndAddress);
        $this->FinancialInstitutionContactAndAddress = $financialInstitutionContactAndAddress;
        return $this;
    }
    
    /**
     * Returns When the FedEx COD payment type is not CASH, indicates the contact and address of the financial institution used to service the payment of the COD.
     *
     * @return ContactAndAddress
     */
    public function getFinancialInstitutionContactAndAddress()
    {
        return $this->FinancialInstitutionContactAndAddress;
    }
    
    /**
     * Specifies the name of person or company receiving the secured/unsecured funds payment
     *
     * @param string $remitToName
     * @return CodDetail
     */
    public function setRemitToName($remitToName)
    {
        $this->__set('RemitToName', $remitToName);
        $this->RemitToName = $remitToName;
        return $this;
    }
    
    /**
     * Returns Specifies the name of person or company receiving the secured/unsecured funds payment
     *
     * @return string
     */
    public function getRemitToName()
    {
        return $this->RemitToName;
    }
    
    /**
     * Indicates which type of reference information to include on the COD return shipping label.
     *
     * @param \FedEx\PickupService\SimpleType\CodReturnReferenceIndicatorType|string $referenceIndicator
     * @return CodDetail
     */
    public function setReferenceIndicator($referenceIndicator)
    {
        $this->__set('ReferenceIndicator', $referenceIndicator);
        $this->ReferenceIndicator = $referenceIndicator;
        return $this;
    }
    
    /**
     * Returns Indicates which type of reference information to include on the COD return shipping label.
     *
     * @return \FedEx\PickupService\SimpleType\CodReturnReferenceIndicatorType|string
     */
    public function getReferenceIndicator()
    {
        return $this->ReferenceIndicator;
    }
    
    /**
     * Only used with multi-piece COD shipments sent in multiple transactions. Required on last transaction only.
     *
     * @param TrackingId $returnTrackingId
     * @return CodDetail
     */
    public function setReturnTrackingId(TrackingId $returnTrackingId)
    {
        $this->__set('ReturnTrackingId', $returnTrackingId);
        $this->ReturnTrackingId = $returnTrackingId;
        return $this;
    }
    
    /**
     * Returns Only used with multi-piece COD shipments sent in multiple transactions. Required on last transaction only.
     *
     * @return TrackingId
     */
    public function getReturnTrackingId()
    {
        return $this->ReturnTrackingId;
    }
    

    
}