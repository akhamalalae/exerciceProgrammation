<?php

namespace App\DataFixtures;

use App\Service\Api;
use App\Entity\Result;
use App\Entity\Companie;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function __construct(private Api $api) {
    }

    public function load(ObjectManager $manager): void
    {
        $companiesInformation = $this->api->fetchCompaniesInformation();

        foreach ($companiesInformation as $informationCompanie) {
            $companie = new Companie();
            $companie->setName($informationCompanie['name']);
            $companie->setSector($informationCompanie['sector']);
            $companie->setSiren($informationCompanie['siren']);
            $companie->setIdAPI($informationCompanie['id']);

            $manager->persist($companie);
        }

        $manager->flush();

        $resultsInformation = $this->api->fetchResultsInformation();

        foreach ($resultsInformation as $informationResult) {
            $result = new Result();
            $result->setIdAPI($informationResult['id']);
            $result->setCa($informationResult['ca']);
            $result->setMargin($informationResult['margin']);
            $result->setEbitda($informationResult['ebitda']);
            $result->setLoss($informationResult['loss']);
            $result->setYear($informationResult['year']);

            $companie = $manager->getRepository(Companie::class)->findOneBy(
                ['idAPI' => $informationResult['business']]
            );

            $result->setCompanie($companie);

            $manager->persist($result);
        }

        $manager->flush();
    }
}
