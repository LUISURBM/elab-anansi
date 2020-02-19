<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SVlsmInstance
 *
 * @ORM\Table(name="s_vlsm_instance", uniqueConstraints={@ORM\UniqueConstraint(name="vl_instance_id", columns={"vlsm_instance_id"})})
 * @ORM\Entity
 */
class SVlsmInstance
{
    /**
     * @var int
     *
     * @ORM\Column(name="vlsm_instance_id", type="bigint", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $vlsmInstanceId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="instance_facility_name", type="string", length=255, nullable=true)
     */
    private $instanceFacilityName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="instance_facility_code", type="string", length=255, nullable=true)
     */
    private $instanceFacilityCode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="instance_facility_type", type="string", length=255, nullable=true)
     */
    private $instanceFacilityType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="instance_facility_logo", type="string", length=255, nullable=true)
     */
    private $instanceFacilityLogo;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="instance_added_on", type="datetime", nullable=true)
     */
    private $instanceAddedOn;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="instance_update_on", type="datetime", nullable=true)
     */
    private $instanceUpdateOn;

    /**
     * @var string|null
     *
     * @ORM\Column(name="instance_mac_address", type="string", length=255, nullable=true)
     */
    private $instanceMacAddress;

    public function getVlsmInstanceId(): ?string
    {
        return $this->vlsmInstanceId;
    }

    public function getInstanceFacilityName(): ?string
    {
        return $this->instanceFacilityName;
    }

    public function setInstanceFacilityName(?string $instanceFacilityName): self
    {
        $this->instanceFacilityName = $instanceFacilityName;

        return $this;
    }

    public function getInstanceFacilityCode(): ?string
    {
        return $this->instanceFacilityCode;
    }

    public function setInstanceFacilityCode(?string $instanceFacilityCode): self
    {
        $this->instanceFacilityCode = $instanceFacilityCode;

        return $this;
    }

    public function getInstanceFacilityType(): ?string
    {
        return $this->instanceFacilityType;
    }

    public function setInstanceFacilityType(?string $instanceFacilityType): self
    {
        $this->instanceFacilityType = $instanceFacilityType;

        return $this;
    }

    public function getInstanceFacilityLogo(): ?string
    {
        return $this->instanceFacilityLogo;
    }

    public function setInstanceFacilityLogo(?string $instanceFacilityLogo): self
    {
        $this->instanceFacilityLogo = $instanceFacilityLogo;

        return $this;
    }

    public function getInstanceAddedOn(): ?\DateTimeInterface
    {
        return $this->instanceAddedOn;
    }

    public function setInstanceAddedOn(?\DateTimeInterface $instanceAddedOn): self
    {
        $this->instanceAddedOn = $instanceAddedOn;

        return $this;
    }

    public function getInstanceUpdateOn(): ?\DateTimeInterface
    {
        return $this->instanceUpdateOn;
    }

    public function setInstanceUpdateOn(?\DateTimeInterface $instanceUpdateOn): self
    {
        $this->instanceUpdateOn = $instanceUpdateOn;

        return $this;
    }

    public function getInstanceMacAddress(): ?string
    {
        return $this->instanceMacAddress;
    }

    public function setInstanceMacAddress(?string $instanceMacAddress): self
    {
        $this->instanceMacAddress = $instanceMacAddress;

        return $this;
    }


}
