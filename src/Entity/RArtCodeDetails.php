<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RArtCodeDetails
 *
 * @ORM\Table(name="r_art_code_details")
 * @ORM\Entity
 */
class RArtCodeDetails
{
    /**
     * @var int
     *
     * @ORM\Column(name="art_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $artId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="art_code", type="string", length=255, nullable=true)
     */
    private $artCode;

    /**
     * @var int
     *
     * @ORM\Column(name="parent_art", type="integer", nullable=false)
     */
    private $parentArt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="headings", type="string", length=255, nullable=true)
     */
    private $headings;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nation_identifier", type="string", length=255, nullable=true)
     */
    private $nationIdentifier;

    /**
     * @var string
     *
     * @ORM\Column(name="art_status", type="string", length=45, nullable=false, options={"default"="active"})
     */
    private $artStatus = 'active';

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
    private $dataSync = '0';

    public function getArtId(): ?int
    {
        return $this->artId;
    }

    public function getArtCode(): ?string
    {
        return $this->artCode;
    }

    public function setArtCode(?string $artCode): self
    {
        $this->artCode = $artCode;

        return $this;
    }

    public function getParentArt(): ?int
    {
        return $this->parentArt;
    }

    public function setParentArt(int $parentArt): self
    {
        $this->parentArt = $parentArt;

        return $this;
    }

    public function getHeadings(): ?string
    {
        return $this->headings;
    }

    public function setHeadings(?string $headings): self
    {
        $this->headings = $headings;

        return $this;
    }

    public function getNationIdentifier(): ?string
    {
        return $this->nationIdentifier;
    }

    public function setNationIdentifier(?string $nationIdentifier): self
    {
        $this->nationIdentifier = $nationIdentifier;

        return $this;
    }

    public function getArtStatus(): ?string
    {
        return $this->artStatus;
    }

    public function setArtStatus(string $artStatus): self
    {
        $this->artStatus = $artStatus;

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
