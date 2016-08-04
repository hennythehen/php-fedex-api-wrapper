<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Computed shipment level hazardous commodity information.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class CompletedHazardousShipmentDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'HazardousSummaryDetail' => 'CompletedHazardousSummaryDetail',
'DryIceDetail' => 'ShipmentDryIceDetail',
'AdrLicense' => 'AdrLicenseDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'CompletedHazardousShipmentDetail';

        
    /**
     * @var CompletedHazardousSummaryDetail
     */
    public $HazardousSummaryDetail;

        
    /**
     * @var ShipmentDryIceDetail
     */
    public $DryIceDetail;

        
    /**
     * @var AdrLicenseDetail
     */
    public $AdrLicense;



    /**
     * Set HazardousSummaryDetail
     *
     * @param CompletedHazardousSummaryDetail $hazardousSummaryDetail
     * @return CompletedHazardousShipmentDetail
     */
    public function setHazardousSummaryDetail(CompletedHazardousSummaryDetail $hazardousSummaryDetail)
    {
        $this->__set('HazardousSummaryDetail', $hazardousSummaryDetail);
        $this->HazardousSummaryDetail = $hazardousSummaryDetail;
        return $this;
    }
    
    /**
     * Returns Set HazardousSummaryDetail
     *
     * @return CompletedHazardousSummaryDetail
     */
    public function getHazardousSummaryDetail()
    {
        return $this->HazardousSummaryDetail;
    }
    
    /**
     * Set DryIceDetail
     *
     * @param ShipmentDryIceDetail $dryIceDetail
     * @return CompletedHazardousShipmentDetail
     */
    public function setDryIceDetail(ShipmentDryIceDetail $dryIceDetail)
    {
        $this->__set('DryIceDetail', $dryIceDetail);
        $this->DryIceDetail = $dryIceDetail;
        return $this;
    }
    
    /**
     * Returns Set DryIceDetail
     *
     * @return ShipmentDryIceDetail
     */
    public function getDryIceDetail()
    {
        return $this->DryIceDetail;
    }
    
    /**
     * This contains the ADR License information, which identifies the license number and ADR category under which the customer is allowed to ship.
     *
     * @param AdrLicenseDetail $adrLicense
     * @return CompletedHazardousShipmentDetail
     */
    public function setAdrLicense(AdrLicenseDetail $adrLicense)
    {
        $this->__set('AdrLicense', $adrLicense);
        $this->AdrLicense = $adrLicense;
        return $this;
    }
    
    /**
     * Returns This contains the ADR License information, which identifies the license number and ADR category under which the customer is allowed to ship.
     *
     * @return AdrLicenseDetail
     */
    public function getAdrLicense()
    {
        return $this->AdrLicense;
    }
    

    
}