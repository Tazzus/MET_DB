<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gallery
 *
 * @ORM\Table(name="gallery")
 * @ORM\Entity
 */
class Gallery
{
    /**
     * @var int
     *
     * @ORM\Column(name="galleryid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gallery_galleryid_seq", allocationSize=1, initialValue=1)
     */
    private $galleryid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="gallerynumber", type="text", nullable=true)
     */
    private $gallerynumber;

    public function getGalleryid(): ?int
    {
        return $this->galleryid;
    }

    public function getGallerynumber(): ?string
    {
        return $this->gallerynumber;
    }

    public function setGallerynumber(?string $gallerynumber): self
    {
        $this->gallerynumber = $gallerynumber;

        return $this;
    }

    public function __toString(): string
    {
        if($this->gallerynumber == null){
            return "";
        } else {
            return $this->gallerynumber;
        }
    }


}
