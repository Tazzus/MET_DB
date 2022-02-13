<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220213123405 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE artist ALTER artistid DROP DEFAULT');
        $this->addSql('ALTER TABLE artistprefix ALTER artistprefixid DROP DEFAULT');
        $this->addSql('ALTER TABLE artistsuffix ALTER artistsufixid DROP DEFAULT');
        $this->addSql('ALTER TABLE city ALTER cityid DROP DEFAULT');
        $this->addSql('DROP INDEX "primary"');
        $this->addSql('ALTER TABLE oeuvre_city ADD PRIMARY KEY (cityid, oeuvreid)');
        $this->addSql('ALTER TABLE classification ALTER classificationid DROP DEFAULT');
        $this->addSql('ALTER TABLE constituent ALTER constituentid DROP DEFAULT');
        $this->addSql('ALTER TABLE country ALTER countryid DROP DEFAULT');
        $this->addSql('DROP INDEX "primary"');
        $this->addSql('ALTER TABLE oeuvre_country ADD PRIMARY KEY (countryid, oeuvreid)');
        $this->addSql('ALTER TABLE credit ALTER creditid DROP DEFAULT');
        $this->addSql('ALTER TABLE culture ALTER cultureid DROP DEFAULT');
        $this->addSql('ALTER TABLE departement ALTER departementid DROP DEFAULT');
        $this->addSql('ALTER TABLE excavation ALTER excavationid DROP DEFAULT');
        $this->addSql('ALTER TABLE gallery ALTER galleryid DROP DEFAULT');
        $this->addSql('ALTER TABLE geographytype ALTER geographytypeid DROP DEFAULT');
        $this->addSql('ALTER TABLE locale ALTER localeid DROP DEFAULT');
        $this->addSql('DROP INDEX "primary"');
        $this->addSql('ALTER TABLE locus_locale ADD PRIMARY KEY (localeid, locusid)');
        $this->addSql('ALTER TABLE locus ALTER locusid DROP DEFAULT');
        $this->addSql('ALTER TABLE mettable ALTER id DROP DEFAULT');
        $this->addSql('ALTER TABLE nationalityartist ALTER nationalityid DROP DEFAULT');
        $this->addSql('ALTER TABLE objectname ALTER objectid DROP DEFAULT');
        $this->addSql('ALTER TABLE oeuvre ALTER oeuvreid DROP DEFAULT');
        $this->addSql('ALTER TABLE period ALTER periodid DROP DEFAULT');
        $this->addSql('ALTER TABLE portfolio ALTER portfolioid DROP DEFAULT');
        $this->addSql('ALTER TABLE region ALTER regionid DROP DEFAULT');
        $this->addSql('DROP INDEX "primary"');
        $this->addSql('ALTER TABLE oeuvre_region ADD PRIMARY KEY (regionid, oeuvreid)');
        $this->addSql('ALTER TABLE reign ALTER reignid DROP DEFAULT');
        $this->addSql('ALTER TABLE repository ALTER repositoryid DROP DEFAULT');
        $this->addSql('ALTER TABLE rightsandreproduction ALTER rightsandreproductionid DROP DEFAULT');
        $this->addSql('ALTER TABLE river ALTER riverid DROP DEFAULT');
        $this->addSql('ALTER TABLE roleartist ALTER roleartistid DROP DEFAULT');
        $this->addSql('ALTER TABLE subcounty ALTER subcountyid DROP DEFAULT');
        $this->addSql('DROP INDEX "primary"');
        $this->addSql('ALTER TABLE oeuvre_subcounty ADD PRIMARY KEY (subcountyid, oeuvreid)');
        $this->addSql('ALTER TABLE tag ALTER tagid DROP DEFAULT');
        $this->addSql('ALTER TABLE title ALTER titleid DROP DEFAULT');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE artist_artistid_seq');
        $this->addSql('SELECT setval(\'artist_artistid_seq\', (SELECT MAX(artistid) FROM artist))');
        $this->addSql('ALTER TABLE artist ALTER artistid SET DEFAULT nextval(\'artist_artistid_seq\')');
        $this->addSql('CREATE SEQUENCE roleartist_roleartistid_seq');
        $this->addSql('SELECT setval(\'roleartist_roleartistid_seq\', (SELECT MAX(roleartistid) FROM roleartist))');
        $this->addSql('ALTER TABLE roleartist ALTER roleartistid SET DEFAULT nextval(\'roleartist_roleartistid_seq\')');
        $this->addSql('CREATE SEQUENCE nationalityartist_nationalityid_seq');
        $this->addSql('SELECT setval(\'nationalityartist_nationalityid_seq\', (SELECT MAX(nationalityid) FROM nationalityartist))');
        $this->addSql('ALTER TABLE nationalityartist ALTER nationalityid SET DEFAULT nextval(\'nationalityartist_nationalityid_seq\')');
        $this->addSql('CREATE SEQUENCE artistprefix_artistprefixid_seq');
        $this->addSql('SELECT setval(\'artistprefix_artistprefixid_seq\', (SELECT MAX(artistprefixid) FROM artistprefix))');
        $this->addSql('ALTER TABLE artistprefix ALTER artistprefixid SET DEFAULT nextval(\'artistprefix_artistprefixid_seq\')');
        $this->addSql('CREATE SEQUENCE artistsuffix_artistsufixid_seq');
        $this->addSql('SELECT setval(\'artistsuffix_artistsufixid_seq\', (SELECT MAX(artistsufixid) FROM artistsuffix))');
        $this->addSql('ALTER TABLE artistsuffix ALTER artistsufixid SET DEFAULT nextval(\'artistsuffix_artistsufixid_seq\')');
        $this->addSql('CREATE SEQUENCE mettable_id_seq');
        $this->addSql('SELECT setval(\'mettable_id_seq\', (SELECT MAX(id) FROM mettable))');
        $this->addSql('ALTER TABLE mettable ALTER id SET DEFAULT nextval(\'mettable_id_seq\')');
        $this->addSql('CREATE SEQUENCE reign_reignid_seq');
        $this->addSql('SELECT setval(\'reign_reignid_seq\', (SELECT MAX(reignid) FROM reign))');
        $this->addSql('ALTER TABLE reign ALTER reignid SET DEFAULT nextval(\'reign_reignid_seq\')');
        $this->addSql('CREATE SEQUENCE period_periodid_seq');
        $this->addSql('SELECT setval(\'period_periodid_seq\', (SELECT MAX(periodid) FROM period))');
        $this->addSql('ALTER TABLE period ALTER periodid SET DEFAULT nextval(\'period_periodid_seq\')');
        $this->addSql('CREATE SEQUENCE locale_localeid_seq');
        $this->addSql('SELECT setval(\'locale_localeid_seq\', (SELECT MAX(localeid) FROM locale))');
        $this->addSql('ALTER TABLE locale ALTER localeid SET DEFAULT nextval(\'locale_localeid_seq\')');
        $this->addSql('DROP INDEX locus_locale_pkey');
        $this->addSql('ALTER TABLE locus_locale ADD PRIMARY KEY (locusid, localeid)');
        $this->addSql('CREATE SEQUENCE locus_locusid_seq');
        $this->addSql('SELECT setval(\'locus_locusid_seq\', (SELECT MAX(locusid) FROM locus))');
        $this->addSql('ALTER TABLE locus ALTER locusid SET DEFAULT nextval(\'locus_locusid_seq\')');
        $this->addSql('CREATE SEQUENCE excavation_excavationid_seq');
        $this->addSql('SELECT setval(\'excavation_excavationid_seq\', (SELECT MAX(excavationid) FROM excavation))');
        $this->addSql('ALTER TABLE excavation ALTER excavationid SET DEFAULT nextval(\'excavation_excavationid_seq\')');
        $this->addSql('CREATE SEQUENCE country_countryid_seq');
        $this->addSql('SELECT setval(\'country_countryid_seq\', (SELECT MAX(countryid) FROM country))');
        $this->addSql('ALTER TABLE country ALTER countryid SET DEFAULT nextval(\'country_countryid_seq\')');
        $this->addSql('CREATE SEQUENCE river_riverid_seq');
        $this->addSql('SELECT setval(\'river_riverid_seq\', (SELECT MAX(riverid) FROM river))');
        $this->addSql('ALTER TABLE river ALTER riverid SET DEFAULT nextval(\'river_riverid_seq\')');
        $this->addSql('CREATE SEQUENCE region_regionid_seq');
        $this->addSql('SELECT setval(\'region_regionid_seq\', (SELECT MAX(regionid) FROM region))');
        $this->addSql('ALTER TABLE region ALTER regionid SET DEFAULT nextval(\'region_regionid_seq\')');
        $this->addSql('CREATE SEQUENCE subcounty_subcountyid_seq');
        $this->addSql('SELECT setval(\'subcounty_subcountyid_seq\', (SELECT MAX(subcountyid) FROM subcounty))');
        $this->addSql('ALTER TABLE subcounty ALTER subcountyid SET DEFAULT nextval(\'subcounty_subcountyid_seq\')');
        $this->addSql('CREATE SEQUENCE title_titleid_seq');
        $this->addSql('SELECT setval(\'title_titleid_seq\', (SELECT MAX(titleid) FROM title))');
        $this->addSql('ALTER TABLE title ALTER titleid SET DEFAULT nextval(\'title_titleid_seq\')');
        $this->addSql('CREATE SEQUENCE city_cityid_seq');
        $this->addSql('SELECT setval(\'city_cityid_seq\', (SELECT MAX(cityid) FROM city))');
        $this->addSql('ALTER TABLE city ALTER cityid SET DEFAULT nextval(\'city_cityid_seq\')');
        $this->addSql('CREATE SEQUENCE oeuvre_oeuvreid_seq');
        $this->addSql('SELECT setval(\'oeuvre_oeuvreid_seq\', (SELECT MAX(oeuvreid) FROM oeuvre))');
        $this->addSql('ALTER TABLE oeuvre ALTER oeuvreid SET DEFAULT nextval(\'oeuvre_oeuvreid_seq\')');
        $this->addSql('CREATE SEQUENCE objectname_objectid_seq');
        $this->addSql('SELECT setval(\'objectname_objectid_seq\', (SELECT MAX(objectid) FROM objectname))');
        $this->addSql('ALTER TABLE objectname ALTER objectid SET DEFAULT nextval(\'objectname_objectid_seq\')');
        $this->addSql('CREATE SEQUENCE culture_cultureid_seq');
        $this->addSql('SELECT setval(\'culture_cultureid_seq\', (SELECT MAX(cultureid) FROM culture))');
        $this->addSql('ALTER TABLE culture ALTER cultureid SET DEFAULT nextval(\'culture_cultureid_seq\')');
        $this->addSql('CREATE SEQUENCE gallery_galleryid_seq');
        $this->addSql('SELECT setval(\'gallery_galleryid_seq\', (SELECT MAX(galleryid) FROM gallery))');
        $this->addSql('ALTER TABLE gallery ALTER galleryid SET DEFAULT nextval(\'gallery_galleryid_seq\')');
        $this->addSql('CREATE SEQUENCE departement_departementid_seq');
        $this->addSql('SELECT setval(\'departement_departementid_seq\', (SELECT MAX(departementid) FROM departement))');
        $this->addSql('ALTER TABLE departement ALTER departementid SET DEFAULT nextval(\'departement_departementid_seq\')');
        $this->addSql('CREATE SEQUENCE tag_tagid_seq');
        $this->addSql('SELECT setval(\'tag_tagid_seq\', (SELECT MAX(tagid) FROM tag))');
        $this->addSql('ALTER TABLE tag ALTER tagid SET DEFAULT nextval(\'tag_tagid_seq\')');
        $this->addSql('CREATE SEQUENCE rightsandreproduction_rightsandreproductionid_seq');
        $this->addSql('SELECT setval(\'rightsandreproduction_rightsandreproductionid_seq\', (SELECT MAX(rightsandreproductionid) FROM rightsandreproduction))');
        $this->addSql('ALTER TABLE rightsandreproduction ALTER rightsandreproductionid SET DEFAULT nextval(\'rightsandreproduction_rightsandreproductionid_seq\')');
        $this->addSql('CREATE SEQUENCE repository_repositoryid_seq');
        $this->addSql('SELECT setval(\'repository_repositoryid_seq\', (SELECT MAX(repositoryid) FROM repository))');
        $this->addSql('ALTER TABLE repository ALTER repositoryid SET DEFAULT nextval(\'repository_repositoryid_seq\')');
        $this->addSql('CREATE SEQUENCE credit_creditid_seq');
        $this->addSql('SELECT setval(\'credit_creditid_seq\', (SELECT MAX(creditid) FROM credit))');
        $this->addSql('ALTER TABLE credit ALTER creditid SET DEFAULT nextval(\'credit_creditid_seq\')');
        $this->addSql('CREATE SEQUENCE constituent_constituentid_seq');
        $this->addSql('SELECT setval(\'constituent_constituentid_seq\', (SELECT MAX(constituentid) FROM constituent))');
        $this->addSql('ALTER TABLE constituent ALTER constituentid SET DEFAULT nextval(\'constituent_constituentid_seq\')');
        $this->addSql('CREATE SEQUENCE portfolio_portfolioid_seq');
        $this->addSql('SELECT setval(\'portfolio_portfolioid_seq\', (SELECT MAX(portfolioid) FROM portfolio))');
        $this->addSql('ALTER TABLE portfolio ALTER portfolioid SET DEFAULT nextval(\'portfolio_portfolioid_seq\')');
        $this->addSql('CREATE SEQUENCE geographytype_geographytypeid_seq');
        $this->addSql('SELECT setval(\'geographytype_geographytypeid_seq\', (SELECT MAX(geographytypeid) FROM geographytype))');
        $this->addSql('ALTER TABLE geographytype ALTER geographytypeid SET DEFAULT nextval(\'geographytype_geographytypeid_seq\')');
        $this->addSql('DROP INDEX oeuvre_country_pkey');
        $this->addSql('ALTER TABLE oeuvre_country ADD PRIMARY KEY (oeuvreid, countryid)');
        $this->addSql('DROP INDEX oeuvre_region_pkey');
        $this->addSql('ALTER TABLE oeuvre_region ADD PRIMARY KEY (oeuvreid, regionid)');
        $this->addSql('DROP INDEX oeuvre_subcounty_pkey');
        $this->addSql('ALTER TABLE oeuvre_subcounty ADD PRIMARY KEY (oeuvreid, subcountyid)');
        $this->addSql('DROP INDEX oeuvre_city_pkey');
        $this->addSql('ALTER TABLE oeuvre_city ADD PRIMARY KEY (oeuvreid, cityid)');
        $this->addSql('CREATE SEQUENCE classification_classificationid_seq');
        $this->addSql('SELECT setval(\'classification_classificationid_seq\', (SELECT MAX(classificationid) FROM classification))');
        $this->addSql('ALTER TABLE classification ALTER classificationid SET DEFAULT nextval(\'classification_classificationid_seq\')');
    }
}
