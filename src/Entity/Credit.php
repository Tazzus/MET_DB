<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Credit
 *
 * @ORM\Table(name="credit")
 * @ORM\Entity
 */
class Credit
{
    /**
     * @var int
     *
     * @ORM\Column(name="creditid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="credit_creditid_seq", allocationSize=1, initialValue=1)
     */
    private $creditid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="creditline", type="text", nullable=true)
     */
    private $creditline;

    public function getCreditid(): ?int
    {
        return $this->creditid;
    }

    public function getCreditline(): ?string
    {
        return $this->creditline;
    }

    public function setCreditline(?string $creditline): self
    {
        $this->creditline = $creditline;

        return $this;
    }


}
