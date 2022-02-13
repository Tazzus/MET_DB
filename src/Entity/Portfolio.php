<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Portfolio
 *
 * @ORM\Table(name="portfolio")
 * @ORM\Entity
 */
class Portfolio
{
    /**
     * @var int
     *
     * @ORM\Column(name="portfolioid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="portfolio_portfolioid_seq", allocationSize=1, initialValue=1)
     */
    private $portfolioid;

    /**
     * @var string|null
     *
     * @ORM\Column(name="portfolioname", type="text", nullable=true)
     */
    private $portfolioname;

    public function getPortfolioid(): ?int
    {
        return $this->portfolioid;
    }

    public function getPortfolioname(): ?string
    {
        return $this->portfolioname;
    }

    public function setPortfolioname(?string $portfolioname): self
    {
        $this->portfolioname = $portfolioname;

        return $this;
    }


}
