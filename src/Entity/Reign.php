<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Reign
 *
 * @ORM\Table(name="reign")
 * @ORM\Entity
 */
class Reign
{
    /**
     * @var int
     *
     * @ORM\Column(name="reignid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="reign_reignid_seq", allocationSize=1, initialValue=1)
     */
    private $reignid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="leadername", type="text", nullable=true)
     */
    private $leadername;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Period", inversedBy="reignid")
     * @ORM\JoinTable(name="reign_period",
     *   joinColumns={
     *     @ORM\JoinColumn(name="reignid", referencedColumnName="reignid")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="periodid", referencedColumnName="periodid")
     *   }
     * )
     */
    private $periodid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->periodid = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getReignid(): ?int
    {
        return $this->reignid;
    }

    public function getLeadername(): ?string
    {
        return $this->leadername;
    }

    public function setLeadername(?string $leadername): self
    {
        $this->leadername = $leadername;

        return $this;
    }

    /**
     * @return Collection|Period[]
     */
    public function getPeriodid(): Collection
    {
        return $this->periodid;
    }

    public function addPeriodid(Period $periodid): self
    {
        if (!$this->periodid->contains($periodid)) {
            $this->periodid[] = $periodid;
        }

        return $this;
    }

    public function removePeriodid(Period $periodid): self
    {
        $this->periodid->removeElement($periodid);

        return $this;
    }

    public function __toString(): string
    {
        if($this->leadername == null){
            return "";
        } else {
            return $this->leadername;
        }
    }

}
