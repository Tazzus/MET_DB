<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Culture
 *
 * @ORM\Table(name="culture")
 * @ORM\Entity
 */
class Culture
{
    /**
     * @var int
     *
     * @ORM\Column(name="cultureid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="culture_cultureid_seq", allocationSize=1, initialValue=1)
     */
    private $cultureid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="culturename", type="text", nullable=true)
     */
    private $culturename;

    public function getCultureid(): ?int
    {
        return $this->cultureid;
    }

    public function getCulturename(): ?string
    {
        return $this->culturename;
    }

    public function setCulturename(?string $culturename): self
    {
        $this->culturename = $culturename;

        return $this;
    }

    public function __toString(): string
    {
        if($this->culturename == null){
            return "";
        } else {
            return $this->culturename;
        }
    }


}
