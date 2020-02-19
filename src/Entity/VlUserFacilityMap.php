<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VlUserFacilityMap
 *
 * @ORM\Table(name="vl_user_facility_map")
 * @ORM\Entity
 */
class VlUserFacilityMap
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_facility_map_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userFacilityMapId;

    /**
     * @var string
     *
     * @ORM\Column(name="user_id", type="string", length=255, nullable=false)
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="facility_id", type="integer", nullable=false)
     */
    private $facilityId;

    public function getUserFacilityMapId(): ?int
    {
        return $this->userFacilityMapId;
    }

    public function getUserId(): ?string
    {
        return $this->userId;
    }

    public function setUserId(string $userId): self
    {
        $this->userId = $userId;

        return $this;
    }

    public function getFacilityId(): ?int
    {
        return $this->facilityId;
    }

    public function setFacilityId(int $facilityId): self
    {
        $this->facilityId = $facilityId;

        return $this;
    }


}
