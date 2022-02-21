<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Departement
 *
 * @ORM\Table(name="departement")
 * @ORM\Entity
 */
class Departement
{
    /**
     * @var int
     *
     * @ORM\Column(name="departementid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="departement_departementid_seq", allocationSize=1, initialValue=1)
     */
    private $departementid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="departementname", type="text", nullable=true)
     */
    private $departementname;

    public function getDepartementid(): ?int
    {
        return $this->departementid;
    }

    public function getDepartementname(): ?string
    {
        return $this->departementname;
    }

    public function setDepartementname(?string $departementname): self
    {
        $this->departementname = $departementname;

        return $this;
    }

    public function __toString(): string
    {
        if($this->departementname == null){
            return "";
        } else {
            return $this->departementname;
        }
    }


}
