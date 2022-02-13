<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Country
 *
 * @ORM\Table(name="country")
 * @ORM\Entity
 */
class Country
{
    /**
     * @var int
     *
     * @ORM\Column(name="countryid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="country_countryid_seq", allocationSize=1, initialValue=1)
     */
    private $countryid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="countryname", type="text", nullable=true)
     */
    private $countryname;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Oeuvre", inversedBy="countryid")
     * @ORM\JoinTable(name="oeuvre_country",
     *   joinColumns={
     *     @ORM\JoinColumn(name="countryid", referencedColumnName="countryid")
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

    public function getCountryid(): ?int
    {
        return $this->countryid;
    }

    public function getCountryname(): ?string
    {
        return $this->countryname;
    }

    public function setCountryname(?string $countryname): self
    {
        $this->countryname = $countryname;

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
