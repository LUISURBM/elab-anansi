<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RSampleStatus
 *
 * @ORM\Table(name="r_sample_status")
 * @ORM\Entity
 */
class RSampleStatus
{
    /**
     * @var int
     *
     * @ORM\Column(name="status_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $statusId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status_name", type="string", length=255, nullable=true)
     */
    private $statusName;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=false, options={"default"="active"})
     */
    private $status = 'active';

    public function getStatusId(): ?int
    {
        return $this->statusId;
    }

    public function getStatusName(): ?string
    {
        return $this->statusName;
    }

    public function setStatusName(?string $statusName): self
    {
        $this->statusName = $statusName;

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
