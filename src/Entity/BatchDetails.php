<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BatchDetails
 *
 * @ORM\Table(name="batch_details")
 * @ORM\Entity
 */
class BatchDetails
{
    /**
     * @var int
     *
     * @ORM\Column(name="batch_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $batchId;

    /**
     * @var int
     *
     * @ORM\Column(name="machine", type="integer", nullable=false)
     */
    private $machine;

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
     * @var string
     *
     * @ORM\Column(name="batch_status", type="string", length=255, nullable=false, options={"default"="completed"})
     */
    private $batchStatus = 'completed';

    /**
     * @var string
     *
     * @ORM\Column(name="sent_mail", type="string", length=100, nullable=false, options={"default"="no"})
     */
    private $sentMail = 'no';

    /**
     * @var string|null
     *
     * @ORM\Column(name="label_order", type="text", length=65535, nullable=true)
     */
    private $labelOrder;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="request_created_datetime", type="datetime", nullable=false)
     */
    private $requestCreatedDatetime;

    /**
     * @var int
     *
     * @ORM\Column(name="post_notifies", type="integer", nullable=false)
     */
    private $postNotifies;

    /**
     * @var int|null
     *
     * @ORM\Column(name="siteID", type="integer", nullable=true)
     */
    private $siteid;

    public function getBatchId(): ?int
    {
        return $this->batchId;
    }

    public function getMachine(): ?int
    {
        return $this->machine;
    }

    public function setMachine(int $machine): self
    {
        $this->machine = $machine;

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

    public function getBatchStatus(): ?string
    {
        return $this->batchStatus;
    }

    public function setBatchStatus(string $batchStatus): self
    {
        $this->batchStatus = $batchStatus;

        return $this;
    }

    public function getSentMail(): ?string
    {
        return $this->sentMail;
    }

    public function setSentMail(string $sentMail): self
    {
        $this->sentMail = $sentMail;

        return $this;
    }

    public function getLabelOrder(): ?string
    {
        return $this->labelOrder;
    }

    public function setLabelOrder(?string $labelOrder): self
    {
        $this->labelOrder = $labelOrder;

        return $this;
    }

    public function getRequestCreatedDatetime(): ?\DateTimeInterface
    {
        return $this->requestCreatedDatetime;
    }

    public function setRequestCreatedDatetime(\DateTimeInterface $requestCreatedDatetime): self
    {
        $this->requestCreatedDatetime = $requestCreatedDatetime;

        return $this;
    }

    public function getPostNotifies(): ?int
    {
        return $this->postNotifies;
    }

    public function setPostNotifies(int $postNotifies): self
    {
        $this->postNotifies = $postNotifies;

        return $this;
    }

    public function getSiteid(): ?int
    {
        return $this->siteid;
    }

    public function setSiteid(?int $siteid): self
    {
        $this->siteid = $siteid;

        return $this;
    }


}
