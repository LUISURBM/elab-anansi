<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RSampleRejectionReasons
 *
 * @ORM\Table(name="r_sample_rejection_reasons")
 * @ORM\Entity
 */
class RSampleRejectionReasons
{
    /**
     * @var int
     *
     * @ORM\Column(name="rejection_reason_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rejectionReasonId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rejection_reason_name", type="string", length=255, nullable=true)
     */
    private $rejectionReasonName;

    /**
     * @var string
     *
     * @ORM\Column(name="rejection_type", type="string", length=255, nullable=false, options={"default"="general"})
     */
    private $rejectionType = 'general';

    /**
     * @var string|null
     *
     * @ORM\Column(name="rejection_reason_status", type="string", length=255, nullable=true)
     */
    private $rejectionReasonStatus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rejection_reason_code", type="string", length=255, nullable=true)
     */
    private $rejectionReasonCode;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="updated_datetime", type="datetime", nullable=true)
     */
    private $updatedDatetime;

    /**
     * @var int
     *
     * @ORM\Column(name="data_sync", type="integer", nullable=false)
     */
    private $dataSync = '0';

    public function getRejectionReasonId(): ?int
    {
        return $this->rejectionReasonId;
    }

    public function getRejectionReasonName(): ?string
    {
        return $this->rejectionReasonName;
    }

    public function setRejectionReasonName(?string $rejectionReasonName): self
    {
        $this->rejectionReasonName = $rejectionReasonName;

        return $this;
    }

    public function getRejectionType(): ?string
    {
        return $this->rejectionType;
    }

    public function setRejectionType(string $rejectionType): self
    {
        $this->rejectionType = $rejectionType;

        return $this;
    }

    public function getRejectionReasonStatus(): ?string
    {
        return $this->rejectionReasonStatus;
    }

    public function setRejectionReasonStatus(?string $rejectionReasonStatus): self
    {
        $this->rejectionReasonStatus = $rejectionReasonStatus;

        return $this;
    }

    public function getRejectionReasonCode(): ?string
    {
        return $this->rejectionReasonCode;
    }

    public function setRejectionReasonCode(?string $rejectionReasonCode): self
    {
        $this->rejectionReasonCode = $rejectionReasonCode;

        return $this;
    }

    public function getUpdatedDatetime(): ?\DateTimeInterface
    {
        return $this->updatedDatetime;
    }

    public function setUpdatedDatetime(?\DateTimeInterface $updatedDatetime): self
    {
        $this->updatedDatetime = $updatedDatetime;

        return $this;
    }

    public function getDataSync(): ?int
    {
        return $this->dataSync;
    }

    public function setDataSync(int $dataSync): self
    {
        $this->dataSync = $dataSync;

        return $this;
    }


}
