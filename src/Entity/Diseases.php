<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Diseases
 *
 * @ORM\Table(name="diseases")
 * @ORM\Entity
 */
class Diseases
{
    /**
     * @var int
     *
     * @ORM\Column(name="diseases_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $diseasesId;

    /**
     * @var string
     *
     * @ORM\Column(name="dname", type="string", length=50, nullable=false)
     */
    private $dname;

    public function getDiseasesId(): ?int
    {
        return $this->diseasesId;
    }

    public function getDname(): ?string
    {
        return $this->dname;
    }

    public function setDname(string $dname): self
    {
        $this->dname = $dname;

        return $this;
    }


}
