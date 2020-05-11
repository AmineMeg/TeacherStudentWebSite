<?php

namespace App\Controller;

use DateTime;
use App\Entity\User;
use App\Entity\Ligne;
use App\Entity\Exercice;
use App\Form\ExerciceType;
use App\Repository\UserRepository;
use App\Repository\ExerciceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MoodleController extends AbstractController
{
    /**
     * @Route("/", name="moodle")
     */
    public function index()
    {
        return $this->render('moodle/home.html.twig', [
            'controller_name' => 'MoodleController',
        ]);
    }

    /**
     * @Route("/create", name="createExo")
     */
    public function createExo(Request $request, EntityManagerInterface $manager, UserInterface $user){
        // $repo = new UserRepository();
        if($user == NULL){
            return $this->redirectToRoute('login');
        } else {

            $repo = $this->getDoctrine()
                    ->getManager()
                    ->getRepository('ExerciceRepository::class');
                    
            $found = $repo->findByName($user->getUsername());
        
            $exo = new Exercice();
            
            $form = $this->createForm(ExerciceType::class, $exo);

            $form->handleRequest($request);

            if($form->isSubmitted() && $form->isValid()){
                $exo->setCreatedAt(new \DateTime());
                $exo->setEtat(0);
                $exo->setAuteur($found);
                $manager->persist($exo);
                $manager->flush(); 

                return $this->redirectToRoute('modifyExo');
            }
            
            return $this->render('moodle/createExercice.html.twig', [
                'form' => $form->createView(),
            ]);
        }
    }

    /**
     * @Route("/modifyExo", name="modifyExo")
     */
    public function modifyExo(Request $request, EntityManagerInterface $manager)
    {
        return $this->render('moodle/home.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    

    
}