<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Oeuvre
 *
 * @ORM\Table(name="oeuvre", indexes={@ORM\Index(name="IDX_35FE2EFE67EE0704", columns={"titleid"}), @ORM\Index(name="IDX_35FE2EFECF6097D", columns={"objectid"}), @ORM\Index(name="IDX_35FE2EFEFB0A24B1", columns={"cultureid"}), @ORM\Index(name="IDX_35FE2EFEC44E070C", columns={"galleryid"}), @ORM\Index(name="IDX_35FE2EFED50163E", columns={"departementid"}), @ORM\Index(name="IDX_35FE2EFE104F654B", columns={"periodid"}), @ORM\Index(name="IDX_35FE2EFE2FCBAF5", columns={"locusid"}), @ORM\Index(name="IDX_35FE2EFEFA92897E", columns={"tagid"}), @ORM\Index(name="IDX_35FE2EFE646361CD", columns={"rightsandreproductionid"}), @ORM\Index(name="IDX_35FE2EFE346256FA", columns={"repositoryid"}), @ORM\Index(name="IDX_35FE2EFE9F0CFBFD", columns={"creditid"}), @ORM\Index(name="IDX_35FE2EFEFF470CE3", columns={"constituentid"}), @ORM\Index(name="IDX_35FE2EFE628EB528", columns={"excavationid"}), @ORM\Index(name="IDX_35FE2EFEF545D7FC", columns={"portfolioid"}), @ORM\Index(name="IDX_35FE2EFE1A9F9B21", columns={"riverid"})})
 * @ORM\Entity
 */
