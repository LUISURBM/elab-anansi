<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RSpecimenPickers
 *
 * @ORM\Table(name="r_specimen_pickers")
 * @ORM\Entity
 */
class RSpecimenPickers
{
    /**
     * @var int
     *
     * @ORM\Column(name="picker_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $pickerId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="picker_name", type="string", length=255, nullable=true)
     */
    private $pickerName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=true)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="site", type="integer", nullable=false)
     */
    private $site = '0';

    public function getPickerId(): ?int
    {
        return $this->pickerId;
    }

    public function getPickerName(): ?string
    {
        return $this->pickerName;
    }

    public function setPickerName(?string $pickerName): self
    {
        $this->pickerName = $pickerName;

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

    public function getSite(): ?int
    {
        return $this->site;
    }

    public function setSite(int $site): self
    {
        $this->site = $site;

        return $this;
    }


}
