<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * ReturnShipmentDetail
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ReturnShipmentDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'ReturnType' => 'ReturnType',
'Rma' => 'Rma',
'ReturnEMailDetail' => 'ReturnEMailDetail',
'ReturnAssociation' => 'ReturnAssociationDetail',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ReturnShipmentDetail';

        
    /**
     * @var \FedEx\RateService\SimpleType\ReturnType|string
     */
    public $ReturnType;

        
    /**
     * @var Rma
     */
    public $Rma;

        
    /**
     * @var ReturnEMailDetail
     */
    public $ReturnEMailDetail;

        
    /**
     * @var ReturnAssociationDetail
     */
    public $ReturnAssociation;



    /**
     * Set ReturnType
     *
     * @param \FedEx\RateService\SimpleType\ReturnType|string $returnType
     * @return ReturnShipmentDetail
     */
    public function setReturnType($returnType)
    {
        $this->__set('ReturnType', $returnType);
        $this->ReturnType = $returnType;
        return $this;
    }
    
    /**
     * Returns Set ReturnType
     *
     * @return \FedEx\RateService\SimpleType\ReturnType|string
     */
    public function getReturnType()
    {
        return $this->ReturnType;
    }
    
    /**
     * Set Rma
     *
     * @param Rma $rma
     * @return ReturnShipmentDetail
     */
    public function setRma(Rma $rma)
    {
        $this->__set('Rma', $rma);
        $this->Rma = $rma;
        return $this;
    }
    
    /**
     * Returns Set Rma
     *
     * @return Rma
     */
    public function getRma()
    {
        return $this->Rma;
    }
    
    /**
     * Set ReturnEMailDetail
     *
     * @param ReturnEMailDetail $returnEMailDetail
     * @return ReturnShipmentDetail
     */
    public function setReturnEMailDetail(ReturnEMailDetail $returnEMailDetail)
    {
        $this->__set('ReturnEMailDetail', $returnEMailDetail);
        $this->ReturnEMailDetail = $returnEMailDetail;
        return $this;
    }
    
    /**
     * Returns Set ReturnEMailDetail
     *
     * @return ReturnEMailDetail
     */
    public function getReturnEMailDetail()
    {
        return $this->ReturnEMailDetail;
    }
    
    /**
     * Set ReturnAssociation
     *
     * @param ReturnAssociationDetail $returnAssociation
     * @return ReturnShipmentDetail
     */
    public function setReturnAssociation(ReturnAssociationDetail $returnAssociation)
    {
        $this->__set('ReturnAssociation', $returnAssociation);
        $this->ReturnAssociation = $returnAssociation;
        return $this;
    }
    
    /**
     * Returns Set ReturnAssociation
     *
     * @return ReturnAssociationDetail
     */
    public function getReturnAssociation()
    {
        return $this->ReturnAssociation;
    }
    

    
}