class Oeuvre
{
    /**
     * @var int
     *
     * @ORM\Column(name="oeuvreid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="oeuvre_oeuvreid_seq", allocationSize=1, initialValue=1)
     */
    private $oeuvreid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="objectnumber", type="text", nullable=true)
     */
    private $objectnumber;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ishighlight", type="boolean", nullable=true)
     */
    private $ishighlight;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="istimelinework", type="boolean", nullable=true)
     */
    private $istimelinework;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="ispublicdomain", type="boolean", nullable=true)
     */
    private $ispublicdomain;

    /**
     * @var int|null
     *
     * @ORM\Column(name="accessionyear", type="integer", nullable=true)
     */
    private $accessionyear;

    /**
     * @var int|null
     *
     * @ORM\Column(name="objectbegindate", type="integer", nullable=true)
     */
    private $objectbegindate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="objectenddate", type="integer", nullable=true)
     */
    private $objectenddate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dimensions", type="text", nullable=true)
     */
    private $dimensions;

    /**
     * @var string|null
     *
     * @ORM\Column(name="medium", type="text", nullable=true)
     */
    private $medium;

    /**
     * @var string|null
     *
     * @ORM\Column(name="linkresourceurl", type="text", nullable=true)
     */
    private $linkresourceurl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="objectwikidataurl", type="text", nullable=true)
     */
    private $objectwikidataurl;

    /**
     * @var \Title
     *
     * @ORM\ManyToOne(targetEntity="Title")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="titleid", referencedColumnName="titleid")
     * })
     */
    private $titleid;

    /**
     * @var \Objectname
     *
     * @ORM\ManyToOne(targetEntity="Objectname")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="objectid", referencedColumnName="objectid")
     * })
     */
    private $objectid;

    /**
     * @var \Culture
     *
     * @ORM\ManyToOne(targetEntity="Culture")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cultureid", referencedColumnName="cultureid")
     * })
     */
    private $cultureid;

    /**
     * @var \Gallery
     *
     * @ORM\ManyToOne(targetEntity="Gallery")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="galleryid", referencedColumnName="galleryid")
     * })
     */
    private $galleryid;

    /**
     * @var \Departement
     *
     * @ORM\ManyToOne(targetEntity="Departement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="departementid", referencedColumnName="departementid")
     * })
     */
    private $departementid;

    /**
     * @var \Period
     *
     * @ORM\ManyToOne(targetEntity="Period")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="periodid", referencedColumnName="periodid")
     * })
     */
    private $periodid;

    /**
     * @var \Locus
     *
     * @ORM\ManyToOne(targetEntity="Locus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="locusid", referencedColumnName="locusid")
     * })
     */
    private $locusid;

    /**
     * @var \Tag
     *
     * @ORM\ManyToOne(targetEntity="Tag")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tagid", referencedColumnName="tagid")
     * })
     */
    private $tagid;

    /**
     * @var \Rightsandreproduction
     *
     * @ORM\ManyToOne(targetEntity="Rightsandreproduction")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rightsandreproductionid", referencedColumnName="rightsandreproductionid")
     * })
     */
    private $rightsandreproductionid;

    /**
     * @var \Repository
     *
     * @ORM\ManyToOne(targetEntity="Repository")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="repositoryid", referencedColumnName="repositoryid")
     * })
     */
    private $repositoryid;

    /**
     * @var \Credit
     *
     * @ORM\ManyToOne(targetEntity="Credit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="creditid", referencedColumnName="creditid")
     * })
     */
    private $creditid;

    /**
     * @var \Constituent
     *
     * @ORM\ManyToOne(targetEntity="Constituent")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="constituentid", referencedColumnName="constituentid")
     * })
     */
    private $constituentid;

    /**
     * @var \Excavation
     *
     * @ORM\ManyToOne(targetEntity="Excavation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="excavationid", referencedColumnName="excavationid")
     * })
     */
    private $excavationid;

    /**
     * @var \Portfolio
     *
     * @ORM\ManyToOne(targetEntity="Portfolio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="portfolioid", referencedColumnName="portfolioid")
     * })
     */
    private $portfolioid;

    /**
     * @var \River
     *
     * @ORM\ManyToOne(targetEntity="River")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="riverid", referencedColumnName="riverid")
     * })
     */
    private $riverid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Geographytype", inversedBy="oeuvreid")
     * @ORM\JoinTable(name="geographytype_oeuvre",
     *   joinColumns={
     *     @ORM\JoinColumn(name="oeuvreid", referencedColumnName="oeuvreid")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="geographytypeid", referencedColumnName="geographytypeid")
     *   }
     * )
     */
    private $geographytypeid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Country", mappedBy="oeuvreid")
     */
    private $countryid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Region", mappedBy="oeuvreid")
     */
    private $regionid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Subcounty", mappedBy="oeuvreid")
     */
    private $subcountyid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="City", mappedBy="oeuvreid")
     */
    private $cityid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Classification", mappedBy="oeuvreid")
     */
    private $classificationid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Artist", mappedBy="oeuvreid")
     */
    private $artistid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->geographytypeid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->countryid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->regionid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->subcountyid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->cityid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->classificationid = new \Doctrine\Common\Collections\ArrayCollection();
        $this->artistid = new \Doctrine\Common\Collections\ArrayCollection();
    }

    public function getOeuvreid(): ?int
    {
        return $this->oeuvreid;
    }

    public function getObjectnumber(): ?string
    {
        return $this->objectnumber;
    }

    public function setObjectnumber(?string $objectnumber): self
    {
        $this->objectnumber = $objectnumber;

        return $this;
    }

    public function getIshighlight(): ?bool
    {
        return $this->ishighlight;
    }

    public function setIshighlight(?bool $ishighlight): self
    {
        $this->ishighlight = $ishighlight;

        return $this;
    }

    public function getIstimelinework(): ?bool
    {
        return $this->istimelinework;
    }

    public function setIstimelinework(?bool $istimelinework): self
    {
        $this->istimelinework = $istimelinework;

        return $this;
    }

    public function getIspublicdomain(): ?bool
    {
        return $this->ispublicdomain;
    }

    public function setIspublicdomain(?bool $ispublicdomain): self
    {
        $this->ispublicdomain = $ispublicdomain;

        return $this;
    }

    public function getAccessionyear(): ?int
    {
        return $this->accessionyear;
    }

    public function setAccessionyear(?int $accessionyear): self
    {
        $this->accessionyear = $accessionyear;

        return $this;
    }

    public function getObjectbegindate(): ?int
    {
        return $this->objectbegindate;
    }

    public function setObjectbegindate(?int $objectbegindate): self
    {
        $this->objectbegindate = $objectbegindate;

        return $this;
    }

    public function getObjectenddate(): ?int
    {
        return $this->objectenddate;
    }

    public function setObjectenddate(?int $objectenddate): self
    {
        $this->objectenddate = $objectenddate;

        return $this;
    }

    public function getDimensions(): ?string
    {
        return $this->dimensions;
    }

    public function setDimensions(?string $dimensions): self
    {
        $this->dimensions = $dimensions;

        return $this;
    }

    public function getMedium(): ?string
    {
        return $this->medium;
    }

    public function setMedium(?string $medium): self
    {
        $this->medium = $medium;

        return $this;
    }

    public function getLinkresourceurl(): ?string
    {
        return $this->linkresourceurl;
    }

    public function setLinkresourceurl(?string $linkresourceurl): self
    {
        $this->linkresourceurl = $linkresourceurl;

        return $this;
    }

    public function getObjectwikidataurl(): ?string
    {
        return $this->objectwikidataurl;
    }

    public function setObjectwikidataurl(?string $objectwikidataurl): self
    {
        $this->objectwikidataurl = $objectwikidataurl;

        return $this;
    }

    public function getTitleid(): ?Title
    {
        return $this->titleid;
    }

    public function setTitleid(?Title $titleid): self
    {
        $this->titleid = $titleid;

        return $this;
    }

    public function getObjectid(): ?Objectname
    {
        return $this->objectid;
    }

    public function setObjectid(?Objectname $objectid): self
    {
        $this->objectid = $objectid;

        return $this;
    }

    public function getCultureid(): ?Culture
    {
        return $this->cultureid;
    }

    public function setCultureid(?Culture $cultureid): self
    {
        $this->cultureid = $cultureid;

        return $this;
    }

    public function getGalleryid(): ?Gallery
    {
        return $this->galleryid;
    }

    public function setGalleryid(?Gallery $galleryid): self
    {
        $this->galleryid = $galleryid;

        return $this;
    }

    public function getDepartementid(): ?Departement
    {
        return $this->departementid;
    }

    public function setDepartementid(?Departement $departementid): self
    {
        $this->departementid = $departementid;

        return $this;
    }

    public function getPeriodid(): ?Period
    {
        return $this->periodid;
    }

    public function setPeriodid(?Period $periodid): self
    {
        $this->periodid = $periodid;

        return $this;
    }

    public function getLocusid(): ?Locus
    {
        return $this->locusid;
    }

    public function setLocusid(?Locus $locusid): self
    {
        $this->locusid = $locusid;

        return $this;
    }

    public function getTagid(): ?Tag
    {
        return $this->tagid;
    }

    public function setTagid(?Tag $tagid): self
    {
        $this->tagid = $tagid;

        return $this;
    }

    public function getRightsandreproductionid(): ?Rightsandreproduction
    {
        return $this->rightsandreproductionid;
    }

    public function setRightsandreproductionid(?Rightsandreproduction $rightsandreproductionid): self
    {
        $this->rightsandreproductionid = $rightsandreproductionid;

        return $this;
    }

    public function getRepositoryid(): ?Repository
    {
        return $this->repositoryid;
    }

    public function setRepositoryid(?Repository $repositoryid): self
    {
        $this->repositoryid = $repositoryid;

        return $this;
    }

    public function getCreditid(): ?Credit
    {
        return $this->creditid;
    }

    public function setCreditid(?Credit $creditid): self
    {
        $this->creditid = $creditid;

        return $this;
    }

    public function getConstituentid(): ?Constituent
    {
        return $this->constituentid;
    }

    public function setConstituentid(?Constituent $constituentid): self
    {
        $this->constituentid = $constituentid;

        return $this;
    }

    public function getExcavationid(): ?Excavation
    {
        return $this->excavationid;
    }

    public function setExcavationid(?Excavation $excavationid): self
    {
        $this->excavationid = $excavationid;

        return $this;
    }

    public function getPortfolioid(): ?Portfolio
    {
        return $this->portfolioid;
    }

    public function setPortfolioid(?Portfolio $portfolioid): self
    {
        $this->portfolioid = $portfolioid;

        return $this;
    }

    public function getRiverid(): ?River
    {
        return $this->riverid;
    }

    public function setRiverid(?River $riverid): self
    {
        $this->riverid = $riverid;

        return $this;
    }

    /**
     * @return Collection|Geographytype[]
     */
    public function getGeographytypeid(): Collection
    {
        return $this->geographytypeid;
    }

    public function addGeographytypeid(Geographytype $geographytypeid): self
    {
        if (!$this->geographytypeid->contains($geographytypeid)) {
            $this->geographytypeid[] = $geographytypeid;
        }

        return $this;
    }

    public function removeGeographytypeid(Geographytype $geographytypeid): self
    {
        $this->geographytypeid->removeElement($geographytypeid);

        return $this;
    }

    /**
     * @return Collection|Country[]
     */
    public function getCountryid(): Collection
    {
        return $this->countryid;
    }

    public function addCountryid(Country $countryid): self
    {
        if (!$this->countryid->contains($countryid)) {
            $this->countryid[] = $countryid;
            $countryid->addOeuvreid($this);
        }

        return $this;
    }

    public function removeCountryid(Country $countryid): self
    {
        if ($this->countryid->removeElement($countryid)) {
            $countryid->removeOeuvreid($this);
        }

        return $this;
    }

    /**
     * @return Collection|Region[]
     */
    public function getRegionid(): Collection
    {
        return $this->regionid;
    }

    public function addRegionid(Region $regionid): self
    {
        if (!$this->regionid->contains($regionid)) {
            $this->regionid[] = $regionid;
            $regionid->addOeuvreid($this);
        }

        return $this;
    }

    public function removeRegionid(Region $regionid): self
    {
        if ($this->regionid->removeElement($regionid)) {
            $regionid->removeOeuvreid($this);
        }

        return $this;
    }

    /**
     * @return Collection|Subcounty[]
     */
    public function getSubcountyid(): Collection
    {
        return $this->subcountyid;
    }

    public function addSubcountyid(Subcounty $subcountyid): self
    {
        if (!$this->subcountyid->contains($subcountyid)) {
            $this->subcountyid[] = $subcountyid;
            $subcountyid->addOeuvreid($this);
        }

        return $this;
    }

    public function removeSubcountyid(Subcounty $subcountyid): self
    {
        if ($this->subcountyid->removeElement($subcountyid)) {
            $subcountyid->removeOeuvreid($this);
        }

        return $this;
    }

    /**
     * @return Collection|City[]
     */
    public function getCityid(): Collection
    {
        return $this->cityid;
    }

    public function addCityid(City $cityid): self
    {
        if (!$this->cityid->contains($cityid)) {
            $this->cityid[] = $cityid;
            $cityid->addOeuvreid($this);
        }

        return $this;
    }

    public function removeCityid(City $cityid): self
    {
        if ($this->cityid->removeElement($cityid)) {
            $cityid->removeOeuvreid($this);
        }

        return $this;
    }

    /**
     * @return Collection|Classification[]
     */
    public function getClassificationid(): Collection
    {
        return $this->classificationid;
    }

    public function addClassificationid(Classification $classificationid): self
    {
        if (!$this->classificationid->contains($classificationid)) {
            $this->classificationid[] = $classificationid;
            $classificationid->addOeuvreid($this);
        }

        return $this;
    }

    public function removeClassificationid(Classification $classificationid): self
    {
        if ($this->classificationid->removeElement($classificationid)) {
            $classificationid->removeOeuvreid($this);
        }

        return $this;
    }

    /**
     * @return Collection|Artist[]
     */
    public function getArtistid(): Collection
    {
        return $this->artistid;
    }

    public function addArtistid(Artist $artistid): self
    {
        if (!$this->artistid->contains($artistid)) {
            $this->artistid[] = $artistid;
            $artistid->addOeuvreid($this);
        }

        return $this;
    }

    public function removeArtistid(Artist $artistid): self
    {
        if ($this->artistid->removeElement($artistid)) {
            $artistid->removeOeuvreid($this);
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->getTitleid()->getTitlename();
        
    }

}
