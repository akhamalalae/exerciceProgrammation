<?php

namespace App\Controller;

use App\Entity\Result;
use App\Entity\Companie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DashboardController extends AbstractController
{
    public function __construct(public EntityManagerInterface $entityManager)
    {
    }

    #[Route('/', name: 'app_dashboard')]
    public function index(): Response
    {
        $listOfCompanies = $this->entityManager->getRepository(Companie::class)->findAll();

        return $this->render('dashboard/index.html.twig', [
            'listOfCompanies' => $listOfCompanies,
        ]);
    }

    #[Route('/results/{id}', name: 'app_results')]
    public function results($id): Response
    {
        $totalCa2016 = 0;
        $totalMargin2016 = 0;
        $totalEbitda2016 = 0;
        $totalLoss2016 = 0;

        $totalCa2017 = 0;
        $totalMargin2017 = 0;
        $totalEbitda2017 = 0;
        $totalLoss2017 = 0;

        $dataGraphCa = array();
        $dataGraphMargin = array();
        $dataGraphEbitda = array();
        $dataGraphLoss = array();

        $companie = $this->entityManager->getRepository(Companie::class)->find($id);

        $results = $this->entityManager->getRepository(Result::class)->findBy(
            ['companie' => $companie]
        );

        foreach ($results as $result) {
            if($result->getYear() == 2016) {
                $totalCa2016 = $totalCa2016 + $result->getCA();
                $totalMargin2016 = $totalMargin2016 + $result->getMargin();
                $totalEbitda2016 = $totalEbitda2016 + $result->getEbitda();
                $totalLoss2016 = $totalLoss2016 + $result->getLoss();
            }else {
                $totalCa2017 = $totalCa2017 + $result->getCA();
                $totalMargin2017 = $totalMargin2017 + $result->getMargin();
                $totalEbitda2017 = $totalEbitda2017 + $result->getEbitda();
                $totalLoss2017 = $totalLoss2017 + $result->getLoss();
            }
        }

        array_push($dataGraphCa,$totalCa2016, $totalCa2017);
        array_push($dataGraphMargin,$totalMargin2016, $totalMargin2017);
        array_push($dataGraphEbitda,$totalEbitda2016, $totalEbitda2017);
        array_push($dataGraphLoss,$totalLoss2016, $totalLoss2017);

        return $this->render('dashboard/results.html.twig', [
            'dataGraphCa' => $dataGraphCa,
            'dataGraphMargin' => $dataGraphMargin,
            'dataGraphEbitda' => $dataGraphEbitda,
            'dataGraphLoss' => $dataGraphLoss,
            'results' => $results,
            'companie' => $companie,
        ]);
    }
}
