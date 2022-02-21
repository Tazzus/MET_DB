<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Artist
 *
 * @ORM\Table(name="artist", indexes={@ORM\Index(name="IDX_15996871A121A72", columns={"roleartistid"}), @ORM\Index(name="IDX_1599687EA6CCECB", columns={"nationalityid"}), @ORM\Index(name="IDX_1599687DDE5D87B", columns={"artistprefixid"}), @ORM\Index(name="IDX_1599687E46C1464", columns={"artistsufixid"})})
 * @ORM\Entity
 */
class Artist
{
    /**
     * @var int
     *
     * @ORM\Column(name="artistid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="artist_artistid_seq", allocationSize=1, initialValue=1)
     */
    private $artistid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="artistdisplayname", type="text", nullable=true)
     */
    private $artistdisplayname;

    /**
     * @var int|null
     *
     * @ORM\Column(name="artistbegindate", type="integer", nullable=true)
     */
    private $artistbegindate;

    /**
     * @var int|null
     *
     * @ORM\Column(name="artistenddate", type="integer", nullable=true)
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
     * @var string|null
     *
     * @ORM\Column(name="artistalphasort", type="text", nullable=true)
     */
    private $artistalphasort;

    /**
     * @var \Roleartist
     *
     * @ORM\ManyToOne(targetEntity="Roleartist")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="roleartistid", referencedColumnName="roleartistid")
     * })
     */
    private $roleartistid;

    /**
     * @var \Nationalityartist
     *
     * @ORM\ManyToOne(targetEntity="Nationalityartist")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="nationalityid", referencedColumnName="nationalityid")
     * })
     */
    private $nationalityid;

    /**
     * @var \Artistprefix
     *
     * @ORM\ManyToOne(targetEntity="Artistprefix")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="artistprefixid", referencedColumnName="artistprefixid")
     * })
     */
    private $artistprefixid;

    /**
     * @var \Artistsuffix
     *
     * @ORM\ManyToOne(targetEntity="Artistsuffix")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="artistsufixid", referencedColumnName="artistsufixid")
     * })
     */
    private $artistsufixid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Oeuvre", inversedBy="artistid")
     * @ORM\JoinTable(name="artist_oeuvre",
     *   joinColumns={
     *     @ORM\JoinColumn(name="artistid", referencedColumnName="artistid")
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

    public function getArtistid(): ?int
    {
        return $this->artistid;
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

    public function getArtistbegindate(): ?int
    {
        return $this->artistbegindate;
    }

    public function setArtistbegindate(?int $artistbegindate): self
    {
        $this->artistbegindate = $artistbegindate;

        return $this;
    }

    public function getArtistenddate(): ?int
    {
        return $this->artistenddate;
    }

    public function setArtistenddate(?int $artistenddate): self
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

    public function getArtistalphasort(): ?string
    {
        return $this->artistalphasort;
    }

    public function setArtistalphasort(?string $artistalphasort): self
    {
        $this->artistalphasort = $artistalphasort;

        return $this;
    }

    public function getRoleartistid(): ?Roleartist
    {
        return $this->roleartistid;
    }

    public function setRoleartistid(?Roleartist $roleartistid): self
    {
        $this->roleartistid = $roleartistid;

        return $this;
    }

    public function getNationalityid(): ?Nationalityartist
    {
        return $this->nationalityid;
    }

    public function setNationalityid(?Nationalityartist $nationalityid): self
    {
        $this->nationalityid = $nationalityid;

        return $this;
    }

    public function getArtistprefixid(): ?Artistprefix
    {
        return $this->artistprefixid;
    }

    public function setArtistprefixid(?Artistprefix $artistprefixid): self
    {
        $this->artistprefixid = $artistprefixid;

        return $this;
    }

    public function getArtistsufixid(): ?Artistsuffix
    {
        return $this->artistsufixid;
    }

    public function setArtistsufixid(?Artistsuffix $artistsufixid): self
    {
        $this->artistsufixid = $artistsufixid;

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
        if($this->artistdisplayname == null){
            return "";
        } else {
            return $this->artistdisplayname;
        }
    }

}
