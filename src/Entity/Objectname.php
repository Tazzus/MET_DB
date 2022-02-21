<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Objectname
 *
 * @ORM\Table(name="objectname")
 * @ORM\Entity
 */
class Objectname
{
    /**
     * @var int
     *
     * @ORM\Column(name="objectid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="objectname_objectid_seq", allocationSize=1, initialValue=1)
     */
    private $objectid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="objectname", type="text", nullable=true)
     */
    private $objectname;

    public function getObjectid(): ?int
    {
        return $this->objectid;
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

    public function __toString(): string
    {
        if($this->objectname == null){
            return "";
        } else {
            return $this->objectname;
        }
    }


}
