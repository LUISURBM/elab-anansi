<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Classify
 *
 * @ORM\Table(name="classify")
 * @ORM\Entity
 */
class Classify
{
    /**
     * @var int
     *
     * @ORM\Column(name="classify_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $classifyId;

    /**
     * @var string
     *
     * @ORM\Column(name="cname", type="string", length=50, nullable=false)
     */
    private $cname;

    public function getClassifyId(): ?int
    {
        return $this->classifyId;
    }

    public function getCname(): ?string
    {
        return $this->cname;
    }

    public function setCname(string $cname): self
    {
        $this->cname = $cname;

        return $this;
    }


}
