<?php
namespace FedEx\RateService\ComplexType;

use FedEx\AbstractComplexType;

/**
 * This information describes the kind of pending shipment being requested.
 *
 * @author      Jeremy Dunn <jeremy@jsdunn.info>
 * @package     PHP FedEx API wrapper
 * @subpackage  Rate Service
 */
class PendingShipmentDetail
    extends AbstractComplexType
{

    /**
     * Name of this complex type
     * 
     * @var string
     */
    protected $_name = 'PendingShipmentDetail';

    /**
     * Set Type
     *
     * @param \FedEx\RateService\SimpleType\PendingShipmentType|string $type
     * @return PendingShipmentDetail
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
    
    /**
     * Returns Set Type
     *
     * @return \FedEx\RateService\SimpleType\PendingShipmentType|string
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
    

    
}