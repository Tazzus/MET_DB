<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * River
 *
 * @ORM\Table(name="river", indexes={@ORM\Index(name="IDX_F5E3672B6E268216", columns={"countryid"})})
 * @ORM\Entity
 */
class River
{
    /**
     * @var int
     *
     * @ORM\Column(name="riverid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="river_riverid_seq", allocationSize=1, initialValue=1)
     */
    private $riverid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rivername", type="text", nullable=true)
     */
    private $rivername;

    /**
     * @var \Country
     *
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="countryid", referencedColumnName="countryid")
     * })
     */
    private $countryid;

    public function getRiverid(): ?int
    {
        return $this->riverid;
    }

    public function getRivername(): ?string
    {
        return $this->rivername;
    }

    public function setRivername(?string $rivername): self
    {
        $this->rivername = $rivername;

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


}
