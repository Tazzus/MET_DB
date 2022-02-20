<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Roleartist
 *
 * @ORM\Table(name="roleartist")
 * @ORM\Entity
 */
class Roleartist
{
    /**
     * @var int
     *
     * @ORM\Column(name="roleartistid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="roleartist_roleartistid_seq", allocationSize=1, initialValue=1)
     */
    private $roleartistid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="artistrole", type="text", nullable=true)
     */
    private $artistrole;

    public function getRoleartistid(): ?int
    {
        return $this->roleartistid;
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

    public function __toString(): string
    {
        if($this->artistrole == null){
            return "";
        } else {
            return $this->artistrole;
        }
    }


}
