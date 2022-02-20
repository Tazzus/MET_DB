<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artistsuffix
 *
 * @ORM\Table(name="artistsuffix")
 * @ORM\Entity
 */
class Artistsuffix
{
    /**
     * @var int
     *
     * @ORM\Column(name="artistsufixid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="artistsuffix_artistsufixid_seq", allocationSize=1, initialValue=1)
     */
    private $artistsufixid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="artistsuffix", type="text", nullable=true)
     */
    private $artistsuffix;

    public function getArtistsufixid(): ?int
    {
        return $this->artistsufixid;
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

    public function __toString(): string
    {
        if($this->artistsuffix == null){
            return "";
        } else {
            return $this->artistsuffix;
        }
    }


}
