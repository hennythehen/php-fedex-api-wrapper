<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This information describes the kind of pending shipment being requested.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class PendingShipmentDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Type' => 'PendingShipmentType',
'ExpirationDate' => 'date',
'EmailLabelDetail' => 'EMailLabelDetail',
'ProcessingOptions' => 'PendingShipmentProcessingOptionsRequested',
'RecommendedDocumentSpecification' => 'RecommendedDocumentSpecification',
'DocumentReferences' => 'UploadDocumentReferenceDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PendingShipmentDetail';

        
    /**
     * @var \FedEx\ShipService\SimpleType\PendingShipmentType|string
     */
    public $Type;

        
    /**
     * @var date
     */
    public $ExpirationDate;

        
    /**
     * @var EMailLabelDetail
     */
    public $EmailLabelDetail;

        
    /**
     * @var PendingShipmentProcessingOptionsRequested
     */
    public $ProcessingOptions;

        
    /**
     * @var RecommendedDocumentSpecification
     */
    public $RecommendedDocumentSpecification;

        
    /**
     * @var UploadDocumentReferenceDetail[]
     */
    public $DocumentReferences = array();



    /**
     * Identifies the type of FedEx pending shipment
     *
     * @param \FedEx\ShipService\SimpleType\PendingShipmentType|string $type
     * @return PendingShipmentDetail
     */
    public function setType($type)
    {
        $this->__set('Type', $type);
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns Identifies the type of FedEx pending shipment
     *
     * @return \FedEx\ShipService\SimpleType\PendingShipmentType|string
     */
    public function getType()
    {
        return $this->Type;
    }
    
    /**
     * Date after which the pending shipment will no longer be available for completion.
     *
     * @param date $expirationDate
     * @return PendingShipmentDetail
     */
    public function setExpirationDate($expirationDate)
    {
        $this->__set('ExpirationDate', $expirationDate);
        $this->ExpirationDate = $expirationDate;
        return $this;
    }
    
    /**
     * Returns Date after which the pending shipment will no longer be available for completion.
     *
     * @return date
     */
    public function getExpirationDate()
    {
        return $this->ExpirationDate;
    }
    
    /**
     * Only used with type of EMAIL.
     *
     * @param EMailLabelDetail $emailLabelDetail
     * @return PendingShipmentDetail
     */
    public function setEmailLabelDetail(EMailLabelDetail $emailLabelDetail)
    {
        $this->__set('EmailLabelDetail', $emailLabelDetail);
        $this->EmailLabelDetail = $emailLabelDetail;
        return $this;
    }
    
    /**
     * Returns Only used with type of EMAIL.
     *
     * @return EMailLabelDetail
     */
    public function getEmailLabelDetail()
    {
        return $this->EmailLabelDetail;
    }
    
    /**
     * Set ProcessingOptions
     *
     * @param PendingShipmentProcessingOptionsRequested $processingOptions
     * @return PendingShipmentDetail
     */
    public function setProcessingOptions(PendingShipmentProcessingOptionsRequested $processingOptions)
    {
        $this->__set('ProcessingOptions', $processingOptions);
        $this->ProcessingOptions = $processingOptions;
        return $this;
    }
    
    /**
     * Returns Set ProcessingOptions
     *
     * @return PendingShipmentProcessingOptionsRequested
     */
    public function getProcessingOptions()
    {
        return $this->ProcessingOptions;
    }
    
    /**
     * These are documents that are recommended to be included with the shipment.
     *
     * @param RecommendedDocumentSpecification $recommendedDocumentSpecification
     * @return PendingShipmentDetail
     */
    public function setRecommendedDocumentSpecification(RecommendedDocumentSpecification $recommendedDocumentSpecification)
    {
        $this->__set('RecommendedDocumentSpecification', $recommendedDocumentSpecification);
        $this->RecommendedDocumentSpecification = $recommendedDocumentSpecification;
        return $this;
    }
    
    /**
     * Returns These are documents that are recommended to be included with the shipment.
     *
     * @return RecommendedDocumentSpecification
     */
    public function getRecommendedDocumentSpecification()
    {
        return $this->RecommendedDocumentSpecification;
    }
    
    /**
     * Upload document details provided by the initator of the shipment.
     *
     * @param UploadDocumentReferenceDetail[] $documentReferences
     * @return PendingShipmentDetail
     */
    public function setDocumentReferences(array $documentReferences)
    {
        $this->__set('DocumentReferences', $documentReferences);
        $this->DocumentReferences = $documentReferences;
        return $this;
    }
    
    /**
     * Returns Upload document details provided by the initator of the shipment.
     *
     * @return UploadDocumentReferenceDetail[]
     */
    public function getDocumentReferences()
    {
        return $this->DocumentReferences;
    }
    

    
}