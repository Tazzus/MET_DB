<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Artistprefix
 *
 * @ORM\Table(name="artistprefix")
 * @ORM\Entity
 */
class Artistprefix
{
    /**
     * @var int
     *
     * @ORM\Column(name="artistprefixid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="artistprefix_artistprefixid_seq", allocationSize=1, initialValue=1)
     */
    private $artistprefixid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="artistprefix", type="text", nullable=true)
     */
    private $artistprefix;

    public function getArtistprefixid(): ?int
    {
        return $this->artistprefixid;
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


}
