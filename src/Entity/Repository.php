<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Repository
 *
 * @ORM\Table(name="repository")
 * @ORM\Entity
 */
class Repository
{
    /**
     * @var int
     *
     * @ORM\Column(name="repositoryid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="repository_repositoryid_seq", allocationSize=1, initialValue=1)
     */
    private $repositoryid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="repository", type="text", nullable=true)
     */
    private $repository;

    public function getRepositoryid(): ?int
    {
        return $this->repositoryid;
    }

    public function getRepository(): ?string
    {
        return $this->repository;
    }

    public function setRepository(?string $repository): self
    {
        $this->repository = $repository;

        return $this;
    }


}
