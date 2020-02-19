<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImportConfigMachines
 *
 * @ORM\Table(name="import_config_machines")
 * @ORM\Entity
 */
class ImportConfigMachines
{
    /**
     * @var int
     *
     * @ORM\Column(name="config_machine_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $configMachineId;

    /**
     * @var int
     *
     * @ORM\Column(name="config_id", type="integer", nullable=false)
     */
    private $configId;

    /**
     * @var string
     *
     * @ORM\Column(name="config_machine_name", type="string", length=255, nullable=false)
     */
    private $configMachineName;

    public function getConfigMachineId(): ?int
    {
        return $this->configMachineId;
    }

    public function getConfigId(): ?int
    {
        return $this->configId;
    }

    public function setConfigId(int $configId): self
    {
        $this->configId = $configId;

        return $this;
    }

    public function getConfigMachineName(): ?string
    {
        return $this->configMachineName;
    }

    public function setConfigMachineName(string $configMachineName): self
    {
        $this->configMachineName = $configMachineName;

        return $this;
    }


}
