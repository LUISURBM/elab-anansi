<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VlTreshhold
 *
 * @ORM\Table(name="vl_treshhold")
 * @ORM\Entity
 */
class VlTreshhold
{
    /**
     * @var int
     *
     * @ORM\Column(name="thresh_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $threshId;

    /**
     * @var int
     *
     * @ORM\Column(name="facility_id", type="integer", nullable=false)
     */
    private $facilityId;

    /**
     * @var int
     *
     * @ORM\Column(name="current_tresh", type="integer", nullable=false)
     */
    private $currentTresh;

    /**
     * @var int
     *
     * @ORM\Column(name="total_tresh", type="integer", nullable=false)
     */
    private $totalTresh;

    public function getThreshId(): ?int
    {
        return $this->threshId;
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

    public function getCurrentTresh(): ?int
    {
        return $this->currentTresh;
    }

    public function setCurrentTresh(int $currentTresh): self
    {
        $this->currentTresh = $currentTresh;

        return $this;
    }

    public function getTotalTresh(): ?int
    {
        return $this->totalTresh;
    }

    public function setTotalTresh(int $totalTresh): self
    {
        $this->totalTresh = $totalTresh;

        return $this;
    }


}
