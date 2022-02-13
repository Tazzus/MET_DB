<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table(name="region", indexes={@ORM\Index(name="IDX_F62F1766E268216", columns={"countryid"})})
 * @ORM\Entity
 */
class Region
{
    /**
     * @var int
     *
     * @ORM\Column(name="regionid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="region_regionid_seq", allocationSize=1, initialValue=1)
     */
    private $regionid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="regionname", type="text", nullable=true)
     */
    private $regionname;

    /**
     * @var \Country
     *
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="countryid", referencedColumnName="countryid")
     * })
     */
    private $countryid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Oeuvre", inversedBy="regionid")
     * @ORM\JoinTable(name="oeuvre_region",
     *   joinColumns={
     *     @ORM\JoinColumn(name="regionid", referencedColumnName="regionid")
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

    public function getRegionid(): ?int
    {
        return $this->regionid;
    }

    public function getRegionname(): ?string
    {
        return $this->regionname;
    }

    public function setRegionname(?string $regionname): self
    {
        $this->regionname = $regionname;

        return $this;
    }

    public function getCountryid(): ?Country
    {
        return $this->countryid;
    }

    public function setCountryid(?Country $countryid): self
    {
        $this->countryid = $countryid;

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

}
