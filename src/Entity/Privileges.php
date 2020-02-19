<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Privileges
 *
 * @ORM\Table(name="privileges", indexes={@ORM\Index(name="privileges_ibfk_1", columns={"resource_id"})})
 * @ORM\Entity
 */
class Privileges
{
    /**
     * @var int
     *
     * @ORM\Column(name="privilege_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $privilegeId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="privilege_name", type="string", length=255, nullable=true)
     */
    private $privilegeName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="display_name", type="string", length=255, nullable=true)
     */
    private $displayName;

    /**
     * @var \Resources
     *
     * @ORM\ManyToOne(targetEntity="Resources")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="resource_id", referencedColumnName="resource_id")
     * })
     */
    private $resource;

    public function getPrivilegeId(): ?int
    {
        return $this->privilegeId;
    }

    public function getPrivilegeName(): ?string
    {
        return $this->privilegeName;
    }

    public function setPrivilegeName(?string $privilegeName): self
    {
        $this->privilegeName = $privilegeName;

        return $this;
    }

    public function getDisplayName(): ?string
    {
        return $this->displayName;
    }

    public function setDisplayName(?string $displayName): self
    {
        $this->displayName = $displayName;

        return $this;
    }

    public function getResource(): ?Resources
    {
        return $this->resource;
    }

    public function setResource(?Resources $resource): self
    {
        $this->resource = $resource;

        return $this;
    }


}
