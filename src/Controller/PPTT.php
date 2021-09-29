<?php
// src/Controller/Customer.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Translation\Translator;
use Symfony\Component\Translation\Loader\ArrayLoader;

class PPTT extends AbstractController
{
    /**
     * @Route(
     *     "/{_locale}",
     *     name="homepage",
     *     requirements={
     *         "_locale": "en|fr|de",
     *     }
     * )
     */
    public function homepage(): Response
    {
        return $this->render('pptt/rounds.html.twig', [
            'name' => 'Hello world'
        ]);
    }

    /**
     * @Route("/tournament/")
     */
    public function tournament(): Response
    {
        return $this->render('pptt/rounds.html.twig', []);
    }


    /**
     * @Route("/round/{number}", name="round")
     */
    public function round(int $number): Response
    {
        return $this->render('pptt/round.html.twig', [
            'number' => $number,
        ]);
    }
}
