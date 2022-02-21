<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rightsandreproduction
 *
 * @ORM\Table(name="rightsandreproduction")
 * @ORM\Entity
 */
class Rightsandreproduction
{
    /**
     * @var int
     *
     * @ORM\Column(name="rightsandreproductionid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rightsandreproduction_rightsandreproductionid_seq", allocationSize=1, initialValue=1)
     */
    private $rightsandreproductionid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rightsandreproduction", type="text", nullable=true)
     */
    private $rightsandreproduction;

    public function getRightsandreproductionid(): ?int
    {
        return $this->rightsandreproductionid;
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

    public function __toString(): string
    {
        if($this->rightsandreproduction == null){
            return "";
        } else {
            return $this->rightsandreproduction;
        }
    }


}
