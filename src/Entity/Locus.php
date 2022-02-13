<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Locus
 *
 * @ORM\Table(name="locus")
 * @ORM\Entity
 */
class Locus
{
    /**
     * @var int
     *
     * @ORM\Column(name="locusid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="locus_locusid_seq", allocationSize=1, initialValue=1)
     */
    private $locusid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="locusname", type="text", nullable=true)
     */
    private $locusname;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Locale", mappedBy="locusid")
     */
    private $localeid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->localeid = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getLocusid(): ?int
    {
        return $this->locusid;
    }

    public function getLocusname(): ?string
    {
        return $this->locusname;
    }

    public function setLocusname(?string $locusname): self
    {
        $this->locusname = $locusname;

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
            $localeid->addLocusid($this);
        }

        return $this;
    }

    public function removeLocaleid(Locale $localeid): self
    {
        if ($this->localeid->removeElement($localeid)) {
            $localeid->removeLocusid($this);
        }

        return $this;
    }

}
