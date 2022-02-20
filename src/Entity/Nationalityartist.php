<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Nationalityartist
 *
 * @ORM\Table(name="nationalityartist")
 * @ORM\Entity
 */
class Nationalityartist
{
    /**
     * @var int
     *
     * @ORM\Column(name="nationalityid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="nationalityartist_nationalityid_seq", allocationSize=1, initialValue=1)
     */
    private $nationalityid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nationality", type="text", nullable=true)
     */
    private $nationality;

    public function getNationalityid(): ?int
    {
        return $this->nationalityid;
    }

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(?string $nationality): self
    {
        $this->nationality = $nationality;

        return $this;
    }

    public function __toString(): string
    {
        if($this->nationality == null){
            return "";
        } else {
            return $this->nationality;
        }
    }


}
