<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * City
 *
 * @ORM\Table(name="city", indexes={@ORM\Index(name="IDX_2D5B02346E268216", columns={"countryid"})})
 * @ORM\Entity
 */
class City
{
    /**
     * @var int
     *
     * @ORM\Column(name="cityid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="city_cityid_seq", allocationSize=1, initialValue=1)
     */
    private $cityid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="cityname", type="text", nullable=true)
     */
    private $cityname;

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
     * @ORM\ManyToMany(targetEntity="Oeuvre", inversedBy="cityid")
     * @ORM\JoinTable(name="oeuvre_city",
     *   joinColumns={
     *     @ORM\JoinColumn(name="cityid", referencedColumnName="cityid")
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

    public function getCityid(): ?int
    {
        return $this->cityid;
    }

    public function getCityname(): ?string
    {
        return $this->cityname;
    }

    public function setCityname(?string $cityname): self
    {
        $this->cityname = $cityname;

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

    public function __toString(): string
    {
        if($this->cityname == null){
            return "";
        } else {
            return $this->cityname;
        }
    }

}
