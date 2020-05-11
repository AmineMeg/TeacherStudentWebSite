<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\SignUpType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/security", name="security")
     */
    public function index()
    {
        return $this->render('security/index.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }

    /**
     * @Route("/login", name="login")
     */
    public function logIn()
    {
        return $this->render('security/login.html.twig', [
            'controller_name' => 'SecurityController',
        ]);

    }
    /**
     * @Route("/logout", name="logout")
     */
    public function logOut()
    {
        return $this->render('security/index.html.twig', [
            'controller_name' => 'SecurityController',
        ]);
    }

    /**
     * @Route("/signup", name="signup")
     */
    public function signUp(Request $request, EntityManagerInterface $manager, UserPasswordEncoderInterface $encoder){
    {
        $user = new User();
        
        $form = $this->createForm(SignUpType::class, $user);
        
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $hash = $encoder->encodePassword($user, $user->getPassword());

            $user->setPassword($hash);

            $manager->persist($user);
            $manager->flush(); 

            return $this->redirectToRoute('login');

        }



        return $this->render('security/signup.html.twig',[
            'formSignup' => $form->createView()
        ]);
    }
}
    
}