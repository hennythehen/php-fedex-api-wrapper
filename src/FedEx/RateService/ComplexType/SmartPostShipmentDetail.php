<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data required for shipments handled under the SMART_POST and GROUND_SMART_POST service types.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class SmartPostShipmentDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'ProcessingOptionsRequested' => 'SmartPostShipmentProcessingOptionsRequested',
'Indicia' => 'SmartPostIndiciaType',
'AncillaryEndorsement' => 'SmartPostAncillaryEndorsementType',
'HubId' => 'string',
'CustomerManifestId' => 'string',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'SmartPostShipmentDetail';

        
    /**
     * @var SmartPostShipmentProcessingOptionsRequested
     */
    public $ProcessingOptionsRequested;

        
    /**
     * @var \FedEx\RateService\SimpleType\SmartPostIndiciaType|string
     */
    public $Indicia;

        
    /**
     * @var \FedEx\RateService\SimpleType\SmartPostAncillaryEndorsementType|string
     */
    public $AncillaryEndorsement;

        
    /**
     * @var string
     */
    public $HubId;

        
    /**
     * @var string
     */
    public $CustomerManifestId;



    /**
     * Set ProcessingOptionsRequested
     *
     * @param SmartPostShipmentProcessingOptionsRequested $processingOptionsRequested
     * @return SmartPostShipmentDetail
     */
    public function setProcessingOptionsRequested(SmartPostShipmentProcessingOptionsRequested $processingOptionsRequested)
    {
        $this->__set('ProcessingOptionsRequested', $processingOptionsRequested);
        $this->ProcessingOptionsRequested = $processingOptionsRequested;
        return $this;
    }
    
    /**
     * Returns Set ProcessingOptionsRequested
     *
     * @return SmartPostShipmentProcessingOptionsRequested
     */
    public function getProcessingOptionsRequested()
    {
        return $this->ProcessingOptionsRequested;
    }
    
    /**
     * Set Indicia
     *
     * @param \FedEx\RateService\SimpleType\SmartPostIndiciaType|string $indicia
     * @return SmartPostShipmentDetail
     */
    public function setIndicia($indicia)
    {
        $this->__set('Indicia', $indicia);
        $this->Indicia = $indicia;
        return $this;
    }
    
    /**
     * Returns Set Indicia
     *
     * @return \FedEx\RateService\SimpleType\SmartPostIndiciaType|string
     */
    public function getIndicia()
    {
        return $this->Indicia;
    }
    
    /**
     * Set AncillaryEndorsement
     *
     * @param \FedEx\RateService\SimpleType\SmartPostAncillaryEndorsementType|string $ancillaryEndorsement
     * @return SmartPostShipmentDetail
     */
    public function setAncillaryEndorsement($ancillaryEndorsement)
    {
        $this->__set('AncillaryEndorsement', $ancillaryEndorsement);
        $this->AncillaryEndorsement = $ancillaryEndorsement;
        return $this;
    }
    
    /**
     * Returns Set AncillaryEndorsement
     *
     * @return \FedEx\RateService\SimpleType\SmartPostAncillaryEndorsementType|string
     */
    public function getAncillaryEndorsement()
    {
        return $this->AncillaryEndorsement;
    }
    
    /**
     * Set HubId
     *
     * @param string $hubId
     * @return SmartPostShipmentDetail
     */
    public function setHubId($hubId)
    {
        $this->__set('HubId', $hubId);
        $this->HubId = $hubId;
        return $this;
    }
    
    /**
     * Returns Set HubId
     *
     * @return string
     */
    public function getHubId()
    {
        return $this->HubId;
    }
    
    /**
     * Set CustomerManifestId
     *
     * @param string $customerManifestId
     * @return SmartPostShipmentDetail
     */
    public function setCustomerManifestId($customerManifestId)
    {
        $this->__set('CustomerManifestId', $customerManifestId);
        $this->CustomerManifestId = $customerManifestId;
        return $this;
    }
    
    /**
     * Returns Set CustomerManifestId
     *
     * @return string
     */
    public function getCustomerManifestId()
    {
        return $this->CustomerManifestId;
    }
    

    
}