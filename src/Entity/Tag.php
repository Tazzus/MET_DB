<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tag
 *
 * @ORM\Table(name="tag")
 * @ORM\Entity
 */
class Tag
{
    /**
     * @var int
     *
     * @ORM\Column(name="tagid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tag_tagid_seq", allocationSize=1, initialValue=1)
     */
    private $tagid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tags", type="text", nullable=true)
     */
    private $tags;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tagaturl", type="text", nullable=true)
     */
    private $tagaturl;

    /**
     * @var string|null
     *
     * @ORM\Column(name="tagwikidataurl", type="text", nullable=true)
     */
    private $tagwikidataurl;

    public function getTagid(): ?int
    {
        return $this->tagid;
    }

    public function getTags(): ?string
    {
        return $this->tags;
    }

    public function setTags(?string $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function getTagaturl(): ?string
    {
        return $this->tagaturl;
    }

    public function setTagaturl(?string $tagaturl): self
    {
        $this->tagaturl = $tagaturl;

        return $this;
    }

    public function getTagwikidataurl(): ?string
    {
        return $this->tagwikidataurl;
    }

    public function setTagwikidataurl(?string $tagwikidataurl): self
    {
        $this->tagwikidataurl = $tagwikidataurl;

        return $this;
    }


}
