<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ExportDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ExportDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'B13AFilingOption' => 'B13AFilingOptionType',
'ExportComplianceStatement' => 'string',
'PermitNumber' => 'string',
'DestinationControlDetail' => 'DestinationControlDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ExportDetail';

        
    /**
     * @var \FedEx\RateService\SimpleType\B13AFilingOptionType|string
     */
    public $B13AFilingOption;

        
    /**
     * @var string
     */
    public $ExportComplianceStatement;

        
    /**
     * @var string
     */
    public $PermitNumber;

        
    /**
     * @var DestinationControlDetail
     */
    public $DestinationControlDetail;



    /**
     * Set B13AFilingOption
     *
     * @param \FedEx\RateService\SimpleType\B13AFilingOptionType|string $b13AFilingOption
     * @return ExportDetail
     */
    public function setB13AFilingOption($b13AFilingOption)
    {
        $this->__set('B13AFilingOption', $b13AFilingOption);
        $this->B13AFilingOption = $b13AFilingOption;
        return $this;
    }
    
    /**
     * Returns Set B13AFilingOption
     *
     * @return \FedEx\RateService\SimpleType\B13AFilingOptionType|string
     */
    public function getB13AFilingOption()
    {
        return $this->B13AFilingOption;
    }
    
    /**
     * General field for exporting-country-specific export data (e.g. B13A for CA, FTSR Exemption or AES Citation for US).
     *
     * @param string $exportComplianceStatement
     * @return ExportDetail
     */
    public function setExportComplianceStatement($exportComplianceStatement)
    {
        $this->__set('ExportComplianceStatement', $exportComplianceStatement);
        $this->ExportComplianceStatement = $exportComplianceStatement;
        return $this;
    }
    
    /**
     * Returns General field for exporting-country-specific export data (e.g. B13A for CA, FTSR Exemption or AES Citation for US).
     *
     * @return string
     */
    public function getExportComplianceStatement()
    {
        return $this->ExportComplianceStatement;
    }
    
    /**
     * Set PermitNumber
     *
     * @param string $permitNumber
     * @return ExportDetail
     */
    public function setPermitNumber($permitNumber)
    {
        $this->__set('PermitNumber', $permitNumber);
        $this->PermitNumber = $permitNumber;
        return $this;
    }
    
    /**
     * Returns Set PermitNumber
     *
     * @return string
     */
    public function getPermitNumber()
    {
        return $this->PermitNumber;
    }
    
    /**
     * Set DestinationControlDetail
     *
     * @param DestinationControlDetail $destinationControlDetail
     * @return ExportDetail
     */
    public function setDestinationControlDetail(DestinationControlDetail $destinationControlDetail)
    {
        $this->__set('DestinationControlDetail', $destinationControlDetail);
        $this->DestinationControlDetail = $destinationControlDetail;
        return $this;
    }
    
    /**
     * Returns Set DestinationControlDetail
     *
     * @return DestinationControlDetail
     */
    public function getDestinationControlDetail()
    {
        return $this->DestinationControlDetail;
    }
    

    
}