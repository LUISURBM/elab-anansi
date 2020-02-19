<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RolesPrivilegesMap
 *
 * @ORM\Table(name="roles_privileges_map")
 * @ORM\Entity
 */
class RolesPrivilegesMap
{
    /**
     * @var int
     *
     * @ORM\Column(name="map_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mapId;

    /**
     * @var int
     *
     * @ORM\Column(name="role_id", type="integer", nullable=false)
     */
    private $roleId;

    /**
     * @var int|null
     *
     * @ORM\Column(name="privilege_id", type="integer", nullable=true)
     */
    private $privilegeId;

    public function getMapId(): ?int
    {
        return $this->mapId;
    }

    public function getRoleId(): ?int
    {
        return $this->roleId;
    }

    public function setRoleId(int $roleId): self
    {
        $this->roleId = $roleId;

        return $this;
    }

    public function getPrivilegeId(): ?int
    {
        return $this->privilegeId;
    }

    public function setPrivilegeId(?int $privilegeId): self
    {
        $this->privilegeId = $privilegeId;

        return $this;
    }


}
