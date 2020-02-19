<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RSampleControls
 *
 * @ORM\Table(name="r_sample_controls")
 * @ORM\Entity
 */
class RSampleControls
{
    /**
     * @var int
     *
     * @ORM\Column(name="r_sample_control_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rSampleControlId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="r_sample_control_name", type="string", length=255, nullable=true)
     */
    private $rSampleControlName;

    public function getRSampleControlId(): ?int
    {
        return $this->rSampleControlId;
    }

    public function getRSampleControlName(): ?string
    {
        return $this->rSampleControlName;
    }

    public function setRSampleControlName(?string $rSampleControlName): self
    {
        $this->rSampleControlName = $rSampleControlName;

        return $this;
    }


}
