<?php

namespace App\Controller\User;

use App\Entity\Artist;
use App\Entity\Artistprefix;
use App\Entity\Artistsuffix;
use App\Entity\City;
use App\Entity\Classification;
use App\Entity\Constituent;
use App\Entity\Country;
use App\Entity\Credit;
use App\Entity\Culture;
use App\Entity\Departement;
use App\Entity\Excavation;
use App\Entity\Gallery;
use App\Entity\Geographytype;
use App\Entity\Locale;
use App\Entity\Locus;
use App\Entity\Nationalityartist;
use App\Entity\Objectname;
use App\Entity\Oeuvre;
use App\Entity\Period;
use App\Entity\Portfolio;
use App\Entity\Region;
use App\Entity\Reign;
use App\Entity\Repository;
use App\Entity\Rightsandreproduction;
use App\Entity\River;
use App\Entity\Roleartist;
use App\Entity\Subcounty;
use App\Entity\Tag;
use App\Entity\Title;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use EasyCorp\Bundle\EasyAdminBundle\Config\UserMenu;
use Symfony\Component\Security\Core\User\UserInterface;

class DashboardController extends AbstractDashboardController
{
    private $adminUrlGenerator;

    public function __construct(AdminUrlGenerator $adminUrlGenerator)
    {
        $this->adminUrlGenerator = $adminUrlGenerator;
    }

    #[Route('/', name: 'user')]
    public function index(): Response
    {
        $url = $this->adminUrlGenerator
            ->setController(MettableCrudController::class)
            ->generateUrl();
        
            return $this->redirect($url);

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('MET DB - USER');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Tableau de bord', 'fa fa-home');
        yield MenuItem::linkToUrl('Vers côté admin', 'fa fa-user', '/admin');

        yield MenuItem::section('Artistes', 'fa fa-users');
        yield MenuItem::linkToCrud('🔹 Les artistes', null, Artist::class);
        yield MenuItem::linkToCrud('🔹 Rôles', null, Roleartist::class);
        yield MenuItem::linkToCrud('🔹 Préfix', null, Artistprefix::class);
        yield MenuItem::linkToCrud('🔹 Suffix', null, Artistsuffix::class);
        yield MenuItem::linkToCrud('🔹 Nationalité', null, Nationalityartist::class);

        yield MenuItem::section('Oeuvres', 'fa fa-palette');
        yield MenuItem::linkToCrud('🔹 Les oeuvres', null, Oeuvre::class);
        yield MenuItem::linkToCrud('🔹 Type d\'objet', null, Objectname::class);
        yield MenuItem::linkToCrud('🔹 Titres', null, Title::class);
        yield MenuItem::linkToCrud('🔹 Galleries', null, Gallery::class);
        yield MenuItem::linkToCrud('🔹 Périodes', null, Period::class);
        yield MenuItem::linkToCrud('🔹 Credit', null, Credit::class);
        yield MenuItem::linkToCrud('🔹 Culture', null, Culture::class);

        yield MenuItem::section('Lieux', 'fa fa-map');
        yield MenuItem::linkToCrud('🔹 Types geographique', null, Geographytype::class);
        yield MenuItem::linkToCrud('🔹 Pays', null, Country::class);
        yield MenuItem::linkToCrud('🔹 Villes', null, City::class);
        yield MenuItem::linkToCrud('🔹 Régions', null, Region::class);
        yield MenuItem::linkToCrud('🔹 Sous-comtés', null, Subcounty::class);
        yield MenuItem::linkToCrud('🔹 Departements', null, Departement::class);
        yield MenuItem::linkToCrud('🔹 Locales', null, Locale::class);
        yield MenuItem::linkToCrud('🔹 Locus', null, Locus::class);
        yield MenuItem::linkToCrud('🔹 Rivières', null, River::class);
        yield MenuItem::linkToCrud('🔹 Excavations', null, Excavation::class);
        
        yield MenuItem::section('Autres informations', 'fa fa-info');
        yield MenuItem::linkToCrud('🔹 Constituants', null, Constituent::class);
        yield MenuItem::linkToCrud('🔹 Classifications', null, Classification::class);
        yield MenuItem::linkToCrud('🔹 Portfolios', null, Portfolio::class);
        yield MenuItem::linkToCrud('🔹 Règnes', null, Reign::class);
        yield MenuItem::linkToCrud('🔹 Référentiels', null, Repository::class);
        yield MenuItem::linkToCrud('🔹 Droits d\'auteurs', null, Rightsandreproduction::class);
        yield MenuItem::linkToCrud('🔹 Étiquettes', null, Tag::class);
    }
}
