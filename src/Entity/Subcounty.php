<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Subcounty
 *
 * @ORM\Table(name="subcounty", indexes={@ORM\Index(name="IDX_3E9E7700CE674C8", columns={"regionid"})})
 * @ORM\Entity
 */
class Subcounty
{
    /**
     * @var int
     *
     * @ORM\Column(name="subcountyid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="subcounty_subcountyid_seq", allocationSize=1, initialValue=1)
     */
    private $subcountyid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subcountyname", type="text", nullable=true)
     */
    private $subcountyname;

    /**
     * @var \Region
     *
     * @ORM\ManyToOne(targetEntity="Region")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="regionid", referencedColumnName="regionid")
     * })
     */
    private $regionid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Oeuvre", inversedBy="subcountyid")
     * @ORM\JoinTable(name="oeuvre_subcounty",
     *   joinColumns={
     *     @ORM\JoinColumn(name="subcountyid", referencedColumnName="subcountyid")
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

    public function getSubcountyid(): ?int
    {
        return $this->subcountyid;
    }

    public function getSubcountyname(): ?string
    {
        return $this->subcountyname;
    }

    public function setSubcountyname(?string $subcountyname): self
    {
        $this->subcountyname = $subcountyname;

        return $this;
    }

    public function getRegionid(): ?Region
    {
        return $this->regionid;
    }

    public function setRegionid(?Region $regionid): self
    {
        $this->regionid = $regionid;

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
