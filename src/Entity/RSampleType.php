<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RSampleType
 *
 * @ORM\Table(name="r_sample_type")
 * @ORM\Entity
 */
class RSampleType
{
    /**
     * @var int
     *
     * @ORM\Column(name="sample_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $sampleId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sample_name", type="string", length=255, nullable=true)
     */
    private $sampleName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=true)
     */
    private $status;

    /**
     * @var int
     *
     * @ORM\Column(name="data_sync", type="integer", nullable=false)
     */
    private $dataSync = '0';

    public function getSampleId(): ?int
    {
        return $this->sampleId;
    }

    public function getSampleName(): ?string
    {
        return $this->sampleName;
    }

    public function setSampleName(?string $sampleName): self
    {
        $this->sampleName = $sampleName;

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
