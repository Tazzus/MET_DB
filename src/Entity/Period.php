<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Period
 *
 * @ORM\Table(name="period")
 * @ORM\Entity
 */
class Period
{
    /**
     * @var int
     *
     * @ORM\Column(name="periodid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="period_periodid_seq", allocationSize=1, initialValue=1)
     */
    private $periodid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="periodname", type="text", nullable=true)
     */
    private $periodname;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Reign", mappedBy="periodid")
     */
    private $reignid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reignid = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getPeriodid(): ?int
    {
        return $this->periodid;
    }

    public function getPeriodname(): ?string
    {
        return $this->periodname;
    }

    public function setPeriodname(?string $periodname): self
    {
        $this->periodname = $periodname;

        return $this;
    }

    /**
     * @return Collection|Reign[]
     */
    public function getReignid(): Collection
    {
        return $this->reignid;
    }

    public function addReignid(Reign $reignid): self
    {
        if (!$this->reignid->contains($reignid)) {
            $this->reignid[] = $reignid;
            $reignid->addPeriodid($this);
        }

        return $this;
    }

    public function removeReignid(Reign $reignid): self
    {
        if ($this->reignid->removeElement($reignid)) {
            $reignid->removePeriodid($this);
        }

        return $this;
    }

}
