<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacilityDetails
 *
 * @ORM\Table(name="facility_details")
 * @ORM\Entity
 */
class FacilityDetails
{
    /**
     * @var int
     *
     * @ORM\Column(name="facility_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $facilityId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facility_name", type="string", length=255, nullable=true)
     */
    private $facilityName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facility_code", type="string", length=255, nullable=true)
     */
    private $facilityCode;

    /**
     * @var string
     *
     * @ORM\Column(name="vlsm_instance_id", type="string", length=255, nullable=false)
     */
    private $vlsmInstanceId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="other_id", type="string", length=255, nullable=true)
     */
    private $otherId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facility_emails", type="string", length=255, nullable=true)
     */
    private $facilityEmails;

    /**
     * @var string|null
     *
     * @ORM\Column(name="report_email", type="text", length=65535, nullable=true)
     */
    private $reportEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="contact_person", type="string", length=255, nullable=true)
     */
    private $contactPerson;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facility_mobile_numbers", type="string", length=255, nullable=true)
     */
    private $facilityMobileNumbers;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facility_state", type="string", length=255, nullable=true)
     */
    private $facilityState;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facility_district", type="string", length=255, nullable=true)
     */
    private $facilityDistrict;

    /**
     * @var string|null
     *
     * @ORM\Column(name="facility_hub_name", type="string", length=255, nullable=true)
     */
    private $facilityHubName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="latitude", type="string", length=255, nullable=true)
     */
    private $latitude;

    /**
     * @var string|null
     *
     * @ORM\Column(name="longitude", type="string", length=255, nullable=true)
     */
    private $longitude;

    /**
     * @var int|null
     *
     * @ORM\Column(name="facility_type", type="integer", nullable=true)
     */
    private $facilityType;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

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
    private $dataSync;

    public function getFacilityId(): ?int
    {
        return $this->facilityId;
    }

    public function getFacilityName(): ?string
    {
        return $this->facilityName;
    }

    public function setFacilityName(?string $facilityName): self
    {
        $this->facilityName = $facilityName;

        return $this;
    }

    public function getFacilityCode(): ?string
    {
        return $this->facilityCode;
    }

    public function setFacilityCode(?string $facilityCode): self
    {
        $this->facilityCode = $facilityCode;

        return $this;
    }

    public function getVlsmInstanceId(): ?string
    {
        return $this->vlsmInstanceId;
    }

    public function setVlsmInstanceId(string $vlsmInstanceId): self
    {
        $this->vlsmInstanceId = $vlsmInstanceId;

        return $this;
    }

    public function getOtherId(): ?string
    {
        return $this->otherId;
    }

    public function setOtherId(?string $otherId): self
    {
        $this->otherId = $otherId;

        return $this;
    }

    public function getFacilityEmails(): ?string
    {
        return $this->facilityEmails;
    }

    public function setFacilityEmails(?string $facilityEmails): self
    {
        $this->facilityEmails = $facilityEmails;

        return $this;
    }

    public function getReportEmail(): ?string
    {
        return $this->reportEmail;
    }

    public function setReportEmail(?string $reportEmail): self
    {
        $this->reportEmail = $reportEmail;

        return $this;
    }

    public function getContactPerson(): ?string
    {
        return $this->contactPerson;
    }

    public function setContactPerson(?string $contactPerson): self
    {
        $this->contactPerson = $contactPerson;

        return $this;
    }

    public function getFacilityMobileNumbers(): ?string
    {
        return $this->facilityMobileNumbers;
    }

    public function setFacilityMobileNumbers(?string $facilityMobileNumbers): self
    {
        $this->facilityMobileNumbers = $facilityMobileNumbers;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getFacilityState(): ?string
    {
        return $this->facilityState;
    }

    public function setFacilityState(?string $facilityState): self
    {
        $this->facilityState = $facilityState;

        return $this;
    }

    public function getFacilityDistrict(): ?string
    {
        return $this->facilityDistrict;
    }

    public function setFacilityDistrict(?string $facilityDistrict): self
    {
        $this->facilityDistrict = $facilityDistrict;

        return $this;
    }

    public function getFacilityHubName(): ?string
    {
        return $this->facilityHubName;
    }

    public function setFacilityHubName(?string $facilityHubName): self
    {
        $this->facilityHubName = $facilityHubName;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getFacilityType(): ?int
    {
        return $this->facilityType;
    }

    public function setFacilityType(?int $facilityType): self
    {
        $this->facilityType = $facilityType;

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
