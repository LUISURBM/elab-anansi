<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserAdminDetails
 *
 * @ORM\Table(name="user_admin_details", uniqueConstraints={@ORM\UniqueConstraint(name="user_admin_id", columns={"user_admin_id"})})
 * @ORM\Entity
 */
class UserAdminDetails
{
    /**
     * @var int
     *
     * @ORM\Column(name="user_admin_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userAdminId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_admin_name", type="string", length=255, nullable=true)
     */
    private $userAdminName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_admin_login", type="string", length=255, nullable=true)
     */
    private $userAdminLogin;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_admin_password", type="string", length=255, nullable=true)
     */
    private $userAdminPassword;

    public function getUserAdminId(): ?int
    {
        return $this->userAdminId;
    }

    public function getUserAdminName(): ?string
    {
        return $this->userAdminName;
    }

    public function setUserAdminName(?string $userAdminName): self
    {
        $this->userAdminName = $userAdminName;

        return $this;
    }

    public function getUserAdminLogin(): ?string
    {
        return $this->userAdminLogin;
    }

    public function setUserAdminLogin(?string $userAdminLogin): self
    {
        $this->userAdminLogin = $userAdminLogin;

        return $this;
    }

    public function getUserAdminPassword(): ?string
    {
        return $this->userAdminPassword;
    }

    public function setUserAdminPassword(?string $userAdminPassword): self
    {
        $this->userAdminPassword = $userAdminPassword;

        return $this;
    }


}
