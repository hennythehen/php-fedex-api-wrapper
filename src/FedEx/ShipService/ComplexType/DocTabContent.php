<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * DocTabContent
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
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
     * @var \FedEx\ShipService\SimpleType\DocTabContentType|string
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
     * The DocTabContentType options available.
     *
     * @param \FedEx\ShipService\SimpleType\DocTabContentType|string $docTabContentType
     * @return DocTabContent
     */
    public function setDocTabContentType($docTabContentType)
    {
        $this->__set('DocTabContentType', $docTabContentType);
        $this->DocTabContentType = $docTabContentType;
        return $this;
    }
    
    /**
     * Returns The DocTabContentType options available.
     *
     * @return \FedEx\ShipService\SimpleType\DocTabContentType|string
     */
    public function getDocTabContentType()
    {
        return $this->DocTabContentType;
    }
    
    /**
     * The DocTabContentType should be set to ZONE001 to specify additional Zone details.
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
     * Returns The DocTabContentType should be set to ZONE001 to specify additional Zone details.
     *
     * @return DocTabContentZone001
     */
    public function getZone001()
    {
        return $this->Zone001;
    }
    
    /**
     * The DocTabContentType should be set to BARCODED to specify additional BarCoded details.
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
     * Returns The DocTabContentType should be set to BARCODED to specify additional BarCoded details.
     *
     * @return DocTabContentBarcoded
     */
    public function getBarcoded()
    {
        return $this->Barcoded;
    }
    

    
}