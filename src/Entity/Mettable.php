<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mettable
 *
 * @ORM\Table(name="mettable")
 * @ORM\Entity
 */
class Mettable
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="mettable_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @ORM\Column(name="objectid", type="bigint", nullable=true)
     */
    private $objectid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gallerynumber", type="text", nullable=true)
     */
    private $gallerynumber;

    /**
     * @var string|null
     *
     * @ORM\Column(name="department", type="text", nullable=true)
     */
    private $department;

    /**
     * @var int|null
     *
     * @ORM\Column(name="accessionyear", type="integer", nullable=true)
     */
    private $accessionyear;

    /**
     * @var string|null
     *
     * @ORM\Column(name="objectname", type="text", nullable=true)
     */
    private $objectname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="title", type="text", nullable=true)
     */
    private $title;

    /**
     * @var string|null
     *
     * @ORM\Column(name="culture", type="text", nullable=true)
     */
    private $culture;

    /**
     * @var string|null
     *
     * @ORM\Column(name="period", type="text", nullable=true)
     */
    private $period;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dynasty", type="text", nullable=true)
     */
    private $dynasty;

    /**
     * @var string|null
     *
     * @ORM\Column(name="reign", type="text", nullable=true)
     */
    private $reign;

    /**
     * @var string|null
     *
     * @ORM\Column(name="portfolio", type="text", nullable=true)
     */
    private $portfolio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="constituentid", type="text", nullable=true)
     */
    private $constituentid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="artistrole", type="text", nullable=true)
     */
    private $artistrole;

    /**
     * @var string|null
     *
     * @ORM\Column(name="artistprefix", type="text", nullable=true)
     */
    private $artistprefix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="artistdisplayname", type="text", nullable=true)
     */
    private $artistdisplayname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="artistsuffix", type="text", nullable=true)
     */
    private $artistsuffix;

    /**
     * @var string|null
     *
     * @ORM\Column(name="artistalphasort", type="text", nullable=true)
     */
    private $artistalphasort;

    /**
     * @var string|null
     *
     * @ORM\Column(name="artistnationality", type="text", nullable=true)
     */
    private $artistnationality;

    /**
     * @var string|null
     *
     * @ORM\Column(name="artistbegindate", type="text", nullable=true)
     */
    private $artistbegindate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="artistenddate", type="text", nullable=true)
     */
    private $artistenddate;

    /**
     * @var string|null
     *
     * @ORM\Column(name="artistgender", type="text", nullable=true)
     */
    private $artistgender;

    /**
     * @var string|null
     *
     * @ORM\Column(name="artistulanurl", type="text", nullable=true)
     */
    private $artistulanurl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="artistwikidataurl", type="text", nullable=true)
     */
    private $artistwikidataurl;

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
     * @ORM\Column(name="medium", type="text", nullable=true)
     */
    private $medium;

    /**
     * @var string|null
     *
     * @ORM\Column(name="dimensions", type="text", nullable=true)
     */
    private $dimensions;

    /**
     * @var string|null
     *
     * @ORM\Column(name="creditline", type="text", nullable=true)
     */
    private $creditline;

    /**
     * @var string|null
     *
     * @ORM\Column(name="geographytype", type="text", nullable=true)
     */
    private $geographytype;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="text", nullable=true)
     */
    private $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="county", type="text", nullable=true)
     */
    private $county;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country", type="text", nullable=true)
     */
    private $country;

    /**
     * @var string|null
     *
     * @ORM\Column(name="region", type="text", nullable=true)
     */
    private $region;

    /**
     * @var string|null
     *
     * @ORM\Column(name="subregion", type="text", nullable=true)
     */
    private $subregion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="locale", type="text", nullable=true)
     */
    private $locale;

    /**
     * @var string|null
     *
     * @ORM\Column(name="locus", type="text", nullable=true)
     */
    private $locus;

    /**
     * @var string|null
     *
     * @ORM\Column(name="excavation", type="text", nullable=true)
     */
    private $excavation;

    /**
     * @var string|null
     *
     * @ORM\Column(name="river", type="text", nullable=true)
     */
    private $river;

    /**
     * @var string|null
     *
     * @ORM\Column(name="classification", type="text", nullable=true)
     */
    private $classification;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rightsandreproduction", type="text", nullable=true)
     */
    private $rightsandreproduction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="linkresource", type="text", nullable=true)
     */
    private $linkresource;

    /**
     * @var string|null
     *
     * @ORM\Column(name="objectwikidataurl", type="text", nullable=true)
     */
    private $objectwikidataurl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="repository", type="text", nullable=true)
     */
    private $repository;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tags", type="text", nullable=true)
     */
    private $tags;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tagaaturl", type="text", nullable=true)
     */
    private $tagaaturl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tagswikidataurl", type="text", nullable=true)
     */
    private $tagswikidataurl;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getObjectid(): ?string
    {
        return $this->objectid;
    }

    public function setObjectid(?string $objectid): self
    {
        $this->objectid = $objectid;

        return $this;
    }

    public function getGallerynumber(): ?string
    {
        return $this->gallerynumber;
    }

    public function setGallerynumber(?string $gallerynumber): self
    {
        $this->gallerynumber = $gallerynumber;

        return $this;
    }

    public function getDepartment(): ?string
    {
        return $this->department;
    }

    public function setDepartment(?string $department): self
    {
        $this->department = $department;

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

    public function getObjectname(): ?string
    {
        return $this->objectname;
    }

    public function setObjectname(?string $objectname): self
    {
        $this->objectname = $objectname;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(?string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getCulture(): ?string
    {
        return $this->culture;
    }

    public function setCulture(?string $culture): self
    {
        $this->culture = $culture;

        return $this;
    }

    public function getPeriod(): ?string
    {
        return $this->period;
    }

    public function setPeriod(?string $period): self
    {
        $this->period = $period;

        return $this;
    }

    public function getDynasty(): ?string
    {
        return $this->dynasty;
    }

    public function setDynasty(?string $dynasty): self
    {
        $this->dynasty = $dynasty;

        return $this;
    }

    public function getReign(): ?string
    {
        return $this->reign;
    }

    public function setReign(?string $reign): self
    {
        $this->reign = $reign;

        return $this;
    }

    public function getPortfolio(): ?string
    {
        return $this->portfolio;
    }

    public function setPortfolio(?string $portfolio): self
    {
        $this->portfolio = $portfolio;

        return $this;
    }

    public function getConstituentid(): ?string
    {
        return $this->constituentid;
    }

    public function setConstituentid(?string $constituentid): self
    {
        $this->constituentid = $constituentid;

        return $this;
    }

    public function getArtistrole(): ?string
    {
        return $this->artistrole;
    }

    public function setArtistrole(?string $artistrole): self
    {
        $this->artistrole = $artistrole;

        return $this;
    }

    public function getArtistprefix(): ?string
    {
        return $this->artistprefix;
    }

    public function setArtistprefix(?string $artistprefix): self
    {
        $this->artistprefix = $artistprefix;

        return $this;
    }

    public function getArtistdisplayname(): ?string
    {
        return $this->artistdisplayname;
    }

    public function setArtistdisplayname(?string $artistdisplayname): self
    {
        $this->artistdisplayname = $artistdisplayname;

        return $this;
    }

    public function getArtistsuffix(): ?string
    {
        return $this->artistsuffix;
    }

    public function setArtistsuffix(?string $artistsuffix): self
    {
        $this->artistsuffix = $artistsuffix;

        return $this;
    }

    public function getArtistalphasort(): ?string
    {
        return $this->artistalphasort;
    }

    public function setArtistalphasort(?string $artistalphasort): self
    {
        $this->artistalphasort = $artistalphasort;

        return $this;
    }

    public function getArtistnationality(): ?string
    {
        return $this->artistnationality;
    }

    public function setArtistnationality(?string $artistnationality): self
    {
        $this->artistnationality = $artistnationality;

        return $this;
    }

    public function getArtistbegindate(): ?string
    {
        return $this->artistbegindate;
    }

    public function setArtistbegindate(?string $artistbegindate): self
    {
        $this->artistbegindate = $artistbegindate;

        return $this;
    }

    public function getArtistenddate(): ?string
    {
        return $this->artistenddate;
    }

    public function setArtistenddate(?string $artistenddate): self
    {
        $this->artistenddate = $artistenddate;

        return $this;
    }

    public function getArtistgender(): ?string
    {
        return $this->artistgender;
    }

    public function setArtistgender(?string $artistgender): self
    {
        $this->artistgender = $artistgender;

        return $this;
    }

    public function getArtistulanurl(): ?string
    {
        return $this->artistulanurl;
    }

    public function setArtistulanurl(?string $artistulanurl): self
    {
        $this->artistulanurl = $artistulanurl;

        return $this;
    }

    public function getArtistwikidataurl(): ?string
    {
        return $this->artistwikidataurl;
    }

    public function setArtistwikidataurl(?string $artistwikidataurl): self
    {
        $this->artistwikidataurl = $artistwikidataurl;

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

    public function getMedium(): ?string
    {
        return $this->medium;
    }

    public function setMedium(?string $medium): self
    {
        $this->medium = $medium;

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

    public function getCreditline(): ?string
    {
        return $this->creditline;
    }

    public function setCreditline(?string $creditline): self
    {
        $this->creditline = $creditline;

        return $this;
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

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCounty(): ?string
    {
        return $this->county;
    }

    public function setCounty(?string $county): self
    {
        $this->county = $county;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getSubregion(): ?string
    {
        return $this->subregion;
    }

    public function setSubregion(?string $subregion): self
    {
        $this->subregion = $subregion;

        return $this;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(?string $locale): self
    {
        $this->locale = $locale;

        return $this;
    }

    public function getLocus(): ?string
    {
        return $this->locus;
    }

    public function setLocus(?string $locus): self
    {
        $this->locus = $locus;

        return $this;
    }

    public function getExcavation(): ?string
    {
        return $this->excavation;
    }

    public function setExcavation(?string $excavation): self
    {
        $this->excavation = $excavation;

        return $this;
    }

    public function getRiver(): ?string
    {
        return $this->river;
    }

    public function setRiver(?string $river): self
    {
        $this->river = $river;

        return $this;
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

    public function getRightsandreproduction(): ?string
    {
        return $this->rightsandreproduction;
    }

    public function setRightsandreproduction(?string $rightsandreproduction): self
    {
        $this->rightsandreproduction = $rightsandreproduction;

        return $this;
    }

    public function getLinkresource(): ?string
    {
        return $this->linkresource;
    }

    public function setLinkresource(?string $linkresource): self
    {
        $this->linkresource = $linkresource;

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

    public function getRepository(): ?string
    {
        return $this->repository;
    }

    public function setRepository(?string $repository): self
    {
        $this->repository = $repository;

        return $this;
    }

    public function getTags(): ?string
    {
        return $this->tags;
    }

    public function setTags(?string $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function getTagaaturl(): ?string
    {
        return $this->tagaaturl;
    }

    public function setTagaaturl(?string $tagaaturl): self
    {
        $this->tagaaturl = $tagaaturl;

        return $this;
    }

    public function getTagswikidataurl(): ?string
    {
        return $this->tagswikidataurl;
    }

    public function setTagswikidataurl(?string $tagswikidataurl): self
    {
        $this->tagswikidataurl = $tagswikidataurl;

        return $this;
    }


}
