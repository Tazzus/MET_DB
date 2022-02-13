<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Geographytype
 *
 * @ORM\Table(name="geographytype")
 * @ORM\Entity
 */
class Geographytype
{
    /**
     * @var int
     *
     * @ORM\Column(name="geographytypeid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="geographytype_geographytypeid_seq", allocationSize=1, initialValue=1)
     */
    private $geographytypeid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="geographytype", type="text", nullable=true)
     */
    private $geographytype;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Oeuvre", mappedBy="geographytypeid")
     */
    private $oeuvreid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->oeuvreid = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getGeographytypeid(): ?int
    {
        return $this->geographytypeid;
    }

    public function getGeographytype(): ?string
    {
        return $this->geographytype;
    }

    public function setGeographytype(?string $geographytype): self
    {
        $this->geographytype = $geographytype;

        return $this;
    }

    /**
     * @return Collection|Oeuvre[]
     */
    public function getOeuvreid(): Collection
    {
        return $this->oeuvreid;
    }

    public function addOeuvreid(Oeuvre $oeuvreid): self
    {
        if (!$this->oeuvreid->contains($oeuvreid)) {
            $this->oeuvreid[] = $oeuvreid;
            $oeuvreid->addGeographytypeid($this);
        }

        return $this;
    }

    public function removeOeuvreid(Oeuvre $oeuvreid): self
    {
        if ($this->oeuvreid->removeElement($oeuvreid)) {
            $oeuvreid->removeGeographytypeid($this);
        }

        return $this;
    }

}
