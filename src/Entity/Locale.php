<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Locale
 *
 * @ORM\Table(name="locale")
 * @ORM\Entity
 */
class Locale
{
    /**
     * @var int
     *
     * @ORM\Column(name="localeid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="locale_localeid_seq", allocationSize=1, initialValue=1)
     */
    private $localeid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="localename", type="text", nullable=true)
     */
    private $localename;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Locus", inversedBy="localeid")
     * @ORM\JoinTable(name="locus_locale",
     *   joinColumns={
     *     @ORM\JoinColumn(name="localeid", referencedColumnName="localeid")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="locusid", referencedColumnName="locusid")
     *   }
     * )
     */
    private $locusid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Excavation", mappedBy="localeid")
     */
    private $excavationid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->locusid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->excavationid = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getLocaleid(): ?int
    {
        return $this->localeid;
    }

    public function getLocalename(): ?string
    {
        return $this->localename;
    }

    public function setLocalename(?string $localename): self
    {
        $this->localename = $localename;

        return $this;
    }

    /**
     * @return Collection|Locus[]
     */
    public function getLocusid(): Collection
    {
        return $this->locusid;
    }

    public function addLocusid(Locus $locusid): self
    {
        if (!$this->locusid->contains($locusid)) {
            $this->locusid[] = $locusid;
        }

        return $this;
    }

    public function removeLocusid(Locus $locusid): self
    {
        $this->locusid->removeElement($locusid);

        return $this;
    }

    /**
     * @return Collection|Excavation[]
     */
    public function getExcavationid(): Collection
    {
        return $this->excavationid;
    }

    public function addExcavationid(Excavation $excavationid): self
    {
        if (!$this->excavationid->contains($excavationid)) {
            $this->excavationid[] = $excavationid;
            $excavationid->addLocaleid($this);
        }

        return $this;
    }

    public function removeExcavationid(Excavation $excavationid): self
    {
        if ($this->excavationid->removeElement($excavationid)) {
            $excavationid->removeLocaleid($this);
        }

        return $this;
    }

}
