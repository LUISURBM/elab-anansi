<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PackageDetails
 *
 * @ORM\Table(name="package_details")
 * @ORM\Entity
 */
class PackageDetails
{
    /**
     * @var int
     *
     * @ORM\Column(name="package_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $packageId;

    /**
     * @var string
     *
     * @ORM\Column(name="package_code", type="string", length=255, nullable=false)
     */
    private $packageCode;

    /**
     * @var string
     *
     * @ORM\Column(name="added_by", type="string", length=255, nullable=false)
     */
    private $addedBy;

    /**
     * @var string|null
     *
     * @ORM\Column(name="package_status", type="string", length=255, nullable=true)
     */
    private $packageStatus;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="request_created_datetime", type="datetime", nullable=true)
     */
    private $requestCreatedDatetime;

    public function getPackageId(): ?int
    {
        return $this->packageId;
    }

    public function getPackageCode(): ?string
    {
        return $this->packageCode;
    }

    public function setPackageCode(string $packageCode): self
    {
        $this->packageCode = $packageCode;

        return $this;
    }

    public function getAddedBy(): ?string
    {
        return $this->addedBy;
    }

    public function setAddedBy(string $addedBy): self
    {
        $this->addedBy = $addedBy;

        return $this;
    }

    public function getPackageStatus(): ?string
    {
        return $this->packageStatus;
    }

    public function setPackageStatus(?string $packageStatus): self
    {
        $this->packageStatus = $packageStatus;

        return $this;
    }

    public function getRequestCreatedDatetime(): ?\DateTimeInterface
    {
        return $this->requestCreatedDatetime;
    }

    public function setRequestCreatedDatetime(?\DateTimeInterface $requestCreatedDatetime): self
    {
        $this->requestCreatedDatetime = $requestCreatedDatetime;

        return $this;
    }


}
