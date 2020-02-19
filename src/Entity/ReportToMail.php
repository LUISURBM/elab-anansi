<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReportToMail
 *
 * @ORM\Table(name="report_to_mail", indexes={@ORM\Index(name="report_to_mail_ibfk_1", columns={"batch_id"})})
 * @ORM\Entity
 */
class ReportToMail
{
    /**
     * @var int
     *
     * @ORM\Column(name="report_mail_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $reportMailId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subject", type="string", length=255, nullable=true)
     */
    private $subject;

    /**
     * @var string|null
     *
     * @ORM\Column(name="to_mail", type="string", length=255, nullable=true)
     */
    private $toMail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="encrypt", type="string", length=255, nullable=true)
     */
    private $encrypt;

    /**
     * @var string|null
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=true)
     */
    private $password;

    /**
     * @var string|null
     *
     * @ORM\Column(name="comment", type="string", length=255, nullable=true)
     */
    private $comment;

    /**
     * @var \BatchDetails
     *
     * @ORM\ManyToOne(targetEntity="BatchDetails")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="batch_id", referencedColumnName="batch_id")
     * })
     */
    private $batch;

    public function getReportMailId(): ?int
    {
        return $this->reportMailId;
    }

    public function getSubject(): ?string
    {
        return $this->subject;
    }

    public function setSubject(?string $subject): self
    {
        $this->subject = $subject;

        return $this;
    }

    public function getToMail(): ?string
    {
        return $this->toMail;
    }

    public function setToMail(?string $toMail): self
    {
        $this->toMail = $toMail;

        return $this;
    }

    public function getEncrypt(): ?string
    {
        return $this->encrypt;
    }

    public function setEncrypt(?string $encrypt): self
    {
        $this->encrypt = $encrypt;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getComment(): ?string
    {
        return $this->comment;
    }

    public function setComment(?string $comment): self
    {
        $this->comment = $comment;

        return $this;
    }

    public function getBatch(): ?BatchDetails
    {
        return $this->batch;
    }

    public function setBatch(?BatchDetails $batch): self
    {
        $this->batch = $batch;

        return $this;
    }


}
