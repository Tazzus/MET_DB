<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Excavation
 *
 * @ORM\Table(name="excavation")
 * @ORM\Entity
 */
class Excavation
{
    /**
     * @var int
     *
     * @ORM\Column(name="excavationid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="excavation_excavationid_seq", allocationSize=1, initialValue=1)
     */
    private $excavationid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="excavationname", type="text", nullable=true)
     */
    private $excavationname;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Locale", inversedBy="excavationid")
     * @ORM\JoinTable(name="excavation_locale",
     *   joinColumns={
     *     @ORM\JoinColumn(name="excavationid", referencedColumnName="excavationid")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="localeid", referencedColumnName="localeid")
     *   }
     * )
     */
    private $localeid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->localeid = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getExcavationid(): ?int
    {
        return $this->excavationid;
    }

    public function getExcavationname(): ?string
    {
        return $this->excavationname;
    }

    public function setExcavationname(?string $excavationname): self
    {
        $this->excavationname = $excavationname;

        return $this;
    }

    /**
     * @return Collection|Locale[]
     */
    public function getLocaleid(): Collection
    {
        return $this->localeid;
    }

    public function addLocaleid(Locale $localeid): self
    {
        if (!$this->localeid->contains($localeid)) {
            $this->localeid[] = $localeid;
        }

        return $this;
    }

    public function removeLocaleid(Locale $localeid): self
    {
        $this->localeid->removeElement($localeid);

        return $this;
    }

    public function __toString(): string
    {
        if($this->excavationname == null){
            return "";
        } else {
            return $this->excavationname;
        }
    }

}
