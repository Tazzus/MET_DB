<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Constituent
 *
 * @ORM\Table(name="constituent")
 * @ORM\Entity
 */
class Constituent
{
    /**
     * @var int
     *
     * @ORM\Column(name="constituentid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="constituent_constituentid_seq", allocationSize=1, initialValue=1)
     */
    private $constituentid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="constituentnumber", type="text", nullable=true)
     */
    private $constituentnumber;

    public function getConstituentid(): ?int
    {
        return $this->constituentid;
    }

    public function getConstituentnumber(): ?string
    {
        return $this->constituentnumber;
    }

    public function setConstituentnumber(?string $constituentnumber): self
    {
        $this->constituentnumber = $constituentnumber;

        return $this;
    }


}
