<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TempSampleImport
 *
 * @ORM\Table(name="temp_sample_import")
 * @ORM\Entity
 */
class TempSampleImport
{
    /**
     * @var int
     *
     * @ORM\Column(name="temp_sample_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $tempSampleId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="facility_id", type="integer", nullable=true)
     */
    private $facilityId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lab_name", type="string", length=255, nullable=true)
     */
    private $labName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lab_id", type="integer", nullable=true)
     */
    private $labId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lab_contact_person", type="string", length=255, nullable=true)
     */
    private $labContactPerson;

    /**
     * @var string|null
     *
     * @ORM\Column(name="lab_phone_number", type="string", length=255, nullable=true)
     */
    private $labPhoneNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_received_at_vl_lab_datetime", type="string", length=255, nullable=true)
     */
    private $sampleReceivedAtVlLabDatetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_tested_datetime", type="string", length=255, nullable=true)
     */
    private $sampleTestedDatetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_dispatched_datetime", type="string", length=255, nullable=true)
     */
    private $resultDispatchedDatetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_reviewed_datetime", type="string", length=255, nullable=true)
     */
    private $resultReviewedDatetime;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_reviewed_by", type="string", length=255, nullable=true)
     */
    private $resultReviewedBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="approver_comments", type="string", length=255, nullable=true)
     */
    private $approverComments;

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
     * @var string|null
     *
     * @ORM\Column(name="sample_code", type="string", length=255, nullable=true)
     */
    private $sampleCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="batch_code", type="string", length=255, nullable=true)
     */
    private $batchCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="batch_code_key", type="string", length=255, nullable=true)
     */
    private $batchCodeKey;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_type", type="string", length=255, nullable=true)
     */
    private $sampleType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="order_number", type="string", length=255, nullable=true)
     */
    private $orderNumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_value_log", type="string", length=255, nullable=true)
     */
    private $resultValueLog;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_value_absolute", type="string", length=255, nullable=true)
     */
    private $resultValueAbsolute;

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
     * @ORM\Column(name="sample_details", type="string", length=255, nullable=true)
     */
    private $sampleDetails;

    /**
     * @var string|null
     *
     * @ORM\Column(name="result_status", type="string", length=255, nullable=true)
     */
    private $resultStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_machine_file_name", type="string", length=255, nullable=true)
     */
    private $importMachineFileName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="vl_test_platform", type="string", length=255, nullable=true)
     */
    private $vlTestPlatform;

    /**
     * @var int|null
     *
     * @ORM\Column(name="import_machine_name", type="integer", nullable=true)
     */
    private $importMachineName;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="request_exported_datetime", type="datetime", nullable=true)
     */
    private $requestExportedDatetime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="request_imported_datetime", type="datetime", nullable=true)
     */
    private $requestImportedDatetime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="result_exported_datetime", type="datetime", nullable=true)
     */
    private $resultExportedDatetime;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="result_imported_datetime", type="datetime", nullable=true)
     */
    private $resultImportedDatetime;

    /**
     * @var int
     *
     * @ORM\Column(name="temp_sample_status", type="integer", nullable=false)
     */
    private $tempSampleStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_review_by", type="string", length=10, nullable=true)
     */
    private $sampleReviewBy;

    public function getTempSampleId(): ?int
    {
        return $this->tempSampleId;
    }

    public function getFacilityId(): ?int
    {
        return $this->facilityId;
    }

    public function setFacilityId(?int $facilityId): self
    {
        $this->facilityId = $facilityId;

        return $this;
    }

    public function getLabName(): ?string
    {
        return $this->labName;
    }

    public function setLabName(?string $labName): self
    {
        $this->labName = $labName;

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

    public function getLabContactPerson(): ?string
    {
        return $this->labContactPerson;
    }

    public function setLabContactPerson(?string $labContactPerson): self
    {
        $this->labContactPerson = $labContactPerson;

        return $this;
    }

    public function getLabPhoneNumber(): ?string
    {
        return $this->labPhoneNumber;
    }

    public function setLabPhoneNumber(?string $labPhoneNumber): self
    {
        $this->labPhoneNumber = $labPhoneNumber;

        return $this;
    }

    public function getSampleReceivedAtVlLabDatetime(): ?string
    {
        return $this->sampleReceivedAtVlLabDatetime;
    }

    public function setSampleReceivedAtVlLabDatetime(?string $sampleReceivedAtVlLabDatetime): self
    {
        $this->sampleReceivedAtVlLabDatetime = $sampleReceivedAtVlLabDatetime;

        return $this;
    }

    public function getSampleTestedDatetime(): ?string
    {
        return $this->sampleTestedDatetime;
    }

    public function setSampleTestedDatetime(?string $sampleTestedDatetime): self
    {
        $this->sampleTestedDatetime = $sampleTestedDatetime;

        return $this;
    }

    public function getResultDispatchedDatetime(): ?string
    {
        return $this->resultDispatchedDatetime;
    }

    public function setResultDispatchedDatetime(?string $resultDispatchedDatetime): self
    {
        $this->resultDispatchedDatetime = $resultDispatchedDatetime;

        return $this;
    }

    public function getResultReviewedDatetime(): ?string
    {
        return $this->resultReviewedDatetime;
    }

    public function setResultReviewedDatetime(?string $resultReviewedDatetime): self
    {
        $this->resultReviewedDatetime = $resultReviewedDatetime;

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

    public function getApproverComments(): ?string
    {
        return $this->approverComments;
    }

    public function setApproverComments(?string $approverComments): self
    {
        $this->approverComments = $approverComments;

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

    public function getSampleCode(): ?string
    {
        return $this->sampleCode;
    }

    public function setSampleCode(?string $sampleCode): self
    {
        $this->sampleCode = $sampleCode;

        return $this;
    }

    public function getBatchCode(): ?string
    {
        return $this->batchCode;
    }

    public function setBatchCode(?string $batchCode): self
    {
        $this->batchCode = $batchCode;

        return $this;
    }

    public function getBatchCodeKey(): ?string
    {
        return $this->batchCodeKey;
    }

    public function setBatchCodeKey(?string $batchCodeKey): self
    {
        $this->batchCodeKey = $batchCodeKey;

        return $this;
    }

    public function getSampleType(): ?string
    {
        return $this->sampleType;
    }

    public function setSampleType(?string $sampleType): self
    {
        $this->sampleType = $sampleType;

        return $this;
    }

    public function getOrderNumber(): ?string
    {
        return $this->orderNumber;
    }

    public function setOrderNumber(?string $orderNumber): self
    {
        $this->orderNumber = $orderNumber;

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

    public function getResultValueAbsolute(): ?string
    {
        return $this->resultValueAbsolute;
    }

    public function setResultValueAbsolute(?string $resultValueAbsolute): self
    {
        $this->resultValueAbsolute = $resultValueAbsolute;

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

    public function getSampleDetails(): ?string
    {
        return $this->sampleDetails;
    }

    public function setSampleDetails(?string $sampleDetails): self
    {
        $this->sampleDetails = $sampleDetails;

        return $this;
    }

    public function getResultStatus(): ?string
    {
        return $this->resultStatus;
    }

    public function setResultStatus(?string $resultStatus): self
    {
        $this->resultStatus = $resultStatus;

        return $this;
    }

    public function getImportMachineFileName(): ?string
    {
        return $this->importMachineFileName;
    }

    public function setImportMachineFileName(?string $importMachineFileName): self
    {
        $this->importMachineFileName = $importMachineFileName;

        return $this;
    }

    public function getVlTestPlatform(): ?string
    {
        return $this->vlTestPlatform;
    }

    public function setVlTestPlatform(?string $vlTestPlatform): self
    {
        $this->vlTestPlatform = $vlTestPlatform;

        return $this;
    }

    public function getImportMachineName(): ?int
    {
        return $this->importMachineName;
    }

    public function setImportMachineName(?int $importMachineName): self
    {
        $this->importMachineName = $importMachineName;

        return $this;
    }

    public function getRequestExportedDatetime(): ?\DateTimeInterface
    {
        return $this->requestExportedDatetime;
    }

    public function setRequestExportedDatetime(?\DateTimeInterface $requestExportedDatetime): self
    {
        $this->requestExportedDatetime = $requestExportedDatetime;

        return $this;
    }

    public function getRequestImportedDatetime(): ?\DateTimeInterface
    {
        return $this->requestImportedDatetime;
    }

    public function setRequestImportedDatetime(?\DateTimeInterface $requestImportedDatetime): self
    {
        $this->requestImportedDatetime = $requestImportedDatetime;

        return $this;
    }

    public function getResultExportedDatetime(): ?\DateTimeInterface
    {
        return $this->resultExportedDatetime;
    }

    public function setResultExportedDatetime(?\DateTimeInterface $resultExportedDatetime): self
    {
        $this->resultExportedDatetime = $resultExportedDatetime;

        return $this;
    }

    public function getResultImportedDatetime(): ?\DateTimeInterface
    {
        return $this->resultImportedDatetime;
    }

    public function setResultImportedDatetime(?\DateTimeInterface $resultImportedDatetime): self
    {
        $this->resultImportedDatetime = $resultImportedDatetime;

        return $this;
    }

    public function getTempSampleStatus(): ?int
    {
        return $this->tempSampleStatus;
    }

    public function setTempSampleStatus(int $tempSampleStatus): self
    {
        $this->tempSampleStatus = $tempSampleStatus;

        return $this;
    }

    public function getSampleReviewBy(): ?string
    {
        return $this->sampleReviewBy;
    }

    public function setSampleReviewBy(?string $sampleReviewBy): self
    {
        $this->sampleReviewBy = $sampleReviewBy;

        return $this;
    }


}
