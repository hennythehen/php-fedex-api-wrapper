<?php
namespace FedEx\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DocTabContent
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class DocTabContent
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'DocTabContentType' => 'DocTabContentType',
'Zone001' => 'DocTabContentZone001',
'Barcoded' => 'DocTabContentBarcoded',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'DocTabContent';

        
    /**
     * @var \FedEx\SimpleType\DocTabContentType|string
     */
    public $DocTabContentType;

        
    /**
     * @var DocTabContentZone001
     */
    public $Zone001;

        
    /**
     * @var DocTabContentBarcoded
     */
    public $Barcoded;



    /**
     * Set DocTabContentType
     *
     * @param \FedEx\SimpleType\DocTabContentType|string $docTabContentType
     * @return DocTabContent
     */
    public function setDocTabContentType($docTabContentType)
    {
        $this->__set('DocTabContentType', $docTabContentType);
        $this->DocTabContentType = $docTabContentType;
        return $this;
    }
    
    /**
     * Returns Set DocTabContentType
     *
     * @return \FedEx\SimpleType\DocTabContentType|string
     */
    public function getDocTabContentType()
    {
        return $this->DocTabContentType;
    }
    
    /**
     * Set Zone001
     *
     * @param DocTabContentZone001 $zone001
     * @return DocTabContent
     */
    public function setZone001(DocTabContentZone001 $zone001)
    {
        $this->__set('Zone001', $zone001);
        $this->Zone001 = $zone001;
        return $this;
    }
    
    /**
     * Returns Set Zone001
     *
     * @return DocTabContentZone001
     */
    public function getZone001()
    {
        return $this->Zone001;
    }
    
    /**
     * Set Barcoded
     *
     * @param DocTabContentBarcoded $barcoded
     * @return DocTabContent
     */
    public function setBarcoded(DocTabContentBarcoded $barcoded)
    {
        $this->__set('Barcoded', $barcoded);
        $this->Barcoded = $barcoded;
        return $this;
    }
    
    /**
     * Returns Set Barcoded
     *
     * @return DocTabContentBarcoded
     */
    public function getBarcoded()
    {
        return $this->Barcoded;
    }
    

    
}