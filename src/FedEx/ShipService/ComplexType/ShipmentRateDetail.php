<?php
namespace FedEx\ShipService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data for a shipment's total/summary rates, as calculated per a specific rate type. The "total..." fields may differ from the sum of corresponding package data for Multiweight or Express MPS.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Ship Service
 */
class ShipmentRateDetail
    extends AbstractComplexType
{

    public $propertyTypes = array(
         'RateType' => 'ReturnedRateType',
'RateScale' => 'string',
'RateZone' => 'string',
'PricingCode' => 'PricingCodeType',
'RatedWeightMethod' => 'RatedWeightMethod',
'MinimumChargeType' => 'MinimumChargeType',
'CurrencyExchangeRate' => 'CurrencyExchangeRate',
'SpecialRatingApplied' => 'SpecialRatingAppliedType',
'DimDivisor' => 'nonNegativeInteger',
'DimDivisorType' => 'RateDimensionalDivisorType',
'FuelSurchargePercent' => 'decimal',
'TotalBillingWeight' => 'Weight',
'TotalDimWeight' => 'Weight',
'TotalBaseCharge' => 'Money',
'TotalFreightDiscounts' => 'Money',
'TotalNetFreight' => 'Money',
'TotalSurcharges' => 'Money',
'TotalNetFedExCharge' => 'Money',
'TotalTaxes' => 'Money',
'TotalNetCharge' => 'Money',
'TotalRebates' => 'Money',
'TotalDutiesAndTaxes' => 'Money',
'TotalNetChargeWithDutiesAndTaxes' => 'Money',
'ShipmentLegRateDetails' => 'ShipmentLegRateDetail',
'FreightRateDetail' => 'FreightRateDetail',
'FreightDiscounts' => 'RateDiscount',
'Rebates' => 'Rebate',
'Surcharges' => 'Surcharge',
'Taxes' => 'Tax',
'DutiesAndTaxes' => 'EdtCommodityTax',
'VariableHandlingCharges' => 'VariableHandlingCharges',
'TotalVariableHandlingCharges' => 'VariableHandlingCharges',

    );

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShipmentRateDetail';

        
    /**
     * @var \FedEx\ShipService\SimpleType\ReturnedRateType|string
     */
    public $RateType;

        
    /**
     * @var string
     */
    public $RateScale;

        
    /**
     * @var string
     */
    public $RateZone;

        
    /**
     * @var \FedEx\ShipService\SimpleType\PricingCodeType|string
     */
    public $PricingCode;

        
    /**
     * @var \FedEx\ShipService\SimpleType\RatedWeightMethod|string
     */
    public $RatedWeightMethod;

        
    /**
     * @var \FedEx\ShipService\SimpleType\MinimumChargeType|string
     */
    public $MinimumChargeType;

        
    /**
     * @var CurrencyExchangeRate
     */
    public $CurrencyExchangeRate;

        
    /**
     * @var SpecialRatingAppliedType[]
     */
    public $SpecialRatingApplied = array();

        
    /**
     * @var nonNegativeInteger
     */
    public $DimDivisor;

        
    /**
     * @var \FedEx\ShipService\SimpleType\RateDimensionalDivisorType|string
     */
    public $DimDivisorType;

        
    /**
     * @var decimal
     */
    public $FuelSurchargePercent;

        
    /**
     * @var Weight
     */
    public $TotalBillingWeight;

        
    /**
     * @var Weight
     */
    public $TotalDimWeight;

        
    /**
     * @var Money
     */
    public $TotalBaseCharge;

        
    /**
     * @var Money
     */
    public $TotalFreightDiscounts;

        
    /**
     * @var Money
     */
    public $TotalNetFreight;

        
    /**
     * @var Money
     */
    public $TotalSurcharges;

        
    /**
     * @var Money
     */
    public $TotalNetFedExCharge;

        
    /**
     * @var Money
     */
    public $TotalTaxes;

        
    /**
     * @var Money
     */
    public $TotalNetCharge;

        
    /**
     * @var Money
     */
    public $TotalRebates;

        
    /**
     * @var Money
     */
    public $TotalDutiesAndTaxes;

        
    /**
     * @var Money
     */
    public $TotalNetChargeWithDutiesAndTaxes;

        
    /**
     * @var ShipmentLegRateDetail[]
     */
    public $ShipmentLegRateDetails = array();

        
    /**
     * @var FreightRateDetail
     */
    public $FreightRateDetail;

        
    /**
     * @var RateDiscount[]
     */
    public $FreightDiscounts = array();

        
    /**
     * @var Rebate[]
     */
    public $Rebates = array();

        
    /**
     * @var Surcharge[]
     */
    public $Surcharges = array();

        
    /**
     * @var Tax[]
     */
    public $Taxes = array();

        
    /**
     * @var EdtCommodityTax[]
     */
    public $DutiesAndTaxes = array();

        
    /**
     * @var VariableHandlingCharges
     */
    public $VariableHandlingCharges;

        
    /**
     * @var VariableHandlingCharges
     */
    public $TotalVariableHandlingCharges;



    /**
     * Type used for this specific set of rate data.
     *
     * @param \FedEx\ShipService\SimpleType\ReturnedRateType|string $rateType
     * @return ShipmentRateDetail
     */
    public function setRateType($rateType)
    {
        $this->__set('RateType', $rateType);
        $this->RateType = $rateType;
        return $this;
    }
    
    /**
     * Returns Type used for this specific set of rate data.
     *
     * @return \FedEx\ShipService\SimpleType\ReturnedRateType|string
     */
    public function getRateType()
    {
        return $this->RateType;
    }
    
    /**
     * Indicates the rate scale used.
     *
     * @param string $rateScale
     * @return ShipmentRateDetail
     */
    public function setRateScale($rateScale)
    {
        $this->__set('RateScale', $rateScale);
        $this->RateScale = $rateScale;
        return $this;
    }
    
    /**
     * Returns Indicates the rate scale used.
     *
     * @return string
     */
    public function getRateScale()
    {
        return $this->RateScale;
    }
    
    /**
     * Indicates the rate zone used (based on origin and destination).
     *
     * @param string $rateZone
     * @return ShipmentRateDetail
     */
    public function setRateZone($rateZone)
    {
        $this->__set('RateZone', $rateZone);
        $this->RateZone = $rateZone;
        return $this;
    }
    
    /**
     * Returns Indicates the rate zone used (based on origin and destination).
     *
     * @return string
     */
    public function getRateZone()
    {
        return $this->RateZone;
    }
    
    /**
     * Identifies the type of pricing used for this shipment.
     *
     * @param \FedEx\ShipService\SimpleType\PricingCodeType|string $pricingCode
     * @return ShipmentRateDetail
     */
    public function setPricingCode($pricingCode)
    {
        $this->__set('PricingCode', $pricingCode);
        $this->PricingCode = $pricingCode;
        return $this;
    }
    
    /**
     * Returns Identifies the type of pricing used for this shipment.
     *
     * @return \FedEx\ShipService\SimpleType\PricingCodeType|string
     */
    public function getPricingCode()
    {
        return $this->PricingCode;
    }
    
    /**
     * Indicates which weight was used.
     *
     * @param \FedEx\ShipService\SimpleType\RatedWeightMethod|string $ratedWeightMethod
     * @return ShipmentRateDetail
     */
    public function setRatedWeightMethod($ratedWeightMethod)
    {
        $this->__set('RatedWeightMethod', $ratedWeightMethod);
        $this->RatedWeightMethod = $ratedWeightMethod;
        return $this;
    }
    
    /**
     * Returns Indicates which weight was used.
     *
     * @return \FedEx\ShipService\SimpleType\RatedWeightMethod|string
     */
    public function getRatedWeightMethod()
    {
        return $this->RatedWeightMethod;
    }
    
    /**
     * INTERNAL FEDEX USE ONLY.
     *
     * @param \FedEx\ShipService\SimpleType\MinimumChargeType|string $minimumChargeType
     * @return ShipmentRateDetail
     */
    public function setMinimumChargeType($minimumChargeType)
    {
        $this->__set('MinimumChargeType', $minimumChargeType);
        $this->MinimumChargeType = $minimumChargeType;
        return $this;
    }
    
    /**
     * Returns INTERNAL FEDEX USE ONLY.
     *
     * @return \FedEx\ShipService\SimpleType\MinimumChargeType|string
     */
    public function getMinimumChargeType()
    {
        return $this->MinimumChargeType;
    }
    
    /**
     * Specifies the currency exchange performed on financial amounts for this rate.
     *
     * @param CurrencyExchangeRate $currencyExchangeRate
     * @return ShipmentRateDetail
     */
    public function setCurrencyExchangeRate(CurrencyExchangeRate $currencyExchangeRate)
    {
        $this->__set('CurrencyExchangeRate', $currencyExchangeRate);
        $this->CurrencyExchangeRate = $currencyExchangeRate;
        return $this;
    }
    
    /**
     * Returns Specifies the currency exchange performed on financial amounts for this rate.
     *
     * @return CurrencyExchangeRate
     */
    public function getCurrencyExchangeRate()
    {
        return $this->CurrencyExchangeRate;
    }
    
    /**
     * Indicates which special rating cases applied to this shipment.
     *
     * @param SpecialRatingAppliedType[] $specialRatingApplied
     * @return ShipmentRateDetail
     */
    public function setSpecialRatingApplied(array $specialRatingApplied)
    {
        $this->__set('SpecialRatingApplied', $specialRatingApplied);
        $this->SpecialRatingApplied = $specialRatingApplied;
        return $this;
    }
    
    /**
     * Returns Indicates which special rating cases applied to this shipment.
     *
     * @return SpecialRatingAppliedType[]
     */
    public function getSpecialRatingApplied()
    {
        return $this->SpecialRatingApplied;
    }
    
    /**
     * The value used to calculate the weight based on the dimensions.
     *
     * @param nonNegativeInteger $dimDivisor
     * @return ShipmentRateDetail
     */
    public function setDimDivisor($dimDivisor)
    {
        $this->__set('DimDivisor', $dimDivisor);
        $this->DimDivisor = $dimDivisor;
        return $this;
    }
    
    /**
     * Returns The value used to calculate the weight based on the dimensions.
     *
     * @return nonNegativeInteger
     */
    public function getDimDivisor()
    {
        return $this->DimDivisor;
    }
    
    /**
     * Identifies the type of dim divisor that was applied.
     *
     * @param \FedEx\ShipService\SimpleType\RateDimensionalDivisorType|string $dimDivisorType
     * @return ShipmentRateDetail
     */
    public function setDimDivisorType($dimDivisorType)
    {
        $this->__set('DimDivisorType', $dimDivisorType);
        $this->DimDivisorType = $dimDivisorType;
        return $this;
    }
    
    /**
     * Returns Identifies the type of dim divisor that was applied.
     *
     * @return \FedEx\ShipService\SimpleType\RateDimensionalDivisorType|string
     */
    public function getDimDivisorType()
    {
        return $this->DimDivisorType;
    }
    
    /**
     * Specifies a fuel surcharge percentage.
     *
     * @param decimal $fuelSurchargePercent
     * @return ShipmentRateDetail
     */
    public function setFuelSurchargePercent($fuelSurchargePercent)
    {
        $this->__set('FuelSurchargePercent', $fuelSurchargePercent);
        $this->FuelSurchargePercent = $fuelSurchargePercent;
        return $this;
    }
    
    /**
     * Returns Specifies a fuel surcharge percentage.
     *
     * @return decimal
     */
    public function getFuelSurchargePercent()
    {
        return $this->FuelSurchargePercent;
    }
    
    /**
     * The weight used to calculate these rates.
     *
     * @param Weight $totalBillingWeight
     * @return ShipmentRateDetail
     */
    public function setTotalBillingWeight(Weight $totalBillingWeight)
    {
        $this->__set('TotalBillingWeight', $totalBillingWeight);
        $this->TotalBillingWeight = $totalBillingWeight;
        return $this;
    }
    
    /**
     * Returns The weight used to calculate these rates.
     *
     * @return Weight
     */
    public function getTotalBillingWeight()
    {
        return $this->TotalBillingWeight;
    }
    
    /**
     * Sum of dimensional weights for all packages.
     *
     * @param Weight $totalDimWeight
     * @return ShipmentRateDetail
     */
    public function setTotalDimWeight(Weight $totalDimWeight)
    {
        $this->__set('TotalDimWeight', $totalDimWeight);
        $this->TotalDimWeight = $totalDimWeight;
        return $this;
    }
    
    /**
     * Returns Sum of dimensional weights for all packages.
     *
     * @return Weight
     */
    public function getTotalDimWeight()
    {
        return $this->TotalDimWeight;
    }
    
    /**
     * The total freight charge that was calculated for this package before surcharges, discounts and taxes.
     *
     * @param Money $totalBaseCharge
     * @return ShipmentRateDetail
     */
    public function setTotalBaseCharge(Money $totalBaseCharge)
    {
        $this->__set('TotalBaseCharge', $totalBaseCharge);
        $this->TotalBaseCharge = $totalBaseCharge;
        return $this;
    }
    
    /**
     * Returns The total freight charge that was calculated for this package before surcharges, discounts and taxes.
     *
     * @return Money
     */
    public function getTotalBaseCharge()
    {
        return $this->TotalBaseCharge;
    }
    
    /**
     * The total discounts used in the rate calculation.
     *
     * @param Money $totalFreightDiscounts
     * @return ShipmentRateDetail
     */
    public function setTotalFreightDiscounts(Money $totalFreightDiscounts)
    {
        $this->__set('TotalFreightDiscounts', $totalFreightDiscounts);
        $this->TotalFreightDiscounts = $totalFreightDiscounts;
        return $this;
    }
    
    /**
     * Returns The total discounts used in the rate calculation.
     *
     * @return Money
     */
    public function getTotalFreightDiscounts()
    {
        return $this->TotalFreightDiscounts;
    }
    
    /**
     * The freight charge minus discounts.
     *
     * @param Money $totalNetFreight
     * @return ShipmentRateDetail
     */
    public function setTotalNetFreight(Money $totalNetFreight)
    {
        $this->__set('TotalNetFreight', $totalNetFreight);
        $this->TotalNetFreight = $totalNetFreight;
        return $this;
    }
    
    /**
     * Returns The freight charge minus discounts.
     *
     * @return Money
     */
    public function getTotalNetFreight()
    {
        return $this->TotalNetFreight;
    }
    
    /**
     * The total amount of all surcharges applied to this shipment.
     *
     * @param Money $totalSurcharges
     * @return ShipmentRateDetail
     */
    public function setTotalSurcharges(Money $totalSurcharges)
    {
        $this->__set('TotalSurcharges', $totalSurcharges);
        $this->TotalSurcharges = $totalSurcharges;
        return $this;
    }
    
    /**
     * Returns The total amount of all surcharges applied to this shipment.
     *
     * @return Money
     */
    public function getTotalSurcharges()
    {
        return $this->TotalSurcharges;
    }
    
    /**
     * This shipment's totalNetFreight + totalSurcharges (not including totalTaxes).
     *
     * @param Money $totalNetFedExCharge
     * @return ShipmentRateDetail
     */
    public function setTotalNetFedExCharge(Money $totalNetFedExCharge)
    {
        $this->__set('TotalNetFedExCharge', $totalNetFedExCharge);
        $this->TotalNetFedExCharge = $totalNetFedExCharge;
        return $this;
    }
    
    /**
     * Returns This shipment's totalNetFreight + totalSurcharges (not including totalTaxes).
     *
     * @return Money
     */
    public function getTotalNetFedExCharge()
    {
        return $this->TotalNetFedExCharge;
    }
    
    /**
     * Total of the transportation-based taxes.
     *
     * @param Money $totalTaxes
     * @return ShipmentRateDetail
     */
    public function setTotalTaxes(Money $totalTaxes)
    {
        $this->__set('TotalTaxes', $totalTaxes);
        $this->TotalTaxes = $totalTaxes;
        return $this;
    }
    
    /**
     * Returns Total of the transportation-based taxes.
     *
     * @return Money
     */
    public function getTotalTaxes()
    {
        return $this->TotalTaxes;
    }
    
    /**
     * The net charge after applying all discounts and surcharges.
     *
     * @param Money $totalNetCharge
     * @return ShipmentRateDetail
     */
    public function setTotalNetCharge(Money $totalNetCharge)
    {
        $this->__set('TotalNetCharge', $totalNetCharge);
        $this->TotalNetCharge = $totalNetCharge;
        return $this;
    }
    
    /**
     * Returns The net charge after applying all discounts and surcharges.
     *
     * @return Money
     */
    public function getTotalNetCharge()
    {
        return $this->TotalNetCharge;
    }
    
    /**
     * The total sum of all rebates applied to this shipment.
     *
     * @param Money $totalRebates
     * @return ShipmentRateDetail
     */
    public function setTotalRebates(Money $totalRebates)
    {
        $this->__set('TotalRebates', $totalRebates);
        $this->TotalRebates = $totalRebates;
        return $this;
    }
    
    /**
     * Returns The total sum of all rebates applied to this shipment.
     *
     * @return Money
     */
    public function getTotalRebates()
    {
        return $this->TotalRebates;
    }
    
    /**
     * Total of all values under this shipment's dutiesAndTaxes; only provided if estimated duties and taxes were calculated for this shipment.
     *
     * @param Money $totalDutiesAndTaxes
     * @return ShipmentRateDetail
     */
    public function setTotalDutiesAndTaxes(Money $totalDutiesAndTaxes)
    {
        $this->__set('TotalDutiesAndTaxes', $totalDutiesAndTaxes);
        $this->TotalDutiesAndTaxes = $totalDutiesAndTaxes;
        return $this;
    }
    
    /**
     * Returns Total of all values under this shipment's dutiesAndTaxes; only provided if estimated duties and taxes were calculated for this shipment.
     *
     * @return Money
     */
    public function getTotalDutiesAndTaxes()
    {
        return $this->TotalDutiesAndTaxes;
    }
    
    /**
     * This shipment's totalNetCharge + totalDutiesAndTaxes; only provided if estimated duties and taxes were calculated for this shipment AND duties, taxes and transportation charges are all paid by the same sender's account.
     *
     * @param Money $totalNetChargeWithDutiesAndTaxes
     * @return ShipmentRateDetail
     */
    public function setTotalNetChargeWithDutiesAndTaxes(Money $totalNetChargeWithDutiesAndTaxes)
    {
        $this->__set('TotalNetChargeWithDutiesAndTaxes', $totalNetChargeWithDutiesAndTaxes);
        $this->TotalNetChargeWithDutiesAndTaxes = $totalNetChargeWithDutiesAndTaxes;
        return $this;
    }
    
    /**
     * Returns This shipment's totalNetCharge + totalDutiesAndTaxes; only provided if estimated duties and taxes were calculated for this shipment AND duties, taxes and transportation charges are all paid by the same sender's account.
     *
     * @return Money
     */
    public function getTotalNetChargeWithDutiesAndTaxes()
    {
        return $this->TotalNetChargeWithDutiesAndTaxes;
    }
    
    /**
     * Identifies the Rate Details per each leg in a Freight Shipment
     *
     * @param ShipmentLegRateDetail[] $shipmentLegRateDetails
     * @return ShipmentRateDetail
     */
    public function setShipmentLegRateDetails(array $shipmentLegRateDetails)
    {
        $this->__set('ShipmentLegRateDetails', $shipmentLegRateDetails);
        $this->ShipmentLegRateDetails = $shipmentLegRateDetails;
        return $this;
    }
    
    /**
     * Returns Identifies the Rate Details per each leg in a Freight Shipment
     *
     * @return ShipmentLegRateDetail[]
     */
    public function getShipmentLegRateDetails()
    {
        return $this->ShipmentLegRateDetails;
    }
    
    /**
     * Rate data specific to FedEx Freight and FedEx National Freight services.
     *
     * @param FreightRateDetail $freightRateDetail
     * @return ShipmentRateDetail
     */
    public function setFreightRateDetail(FreightRateDetail $freightRateDetail)
    {
        $this->__set('FreightRateDetail', $freightRateDetail);
        $this->FreightRateDetail = $freightRateDetail;
        return $this;
    }
    
    /**
     * Returns Rate data specific to FedEx Freight and FedEx National Freight services.
     *
     * @return FreightRateDetail
     */
    public function getFreightRateDetail()
    {
        return $this->FreightRateDetail;
    }
    
    /**
     * All rate discounts that apply to this shipment.
     *
     * @param RateDiscount[] $freightDiscounts
     * @return ShipmentRateDetail
     */
    public function setFreightDiscounts(array $freightDiscounts)
    {
        $this->__set('FreightDiscounts', $freightDiscounts);
        $this->FreightDiscounts = $freightDiscounts;
        return $this;
    }
    
    /**
     * Returns All rate discounts that apply to this shipment.
     *
     * @return RateDiscount[]
     */
    public function getFreightDiscounts()
    {
        return $this->FreightDiscounts;
    }
    
    /**
     * All rebates that apply to this shipment.
     *
     * @param Rebate[] $rebates
     * @return ShipmentRateDetail
     */
    public function setRebates(array $rebates)
    {
        $this->__set('Rebates', $rebates);
        $this->Rebates = $rebates;
        return $this;
    }
    
    /**
     * Returns All rebates that apply to this shipment.
     *
     * @return Rebate[]
     */
    public function getRebates()
    {
        return $this->Rebates;
    }
    
    /**
     * All surcharges that apply to this shipment.
     *
     * @param Surcharge[] $surcharges
     * @return ShipmentRateDetail
     */
    public function setSurcharges(array $surcharges)
    {
        $this->__set('Surcharges', $surcharges);
        $this->Surcharges = $surcharges;
        return $this;
    }
    
    /**
     * Returns All surcharges that apply to this shipment.
     *
     * @return Surcharge[]
     */
    public function getSurcharges()
    {
        return $this->Surcharges;
    }
    
    /**
     * All transportation-based taxes applicable to this shipment.
     *
     * @param Tax[] $taxes
     * @return ShipmentRateDetail
     */
    public function setTaxes(array $taxes)
    {
        $this->__set('Taxes', $taxes);
        $this->Taxes = $taxes;
        return $this;
    }
    
    /**
     * Returns All transportation-based taxes applicable to this shipment.
     *
     * @return Tax[]
     */
    public function getTaxes()
    {
        return $this->Taxes;
    }
    
    /**
     * All commodity-based duties and taxes applicable to this shipment.
     *
     * @param EdtCommodityTax[] $dutiesAndTaxes
     * @return ShipmentRateDetail
     */
    public function setDutiesAndTaxes(array $dutiesAndTaxes)
    {
        $this->__set('DutiesAndTaxes', $dutiesAndTaxes);
        $this->DutiesAndTaxes = $dutiesAndTaxes;
        return $this;
    }
    
    /**
     * Returns All commodity-based duties and taxes applicable to this shipment.
     *
     * @return EdtCommodityTax[]
     */
    public function getDutiesAndTaxes()
    {
        return $this->DutiesAndTaxes;
    }
    
    /**
     * The "order level" variable handling charges.
     *
     * @param VariableHandlingCharges $variableHandlingCharges
     * @return ShipmentRateDetail
     */
    public function setVariableHandlingCharges(VariableHandlingCharges $variableHandlingCharges)
    {
        $this->__set('VariableHandlingCharges', $variableHandlingCharges);
        $this->VariableHandlingCharges = $variableHandlingCharges;
        return $this;
    }
    
    /**
     * Returns The "order level" variable handling charges.
     *
     * @return VariableHandlingCharges
     */
    public function getVariableHandlingCharges()
    {
        return $this->VariableHandlingCharges;
    }
    
    /**
     * The total of all variable handling charges at both shipment (order) and package level.
     *
     * @param VariableHandlingCharges $totalVariableHandlingCharges
     * @return ShipmentRateDetail
     */
    public function setTotalVariableHandlingCharges(VariableHandlingCharges $totalVariableHandlingCharges)
    {
        $this->__set('TotalVariableHandlingCharges', $totalVariableHandlingCharges);
        $this->TotalVariableHandlingCharges = $totalVariableHandlingCharges;
        return $this;
    }
    
    /**
     * Returns The total of all variable handling charges at both shipment (order) and package level.
     *
     * @return VariableHandlingCharges
     */
    public function getTotalVariableHandlingCharges()
    {
        return $this->TotalVariableHandlingCharges;
    }
    

    
}