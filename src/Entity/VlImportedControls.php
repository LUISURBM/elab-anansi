<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VlImportedControls
 *
 * @ORM\Table(name="vl_imported_controls")
 * @ORM\Entity
 */
class VlImportedControls
{
    /**
     * @var int
     *
     * @ORM\Column(name="control_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $controlId;

    /**
     * @var string
     *
     * @ORM\Column(name="control_code", type="string", length=255, nullable=false)
     */
    private $controlCode;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lab_id", type="integer", nullable=true)
     */
    private $labId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="batch_id", type="integer", nullable=true)
     */
    private $batchId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="control_type", type="string", length=255, nullable=true)
     */
    private $controlType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lot_number", type="string", length=255, nullable=true)
     */
    private $lotNumber;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="lot_expiration_date", type="date", nullable=true)
     */
    private $lotExpirationDate;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="sample_tested_datetime", type="datetime", nullable=true)
     */
    private $sampleTestedDatetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="is_sample_rejected", type="string", length=255, nullable=true)
     */
    private $isSampleRejected;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reason_for_sample_rejection", type="string", length=255, nullable=true)
     */
    private $reasonForSampleRejection;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_value_absolute", type="string", length=255, nullable=true)
     */
    private $resultValueAbsolute;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_value_log", type="string", length=255, nullable=true)
     */
    private $resultValueLog;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_value_text", type="string", length=255, nullable=true)
     */
    private $resultValueText;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_value_absolute_decimal", type="string", length=255, nullable=true)
     */
    private $resultValueAbsoluteDecimal;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result", type="string", length=255, nullable=true)
     */
    private $result;

    /**
     * @var string|null
     *
     * @ORM\Column(name="approver_comments", type="string", length=255, nullable=true)
     */
    private $approverComments;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_approved_by", type="string", length=255, nullable=true)
     */
    private $resultApprovedBy;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="result_approved_datetime", type="datetime", nullable=true)
     */
    private $resultApprovedDatetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_reviewed_by", type="string", length=15, nullable=true)
     */
    private $resultReviewedBy;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="result_reviewed_datetime", type="datetime", nullable=true)
     */
    private $resultReviewedDatetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vlsm_country_id", type="string", length=10, nullable=true)
     */
    private $vlsmCountryId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="file_name", type="string", length=255, nullable=true)
     */
    private $fileName;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="imported_date_time", type="datetime", nullable=true)
     */
    private $importedDateTime;

    public function getControlId(): ?int
    {
        return $this->controlId;
    }

    public function getControlCode(): ?string
    {
        return $this->controlCode;
    }

    public function setControlCode(string $controlCode): self
    {
        $this->controlCode = $controlCode;

        return $this;
    }

    public function getLabId(): ?int
    {
        return $this->labId;
    }

    public function setLabId(?int $labId): self
    {
        $this->labId = $labId;

        return $this;
    }

    public function getBatchId(): ?int
    {
        return $this->batchId;
    }

    public function setBatchId(?int $batchId): self
    {
        $this->batchId = $batchId;

        return $this;
    }

    public function getControlType(): ?string
    {
        return $this->controlType;
    }

    public function setControlType(?string $controlType): self
    {
        $this->controlType = $controlType;

        return $this;
    }

    public function getLotNumber(): ?string
    {
        return $this->lotNumber;
    }

    public function setLotNumber(?string $lotNumber): self
    {
        $this->lotNumber = $lotNumber;

        return $this;
    }

    public function getLotExpirationDate(): ?\DateTimeInterface
    {
        return $this->lotExpirationDate;
    }

    public function setLotExpirationDate(?\DateTimeInterface $lotExpirationDate): self
    {
        $this->lotExpirationDate = $lotExpirationDate;

        return $this;
    }

    public function getSampleTestedDatetime(): ?\DateTimeInterface
    {
        return $this->sampleTestedDatetime;
    }

    public function setSampleTestedDatetime(?\DateTimeInterface $sampleTestedDatetime): self
    {
        $this->sampleTestedDatetime = $sampleTestedDatetime;

        return $this;
    }

    public function getIsSampleRejected(): ?string
    {
        return $this->isSampleRejected;
    }

    public function setIsSampleRejected(?string $isSampleRejected): self
    {
        $this->isSampleRejected = $isSampleRejected;

        return $this;
    }

    public function getReasonForSampleRejection(): ?string
    {
        return $this->reasonForSampleRejection;
    }

    public function setReasonForSampleRejection(?string $reasonForSampleRejection): self
    {
        $this->reasonForSampleRejection = $reasonForSampleRejection;

        return $this;
    }

    public function getResultValueAbsolute(): ?string
    {
        return $this->resultValueAbsolute;
    }

    public function setResultValueAbsolute(?string $resultValueAbsolute): self
    {
        $this->resultValueAbsolute = $resultValueAbsolute;

        return $this;
    }

    public function getResultValueLog(): ?string
    {
        return $this->resultValueLog;
    }

    public function setResultValueLog(?string $resultValueLog): self
    {
        $this->resultValueLog = $resultValueLog;

        return $this;
    }

    public function getResultValueText(): ?string
    {
        return $this->resultValueText;
    }

    public function setResultValueText(?string $resultValueText): self
    {
        $this->resultValueText = $resultValueText;

        return $this;
    }

    public function getResultValueAbsoluteDecimal(): ?string
    {
        return $this->resultValueAbsoluteDecimal;
    }

    public function setResultValueAbsoluteDecimal(?string $resultValueAbsoluteDecimal): self
    {
        $this->resultValueAbsoluteDecimal = $resultValueAbsoluteDecimal;

        return $this;
    }

    public function getResult(): ?string
    {
        return $this->result;
    }

    public function setResult(?string $result): self
    {
        $this->result = $result;

        return $this;
    }

    public function getApproverComments(): ?string
    {
        return $this->approverComments;
    }

    public function setApproverComments(?string $approverComments): self
    {
        $this->approverComments = $approverComments;

        return $this;
    }

    public function getResultApprovedBy(): ?string
    {
        return $this->resultApprovedBy;
    }

    public function setResultApprovedBy(?string $resultApprovedBy): self
    {
        $this->resultApprovedBy = $resultApprovedBy;

        return $this;
    }

    public function getResultApprovedDatetime(): ?\DateTimeInterface
    {
        return $this->resultApprovedDatetime;
    }

    public function setResultApprovedDatetime(?\DateTimeInterface $resultApprovedDatetime): self
    {
        $this->resultApprovedDatetime = $resultApprovedDatetime;

        return $this;
    }

    public function getResultReviewedBy(): ?string
    {
        return $this->resultReviewedBy;
    }

    public function setResultReviewedBy(?string $resultReviewedBy): self
    {
        $this->resultReviewedBy = $resultReviewedBy;

        return $this;
    }

    public function getResultReviewedDatetime(): ?\DateTimeInterface
    {
        return $this->resultReviewedDatetime;
    }

    public function setResultReviewedDatetime(?\DateTimeInterface $resultReviewedDatetime): self
    {
        $this->resultReviewedDatetime = $resultReviewedDatetime;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getVlsmCountryId(): ?string
    {
        return $this->vlsmCountryId;
    }

    public function setVlsmCountryId(?string $vlsmCountryId): self
    {
        $this->vlsmCountryId = $vlsmCountryId;

        return $this;
    }

    public function getFileName(): ?string
    {
        return $this->fileName;
    }

    public function setFileName(?string $fileName): self
    {
        $this->fileName = $fileName;

        return $this;
    }

    public function getImportedDateTime(): ?\DateTimeInterface
    {
        return $this->importedDateTime;
    }

    public function setImportedDateTime(?\DateTimeInterface $importedDateTime): self
    {
        $this->importedDateTime = $importedDateTime;

        return $this;
    }


}
