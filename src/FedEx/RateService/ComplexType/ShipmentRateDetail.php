<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * Data for a shipment's total/summary rates, as calculated per a specific rate type. The "total..." fields may differ from the sum of corresponding package data for Multiweight or Express MPS.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class ShipmentRateDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'ShipmentRateDetail';

    /**
     * Type used for this specific set of rate data.
     *
     * @param \FedEx\RateService\SimpleType\ReturnedRateType|string $rateType
     * @return ShipmentRateDetail
     */
    public function setRateType($rateType)
    {
        $this->RateType = $rateType;
        return $this;
    }
    
    /**
     * Returns Type used for this specific set of rate data.
     *
     * @return \FedEx\RateService\SimpleType\ReturnedRateType|string
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
     * Set PricingCode
     *
     * @param \FedEx\RateService\SimpleType\PricingCodeType|string $pricingCode
     * @return ShipmentRateDetail
     */
    public function setPricingCode($pricingCode)
    {
        $this->PricingCode = $pricingCode;
        return $this;
    }
    
    /**
     * Returns Set PricingCode
     *
     * @return \FedEx\RateService\SimpleType\PricingCodeType|string
     */
    public function getPricingCode()
    {
        return $this->PricingCode;
    }
    
    /**
     * Indicates which weight was used.
     *
     * @param \FedEx\RateService\SimpleType\RatedWeightMethod|string $ratedWeightMethod
     * @return ShipmentRateDetail
     */
    public function setRatedWeightMethod($ratedWeightMethod)
    {
        $this->RatedWeightMethod = $ratedWeightMethod;
        return $this;
    }
    
    /**
     * Returns Indicates which weight was used.
     *
     * @return \FedEx\RateService\SimpleType\RatedWeightMethod|string
     */
    public function getRatedWeightMethod()
    {
        return $this->RatedWeightMethod;
    }
    
    /**
     * INTERNAL FEDEX USE ONLY.
     *
     * @param \FedEx\RateService\SimpleType\MinimumChargeType|string $minimumChargeType
     * @return ShipmentRateDetail
     */
    public function setMinimumChargeType($minimumChargeType)
    {
        $this->MinimumChargeType = $minimumChargeType;
        return $this;
    }
    
    /**
     * Returns INTERNAL FEDEX USE ONLY.
     *
     * @return \FedEx\RateService\SimpleType\MinimumChargeType|string
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
     * Set DimDivisor
     *
     * @param nonNegativeInteger $dimDivisor
     * @return ShipmentRateDetail
     */
    public function setDimDivisor($dimDivisor)
    {
        $this->DimDivisor = $dimDivisor;
        return $this;
    }
    
    /**
     * Returns Set DimDivisor
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
     * @param \FedEx\RateService\SimpleType\RateDimensionalDivisorType|string $dimDivisorType
     * @return ShipmentRateDetail
     */
    public function setDimDivisorType($dimDivisorType)
    {
        $this->DimDivisorType = $dimDivisorType;
        return $this;
    }
    
    /**
     * Returns Identifies the type of dim divisor that was applied.
     *
     * @return \FedEx\RateService\SimpleType\RateDimensionalDivisorType|string
     */
    public function getDimDivisorType()
    {
        return $this->DimDivisorType;
    }
    
    /**
     * Set FuelSurchargePercent
     *
     * @param decimal $fuelSurchargePercent
     * @return ShipmentRateDetail
     */
    public function setFuelSurchargePercent($fuelSurchargePercent)
    {
        $this->FuelSurchargePercent = $fuelSurchargePercent;
        return $this;
    }
    
    /**
     * Returns Set FuelSurchargePercent
     *
     * @return decimal
     */
    public function getFuelSurchargePercent()
    {
        return $this->FuelSurchargePercent;
    }
    
    /**
     * Set TotalBillingWeight
     *
     * @param Weight $totalBillingWeight
     * @return ShipmentRateDetail
     */
    public function setTotalBillingWeight(Weight $totalBillingWeight)
    {
        $this->TotalBillingWeight = $totalBillingWeight;
        return $this;
    }
    
    /**
     * Returns Set TotalBillingWeight
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
     * Set TotalBaseCharge
     *
     * @param Money $totalBaseCharge
     * @return ShipmentRateDetail
     */
    public function setTotalBaseCharge(Money $totalBaseCharge)
    {
        $this->TotalBaseCharge = $totalBaseCharge;
        return $this;
    }
    
    /**
     * Returns Set TotalBaseCharge
     *
     * @return Money
     */
    public function getTotalBaseCharge()
    {
        return $this->TotalBaseCharge;
    }
    
    /**
     * Set TotalFreightDiscounts
     *
     * @param Money $totalFreightDiscounts
     * @return ShipmentRateDetail
     */
    public function setTotalFreightDiscounts(Money $totalFreightDiscounts)
    {
        $this->TotalFreightDiscounts = $totalFreightDiscounts;
        return $this;
    }
    
    /**
     * Returns Set TotalFreightDiscounts
     *
     * @return Money
     */
    public function getTotalFreightDiscounts()
    {
        return $this->TotalFreightDiscounts;
    }
    
    /**
     * Set TotalNetFreight
     *
     * @param Money $totalNetFreight
     * @return ShipmentRateDetail
     */
    public function setTotalNetFreight(Money $totalNetFreight)
    {
        $this->TotalNetFreight = $totalNetFreight;
        return $this;
    }
    
    /**
     * Returns Set TotalNetFreight
     *
     * @return Money
     */
    public function getTotalNetFreight()
    {
        return $this->TotalNetFreight;
    }
    
    /**
     * Set TotalSurcharges
     *
     * @param Money $totalSurcharges
     * @return ShipmentRateDetail
     */
    public function setTotalSurcharges(Money $totalSurcharges)
    {
        $this->TotalSurcharges = $totalSurcharges;
        return $this;
    }
    
    /**
     * Returns Set TotalSurcharges
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
     * Set TotalNetCharge
     *
     * @param Money $totalNetCharge
     * @return ShipmentRateDetail
     */
    public function setTotalNetCharge(Money $totalNetCharge)
    {
        $this->TotalNetCharge = $totalNetCharge;
        return $this;
    }
    
    /**
     * Returns Set TotalNetCharge
     *
     * @return Money
     */
    public function getTotalNetCharge()
    {
        return $this->TotalNetCharge;
    }
    
    /**
     * Set TotalRebates
     *
     * @param Money $totalRebates
     * @return ShipmentRateDetail
     */
    public function setTotalRebates(Money $totalRebates)
    {
        $this->TotalRebates = $totalRebates;
        return $this;
    }
    
    /**
     * Returns Set TotalRebates
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