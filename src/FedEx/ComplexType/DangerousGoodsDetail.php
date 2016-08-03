<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DangerousGoodsDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class DangerousGoodsDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'Regulation' => 'HazardousCommodityRegulationType',
'Accessibility' => 'DangerousGoodsAccessibilityType',
'CargoAircraftOnly' => 'boolean',
'Options' => 'HazardousCommodityOptionType',
'PackingOption' => 'DangerousGoodsPackingOptionType',
'ReferenceId' => 'string',
'Containers' => 'DangerousGoodsContainer',
'Packaging' => 'HazardousCommodityPackagingDetail',
'Signatory' => 'DangerousGoodsSignatory',
'EmergencyContactNumber' => 'string',
'Offeror' => 'string',
'InfectiousSubstanceResponsibleContact' => 'Contact',
'AdditionalHandling' => 'string',
'RadioactivityDetail' => 'RadioactivityDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'DangerousGoodsDetail';

        
    /**
     * @var \FedEx\SimpleType\HazardousCommodityRegulationType|string
     */
    public $Regulation;

        
    /**
     * @var \FedEx\SimpleType\DangerousGoodsAccessibilityType|string
     */
    public $Accessibility;

        
    /**
     * @var boolean
     */
    public $CargoAircraftOnly;

        
    /**
     * @var HazardousCommodityOptionType[]
     */
    public $Options = array();

        
    /**
     * @var \FedEx\SimpleType\DangerousGoodsPackingOptionType|string
     */
    public $PackingOption;

        
    /**
     * @var string
     */
    public $ReferenceId;

        
    /**
     * @var DangerousGoodsContainer[]
     */
    public $Containers = array();

        
    /**
     * @var HazardousCommodityPackagingDetail
     */
    public $Packaging;

        
    /**
     * @var DangerousGoodsSignatory
     */
    public $Signatory;

        
    /**
     * @var string
     */
    public $EmergencyContactNumber;

        
    /**
     * @var string
     */
    public $Offeror;

        
    /**
     * @var Contact
     */
    public $InfectiousSubstanceResponsibleContact;

        
    /**
     * @var string
     */
    public $AdditionalHandling;

        
    /**
     * @var RadioactivityDetail
     */
    public $RadioactivityDetail;



    /**
     * Set Regulation
     *
     * @param \FedEx\SimpleType\HazardousCommodityRegulationType|string $regulation
     * @return DangerousGoodsDetail
     */
    public function setRegulation($regulation)
    {
        $this->__set('Regulation', $regulation);
        $this->Regulation = $regulation;
        return $this;
    }
    
    /**
     * Returns Set Regulation
     *
     * @return \FedEx\SimpleType\HazardousCommodityRegulationType|string
     */
    public function getRegulation()
    {
        return $this->Regulation;
    }
    
    /**
     * Set Accessibility
     *
     * @param \FedEx\SimpleType\DangerousGoodsAccessibilityType|string $accessibility
     * @return DangerousGoodsDetail
     */
    public function setAccessibility($accessibility)
    {
        $this->__set('Accessibility', $accessibility);
        $this->Accessibility = $accessibility;
        return $this;
    }
    
    /**
     * Returns Set Accessibility
     *
     * @return \FedEx\SimpleType\DangerousGoodsAccessibilityType|string
     */
    public function getAccessibility()
    {
        return $this->Accessibility;
    }
    
    /**
     * Shipment is packaged/documented for movement ONLY on cargo aircraft.
     *
     * @param boolean $cargoAircraftOnly
     * @return DangerousGoodsDetail
     */
    public function setCargoAircraftOnly($cargoAircraftOnly)
    {
        $this->__set('CargoAircraftOnly', $cargoAircraftOnly);
        $this->CargoAircraftOnly = $cargoAircraftOnly;
        return $this;
    }
    
    /**
     * Returns Shipment is packaged/documented for movement ONLY on cargo aircraft.
     *
     * @return boolean
     */
    public function getCargoAircraftOnly()
    {
        return $this->CargoAircraftOnly;
    }
    
    /**
     * Indicates which kinds of hazardous content are in the current package.
     *
     * @param HazardousCommodityOptionType[] $options
     * @return DangerousGoodsDetail
     */
    public function setOptions(array $options)
    {
        $this->__set('Options', $options);
        $this->Options = $options;
        return $this;
    }
    
    /**
     * Returns Indicates which kinds of hazardous content are in the current package.
     *
     * @return HazardousCommodityOptionType[]
     */
    public function getOptions()
    {
        return $this->Options;
    }
    
    /**
     * Indicates whether there is additional customer provided packaging enclosing the approved dangerous goods containers.
     *
     * @param \FedEx\SimpleType\DangerousGoodsPackingOptionType|string $packingOption
     * @return DangerousGoodsDetail
     */
    public function setPackingOption($packingOption)
    {
        $this->__set('PackingOption', $packingOption);
        $this->PackingOption = $packingOption;
        return $this;
    }
    
    /**
     * Returns Indicates whether there is additional customer provided packaging enclosing the approved dangerous goods containers.
     *
     * @return \FedEx\SimpleType\DangerousGoodsPackingOptionType|string
     */
    public function getPackingOption()
    {
        return $this->PackingOption;
    }
    
    /**
     * Identifies the configuration of this dangerous goods package. The common configuration is represented at the shipment level.
     *
     * @param string $referenceId
     * @return DangerousGoodsDetail
     */
    public function setReferenceId($referenceId)
    {
        $this->__set('ReferenceId', $referenceId);
        $this->ReferenceId = $referenceId;
        return $this;
    }
    
    /**
     * Returns Identifies the configuration of this dangerous goods package. The common configuration is represented at the shipment level.
     *
     * @return string
     */
    public function getReferenceId()
    {
        return $this->ReferenceId;
    }
    
    /**
     * Indicates one or more containers used to pack dangerous goods commodities.
     *
     * @param DangerousGoodsContainer[] $containers
     * @return DangerousGoodsDetail
     */
    public function setContainers(array $containers)
    {
        $this->__set('Containers', $containers);
        $this->Containers = $containers;
        return $this;
    }
    
    /**
     * Returns Indicates one or more containers used to pack dangerous goods commodities.
     *
     * @return DangerousGoodsContainer[]
     */
    public function getContainers()
    {
        return $this->Containers;
    }
    
    /**
     * Description of the packaging of this commodity, suitable for use on OP-900 and OP-950 forms.
     *
     * @param HazardousCommodityPackagingDetail $packaging
     * @return DangerousGoodsDetail
     */
    public function setPackaging(HazardousCommodityPackagingDetail $packaging)
    {
        $this->__set('Packaging', $packaging);
        $this->Packaging = $packaging;
        return $this;
    }
    
    /**
     * Returns Description of the packaging of this commodity, suitable for use on OP-900 and OP-950 forms.
     *
     * @return HazardousCommodityPackagingDetail
     */
    public function getPackaging()
    {
        return $this->Packaging;
    }
    
    /**
     * Name, title and place of the signatory for this shipment.
     *
     * @param DangerousGoodsSignatory $signatory
     * @return DangerousGoodsDetail
     */
    public function setSignatory(DangerousGoodsSignatory $signatory)
    {
        $this->__set('Signatory', $signatory);
        $this->Signatory = $signatory;
        return $this;
    }
    
    /**
     * Returns Name, title and place of the signatory for this shipment.
     *
     * @return DangerousGoodsSignatory
     */
    public function getSignatory()
    {
        return $this->Signatory;
    }
    
    /**
     * Telephone number to use for contact in the event of an emergency.
     *
     * @param string $emergencyContactNumber
     * @return DangerousGoodsDetail
     */
    public function setEmergencyContactNumber($emergencyContactNumber)
    {
        $this->__set('EmergencyContactNumber', $emergencyContactNumber);
        $this->EmergencyContactNumber = $emergencyContactNumber;
        return $this;
    }
    
    /**
     * Returns Telephone number to use for contact in the event of an emergency.
     *
     * @return string
     */
    public function getEmergencyContactNumber()
    {
        return $this->EmergencyContactNumber;
    }
    
    /**
     * Offeror's name or contract number, per DOT regulation.
     *
     * @param string $offeror
     * @return DangerousGoodsDetail
     */
    public function setOfferor($offeror)
    {
        $this->__set('Offeror', $offeror);
        $this->Offeror = $offeror;
        return $this;
    }
    
    /**
     * Returns Offeror's name or contract number, per DOT regulation.
     *
     * @return string
     */
    public function getOfferor()
    {
        return $this->Offeror;
    }
    
    /**
     * Specifies the contact of the party responsible for handling the infectious substances, if any, in the dangerous goods shipment.
     *
     * @param Contact $infectiousSubstanceResponsibleContact
     * @return DangerousGoodsDetail
     */
    public function setInfectiousSubstanceResponsibleContact(Contact $infectiousSubstanceResponsibleContact)
    {
        $this->__set('InfectiousSubstanceResponsibleContact', $infectiousSubstanceResponsibleContact);
        $this->InfectiousSubstanceResponsibleContact = $infectiousSubstanceResponsibleContact;
        return $this;
    }
    
    /**
     * Returns Specifies the contact of the party responsible for handling the infectious substances, if any, in the dangerous goods shipment.
     *
     * @return Contact
     */
    public function getInfectiousSubstanceResponsibleContact()
    {
        return $this->InfectiousSubstanceResponsibleContact;
    }
    
    /**
     * Specifies additional handling information for the current package.
     *
     * @param string $additionalHandling
     * @return DangerousGoodsDetail
     */
    public function setAdditionalHandling($additionalHandling)
    {
        $this->__set('AdditionalHandling', $additionalHandling);
        $this->AdditionalHandling = $additionalHandling;
        return $this;
    }
    
    /**
     * Returns Specifies additional handling information for the current package.
     *
     * @return string
     */
    public function getAdditionalHandling()
    {
        return $this->AdditionalHandling;
    }
    
    /**
     * Specifies the radioactivity detail for the current package, if the package contains radioactive materials.
     *
     * @param RadioactivityDetail $radioactivityDetail
     * @return DangerousGoodsDetail
     */
    public function setRadioactivityDetail(RadioactivityDetail $radioactivityDetail)
    {
        $this->__set('RadioactivityDetail', $radioactivityDetail);
        $this->RadioactivityDetail = $radioactivityDetail;
        return $this;
    }
    
    /**
     * Returns Specifies the radioactivity detail for the current package, if the package contains radioactive materials.
     *
     * @return RadioactivityDetail
     */
    public function getRadioactivityDetail()
    {
        return $this->RadioactivityDetail;
    }
    

    
}