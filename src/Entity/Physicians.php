<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Physicians
 *
 * @ORM\Table(name="physicians")
 * @ORM\Entity
 */
class Physicians
{
    /**
     * @var int
     *
     * @ORM\Column(name="physician_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $physicianId;

    /**
     * @var string
     *
     * @ORM\Column(name="physician_name", type="string", length=225, nullable=false)
     */
    private $physicianName;

    /**
     * @var string
     *
     * @ORM\Column(name="physician_email", type="string", length=225, nullable=false)
     */
    private $physicianEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="physician_phone", type="string", length=15, nullable=false)
     */
    private $physicianPhone;

    /**
     * @var int
     *
     * @ORM\Column(name="physician_site", type="integer", nullable=false)
     */
    private $physicianSite;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=15, nullable=false, options={"default"="active"})
     */
    private $status = 'active';

    public function getPhysicianId(): ?int
    {
        return $this->physicianId;
    }

    public function getPhysicianName(): ?string
    {
        return $this->physicianName;
    }

    public function setPhysicianName(string $physicianName): self
    {
        $this->physicianName = $physicianName;

        return $this;
    }

    public function getPhysicianEmail(): ?string
    {
        return $this->physicianEmail;
    }

    public function setPhysicianEmail(string $physicianEmail): self
    {
        $this->physicianEmail = $physicianEmail;

        return $this;
    }

    public function getPhysicianPhone(): ?string
    {
        return $this->physicianPhone;
    }

    public function setPhysicianPhone(string $physicianPhone): self
    {
        $this->physicianPhone = $physicianPhone;

        return $this;
    }

    public function getPhysicianSite(): ?int
    {
        return $this->physicianSite;
    }

    public function setPhysicianSite(int $physicianSite): self
    {
        $this->physicianSite = $physicianSite;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }


}
