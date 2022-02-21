<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Classification
 *
 * @ORM\Table(name="classification")
 * @ORM\Entity
 */
class Classification
{
    /**
     * @var int
     *
     * @ORM\Column(name="classificationid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="classification_classificationid_seq", allocationSize=1, initialValue=1)
     */
    private $classificationid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="classification", type="text", nullable=true)
     */
    private $classification;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Oeuvre", inversedBy="classificationid")
     * @ORM\JoinTable(name="classification_oeuvre",
     *   joinColumns={
     *     @ORM\JoinColumn(name="classificationid", referencedColumnName="classificationid")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="oeuvreid", referencedColumnName="oeuvreid")
     *   }
     * )
     */
    private $oeuvreid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->oeuvreid = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getClassificationid(): ?int
    {
        return $this->classificationid;
    }

    public function getClassification(): ?string
    {
        return $this->classification;
    }

    public function setClassification(?string $classification): self
    {
        $this->classification = $classification;

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
        }

        return $this;
    }

    public function removeOeuvreid(Oeuvre $oeuvreid): self
    {
        $this->oeuvreid->removeElement($oeuvreid);

        return $this;
    }

    public function __toString(): string
    {
        if($this->classification == null){
            return "";
        } else {
            return $this->classification;
        }
    }

}
