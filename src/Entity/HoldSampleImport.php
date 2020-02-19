<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HoldSampleImport
 *
 * @ORM\Table(name="hold_sample_import")
 * @ORM\Entity
 */
class HoldSampleImport
{
    /**
     * @var int
     *
     * @ORM\Column(name="hold_sample_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $holdSampleId;

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
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var int|null
     *
     * @ORM\Column(name="import_batch_tracking", type="integer", nullable=true)
     */
    private $importBatchTracking;

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
     * @var string|null
     *
     * @ORM\Column(name="import_machine_file_name", type="string", length=255, nullable=true)
     */
    private $importMachineFileName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="manual_result_entry", type="string", length=255, nullable=true)
     */
    private $manualResultEntry;

    public function getHoldSampleId(): ?int
    {
        return $this->holdSampleId;
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

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getImportBatchTracking(): ?int
    {
        return $this->importBatchTracking;
    }

    public function setImportBatchTracking(?int $importBatchTracking): self
    {
        $this->importBatchTracking = $importBatchTracking;

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

    public function getImportMachineFileName(): ?string
    {
        return $this->importMachineFileName;
    }

    public function setImportMachineFileName(?string $importMachineFileName): self
    {
        $this->importMachineFileName = $importMachineFileName;

        return $this;
    }

    public function getManualResultEntry(): ?string
    {
        return $this->manualResultEntry;
    }

    public function setManualResultEntry(?string $manualResultEntry): self
    {
        $this->manualResultEntry = $manualResultEntry;

        return $this;
    }


}
