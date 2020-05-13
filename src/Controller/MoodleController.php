<?php

namespace App\Controller;

use DateTime;
use App\Entity\User;
use App\Entity\Cours;
use App\Entity\Ligne;
use App\Form\CoursType;
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
            'controller_name' => 'MoodleController'
        ]);
    }

    /**
     * @Route("/cours/{id}/createExo", name="createExo")
     */
    public function createExo(Cours $cours = null, Request $request, EntityManagerInterface $manager, UserInterface $user){
        // $repo = new UserRepository();
        if($cours == NULL){
            return $this->redirectToRoute('createCours');
        } 
        if($user == NULL){
            return $this->redirectToRoute('login');
        } else {
            $repo = $this->getDoctrine()
                    ->getManager()
                    ->getRepository(User::class);
                    
            $found = $repo->findOneBy(array('username' => $user->getUsername()));
            if ($found->getIsProf()){
                $exo = new Exercice();
                
                $form = $this->createForm(ExerciceType::class, $exo);

                $form->handleRequest($request);

                if($form->isSubmitted() && $form->isValid()){
                    $exo->setCreatedAt(new \DateTime());
                    $exo->setEtat(0);
                    $exo->setCours($cours);
                    $manager->persist($exo);
                    $manager->flush(); 

                    $mon_exo = $this->getDoctrine()
                    ->getManager()
                    ->getRepository(Exercice::class)
                    ->findOneBy(array('id' => $exo->getId()));

                    return $this->redirectToRoute('modifyExo', ['idCours' => $cours->getId(), 'idExercice' => $exo->getId(), 'my_exo' => $mon_exo]);
                }
                
                $repo_exos = $this->getDoctrine()
                    ->getManager()
                    ->getRepository(Exercice::class)
                    ->findBy(
                        array('cours' => $cours->getId()),
                        NULL,
                        NULL,
                        NULL
                    );

                return $this->render('moodle/createExercice.html.twig', [
                    'form' => $form->createView(),
                    'titre' => $cours->getTitre(),
                    'id' => $cours->getId(),
                    'exos' => $repo_exos
                ]);   
            } else {
                return $this->redirectToRoute('moodle');
            }
        }
    }

    /**
     * @Route("/createCours", name="createCours")
     */
    public function createCours(Request $request, EntityManagerInterface $manager, UserInterface $user){
        // $repo = new UserRepository();
        if($user == NULL){
            return $this->redirectToRoute('login');
        } else {

            $repo = $this->getDoctrine()
                    ->getManager()
                    ->getRepository(User::class);
                    
            $found = $repo->findOneBy(array('username' => $user->getUsername()));
            
            if ($found->getIsProf()){
                $cours = new Cours();
            
                $form = $this->createForm(CoursType::class, $cours);

                $form->handleRequest($request);

                if($form->isSubmitted() && $form->isValid()){
                    $cours->setAuteur($found);
                    $manager->persist($cours);
                    $manager->flush(); 
                    return $this->redirectToRoute('createExo', ['id' => $cours->getId()]);
                }
                
                $repo_cours = $this->getDoctrine()
                    ->getManager()
                    ->getRepository(Cours::class)
                    ->findBy(
                        array('auteur' => $user->getId()),
                        NULL,
                        NULL,
                        NULL
                    );

                return $this->render('moodle/createCours.html.twig', [
                    'form' => $form->createView(),
                    'courss' => $repo_cours
                ]);
            } else {
                return $this->redirectToRoute('moodle');
            }   
        }
    }

    /**
     * @Route("cours/{idCours}/{idExercice}/modifyExo", name="modifyExo")
     */
    public function modifyExo(Request $request, EntityManagerInterface $manager)
    {

        return $this->render('moodle/modifyExo.html.twig');
    }

    


    