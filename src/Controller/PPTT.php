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
     * @Route({
     *      "en": "results",
     *      "de": "resultate"
     *      }, name="homepage",
     *      requirements={
     *         "_locale": "en|de",
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
     * @Route({
     *     "en": "/round/{number}",
     *     "de": "/runde/{number}"
     *     }, name="round",
     *     requirements={
     *         "_locale": "en|de",
     *     })
     */
    public function round(int $number): Response
    {
        return $this->render('pptt/round.html.twig', [
            'number' => $number,
        ]);
    }
}
