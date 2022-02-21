<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Title
 *
 * @ORM\Table(name="title")
 * @ORM\Entity
 */
class Title
{
    /**
     * @var int
     *
     * @ORM\Column(name="titleid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="title_titleid_seq", allocationSize=1, initialValue=1)
     */
    private $titleid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="titlename", type="text", nullable=true)
     */
    private $titlename;

    public function getTitleid(): ?int
    {
        return $this->titleid;
    }

    public function getTitlename(): ?string
    {
        return $this->titlename;
    }

    public function setTitlename(?string $titlename): self
    {
        $this->titlename = $titlename;

        return $this;
    }

    public function __toString(): string
    {
        if($this->titlename == null){
            return "";
        } else {
            return $this->titlename;
        }
    }


}
