<?php

namespace App\Controller;

use App\Entity\Article;
use App\Form\Edit;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class EditController extends AbstractController
{

    #[Route('/article_edit/{id}', name: 'article_edit')]
    public function new(Request $request, Article $article, EntityManagerInterface $manager): Response
    {
        $form = $this->createForm(Edit::class, $article);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            foreach($form->getData() as $update)
            {
                $article->setTitle($update['name']);
                $article->setText($update['text']);
                $article->setImage($update['img']);
            }
            $date = \DateTime::createFromFormat('Y-m-d H:i:s', date("Y-m-d H:i:s"));
            $date -> setTimeZone(new \DateTimeZone('Europe/Vilnius'));
            $article->setDate($date);
            $manager->persist($article);
            $manager->flush();

            return $this->redirectToRoute('home');
        }

        return $this->render('pages/edit.html.twig', [
            'form' => $form->createView(),
            'article' => $article,
        ]);


    }
}