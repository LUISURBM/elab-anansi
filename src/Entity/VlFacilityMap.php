<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VlFacilityMap
 *
 * @ORM\Table(name="vl_facility_map", indexes={@ORM\Index(name="vl_facility_map_ibfk_1", columns={"vl_lab_id"}), @ORM\Index(name="vl_facility_map_ibfk_2", columns={"facility_id"})})
 * @ORM\Entity
 */
class VlFacilityMap
{
    /**
     * @var int
     *
     * @ORM\Column(name="facility_map_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $facilityMapId;

    /**
     * @var \FacilityDetails2
     *
     * @ORM\ManyToOne(targetEntity="FacilityDetails2")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="vl_lab_id", referencedColumnName="facility_id")
     * })
     */
    private $vlLab;

    /**
     * @var \FacilityDetails2
     *
     * @ORM\ManyToOne(targetEntity="FacilityDetails2")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="facility_id", referencedColumnName="facility_id")
     * })
     */
    private $facility;

    public function getFacilityMapId(): ?int
    {
        return $this->facilityMapId;
    }

    public function getVlLab(): ?FacilityDetails2
    {
        return $this->vlLab;
    }

    public function setVlLab(?FacilityDetails2 $vlLab): self
    {
        $this->vlLab = $vlLab;

        return $this;
    }

    public function getFacility(): ?FacilityDetails2
    {
        return $this->facility;
    }

    public function setFacility(?FacilityDetails2 $facility): self
    {
        $this->facility = $facility;

        return $this;
    }


}
