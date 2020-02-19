<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImportConfig
 *
 * @ORM\Table(name="import_config")
 * @ORM\Entity
 */
class ImportConfig
{
    /**
     * @var int
     *
     * @ORM\Column(name="config_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $configId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="machine_name", type="string", length=255, nullable=true)
     */
    private $machineName;

    /**
     * @var string|null
     *
     * @ORM\Column(name="import_machine_file_name", type="string", length=255, nullable=true)
     */
    private $importMachineFileName;

    /**
     * @var int|null
     *
     * @ORM\Column(name="lower_limit", type="integer", nullable=true)
     */
    private $lowerLimit;

    /**
     * @var int|null
     *
     * @ORM\Column(name="higher_limit", type="integer", nullable=true)
     */
    private $higherLimit;

    /**
     * @var int
     *
     * @ORM\Column(name="max_no_of_samples_in_a_batch", type="integer", nullable=false)
     */
    private $maxNoOfSamplesInABatch;

    /**
     * @var int|null
     *
     * @ORM\Column(name="number_of_in_house_controls", type="integer", nullable=true)
     */
    private $numberOfInHouseControls;

    /**
     * @var int|null
     *
     * @ORM\Column(name="number_of_manufacturer_controls", type="integer", nullable=true)
     */
    private $numberOfManufacturerControls;

    /**
     * @var int|null
     *
     * @ORM\Column(name="number_of_calibrators", type="integer", nullable=true)
     */
    private $numberOfCalibrators;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=45, nullable=false, options={"default"="active"})
     */
    private $status = 'active';

    public function getConfigId(): ?int
    {
        return $this->configId;
    }

    public function getMachineName(): ?string
    {
        return $this->machineName;
    }

    public function setMachineName(?string $machineName): self
    {
        $this->machineName = $machineName;

        return $this;
    }

    public function getImportMachineFileName(): ?string
    {
        return $this->importMachineFileName;
    }

    public function setImportMachineFileName(?string $importMachineFileName): self
    {
        $this->importMachineFileName = $importMachineFileName;

        return $this;
    }

    public function getLowerLimit(): ?int
    {
        return $this->lowerLimit;
    }

    public function setLowerLimit(?int $lowerLimit): self
    {
        $this->lowerLimit = $lowerLimit;

        return $this;
    }

    public function getHigherLimit(): ?int
    {
        return $this->higherLimit;
    }

    public function setHigherLimit(?int $higherLimit): self
    {
        $this->higherLimit = $higherLimit;

        return $this;
    }

    public function getMaxNoOfSamplesInABatch(): ?int
    {
        return $this->maxNoOfSamplesInABatch;
    }

    public function setMaxNoOfSamplesInABatch(int $maxNoOfSamplesInABatch): self
    {
        $this->maxNoOfSamplesInABatch = $maxNoOfSamplesInABatch;

        return $this;
    }

    public function getNumberOfInHouseControls(): ?int
    {
        return $this->numberOfInHouseControls;
    }

    public function setNumberOfInHouseControls(?int $numberOfInHouseControls): self
    {
        $this->numberOfInHouseControls = $numberOfInHouseControls;

        return $this;
    }

    public function getNumberOfManufacturerControls(): ?int
    {
        return $this->numberOfManufacturerControls;
    }

    public function setNumberOfManufacturerControls(?int $numberOfManufacturerControls): self
    {
        $this->numberOfManufacturerControls = $numberOfManufacturerControls;

        return $this;
    }

    public function getNumberOfCalibrators(): ?int
    {
        return $this->numberOfCalibrators;
    }

    public function setNumberOfCalibrators(?int $numberOfCalibrators): self
    {
        $this->numberOfCalibrators = $numberOfCalibrators;

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
