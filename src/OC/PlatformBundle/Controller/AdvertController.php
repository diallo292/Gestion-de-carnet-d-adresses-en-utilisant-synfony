<?php
// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;
use OC\PlatformBundle\Advert; 
use OC\PlatformBundle\Entity\User;
use OC\PlatformBundle\Entity\Contact;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ResetType;
use Symfony\Component\HttpFoundation\Session\Session;

class AdvertController extends Controller
{


	public function reussiAction(Request $request)
	{
		return $this->render('OCPlatformBundle:Advert:reussi.html.twig');
	}
  public function connexionAction(Request $request)
  {
    // On crée un objet Advert
    $advert = new Advert();
    $setitle=new  TextType();
   $da= new \DateTime('tomorrow');
    $advert ->setdate($da);
   
    	 $form = $this->createFormBuilder() 
    ->add('Email',   	EmailType::class)
    ->add('Mot_de_passe' , PasswordType::class)
    ->add('connexion',submitType::class)
    ->getForm();
     $form->handleRequest($request);
     $data = $form->getData();
     $data1= $listAdverts = array(
      array('Email' => $data['Email'], 'pass' => $data['Mot_de_passe']));
if ($form->isSubmitted() && $form->isValid()) {
        // ... perform some action, such as saving the task to the database
     

     
       return $this->render('OCPlatformBundle:Advert:reussi.html.twig',array('pass' => $form));
    }

 return $this->render('OCPlatformBundle:Advert:Connexion.html.twig', array(
      'form' => $form->createView(),
    ));

    }
     public function addAction(Request $request){
    //$advert->setitle($setitle);

    // On crée le FormBuilder grâce au service form factory
  //  $formBuilder = $this->get('form.factory')->createBuilder('form', $advert);
$User=new User();
    // On ajoute les champs de l'entité que l'on veut à notre formulaire
   $form = $this->createFormBuilder($User) 
     ->add('DateNaissance',      BirthdayType::class)
    ->add('nom',     TextType::class)
    ->add('prenom',    TextType::class)
    ->add('adresse',     TextType::class)
    ->add('ville',    TextType::class)
    ->add('phone',     TextType::class)
    ->add('pays',    CountryType::class)
    ->add('username',TextType::class)
   ->add('Email',   EmailType::class)
    ->add('password' ,PasswordType::class)
    ->add('soumettre',submitType::class)
    ->add('annuler',ResetType::class)
    ->getForm();
    
;        
    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();

    // Étape 1 : On « persiste » l'entité


    // Étape 2 : On « flush » tout ce qui a été persisté avant
 
 $form->handleRequest($request);
if ($form->isSubmitted() && $form->isValid()) { 
//$User->setPassword($User->getSalt());

$userManager = $this->container->get('fos_user.user_manager');
        $User->setPlainPassword($User->getpassword());
        $User->setEnabled(true);
        $userManager->updatePassword($User);

	$em->persist($User);

    // Étape 2 : On « flush » tout ce qui a été persisté avant
    $em->flush();

       $request->getSession()->getFlashBag()->add('notice', 'données bien enregistrées.');
     $data = $form->getData();

         return $this->render('OCPlatformBundle:Advert:reussi.html.twig');
    } 

    // On passe la méthode createView() du formulaire à la vue
    // afin qu'elle puisse afficher le formulaire toute seule
    return $this->render('OCPlatformBundle:Advert:add.html.twig', array(
      'form' => $form->createView(),
    ));
  }







  public function menuAction()
  {
    // On fixe en dur une liste ici, bien entendu par la suite
    // on la récupérera depuis la BDD !25665bbjfhjbhh
    $listAdverts = array(
      array('id' => 2, 'title' => 'Recherche dévelhjhkjjhjjh_ijhhikjh'),
      array('id' => 5, 'title' => 'Mission de webmashhhjhhkjhjhkjnjjhukjhjjhter'),
      array('id' => 9, 'title' => 'Offre de stage webdesigner')
    );
    return $this->render('OCPlatformBundle:Advert:menu.html.twig', array(
      // Tout l'intérêt est ici : le contrôleur passe
      // les variables nécessaires au template !
      'listAdverts' => $listAdverts
    ));
  }
  //
    public function indexAction()
  {
$listAdverts = array(
      array(
        'title'   => 'Recherche développpeur Symfony2',
        'id'      => 1,
        'author'  => 'Alexandre',
        'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
        'date'    => new \Datetime()),
      array(
        'title'   => 'Mission de webmaster',
        'id'      => 2,
        'author'  => 'Hugo',
        'content' => 'Nous recherchons un webmaster capable de maintenir notre site internet. Blabla…',
        'date'    => new \Datetime()),
      array(
        'title'   => 'Offre de stage webdesigner',
        'id'      => 3,
        'author'  => 'Mathieu',
        'content' => 'Nous proposons un poste pour webdesigner. Blabla…',
        'date'    => new \Datetime())
    );

    // Et modifiez le 2nd argument pour injecter notre liste
    return $this->render('OCPlatformBundle:Advert:index.html.twig', array(
      'listAdverts' => $listAdverts));
  }
  public function viewAction($id=0)
  {
  	
    $advert = array(
      'title'   => 'Recherche développpeur Symfony2',
      'id'      => $id,
      'author'  => 'Alexandre',
      'content' => 'Nous recherchons un développeur Symfony2 débutant sur Lyon. Blabla…',
      'date'    => new \Datetime()
    );

    return $this->render('OCPlatformBundle:Advert:view.html.twig', array(
      'advert' => $advert
    ));
  }
  public function clientAction($id=0)
  {
  
  	return $this->render('client.html.twig');
  }

  public function contactAction(Request $request)
    {
         $form = $this->createFormBuilder() 
    ->add('Email',   	EmailType::class)
    ->add('sujet' , TextType::class)
     ->add('contenu' , TextareaType::class)                       
    ->add('Envoyer',SubmitType::class)
    ->getForm();
     $form->handleRequest($request);	
     $data = $form->getData();
     $data1= $listAdverts = array(
      array('Email' => $data['Email'], 'pass' => $data['Mot_de_passe']));

    
if ($form->isSubmitted() && $form->isValid()&&($request->getMethod() == 'POST')) {
        // ... perform some action, such as saving the task to the database
     

      $form->bindRequest($request);

            $data = $form->getData();

            $message = \Swift_Message::newInstance()
                ->setContentType('text/html')
                ->setSubject($data['subject'])
                ->setFrom($data['email'])
                ->setTo('xxxxx@gmail.com')
                ->setBody($data['content']);

            $this->get('mailer')->send($message);

            // Launch the message flash
            $this->get('session')->setFlash('notice', 'Merci de nous avoir contacté, nous répondrons à vos questions dans les plus brefs délais.');
        } 

                    return $this->render('OCPlatformBundle:Advert:formcontact.html.twig', array(
      'form' => $form->createView(),
    )); 
                }



public function AjoutAction(Request $request){
$user=$user = $this->get('security.token_storage')->getToken()->getUser();

$Contact=new Contact();
    // On ajoute les champs de l'entité que l'on veut à notre formulaire
   $form = $this->createFormBuilder($Contact) 
     ->add('date',      BirthdayType::class)
    ->add('nom',     TextType::class)
    ->add('prenom',    TextType::class)
    ->add('adresse',     TextType::class)
    ->add('phone',     TextType::class)
    ->add('soumettre',submitType::class)
    ->add('annuler',ResetType::class)
    ->getForm();   
    $Contact->setUser($user);
    // On récupère l'EntityManager
    $em = $this->getDoctrine()->getManager();

 $form->handleRequest($request);
if ($form->isSubmitted() && $form->isValid()) { 

	$em->persist($Contact);
    $em->flush();

       $request->getSession()->getFlashBag()->add('notice', 'données bien enregistrées.');
    
         return $this->render('Client.html.twig');
    } 
    // On passe la méthode createView() du formulaire à la vue
    // afin qu'elle puisse afficher le formulaire toute seule
    return $this->render('OCPlatformBundle:Advert:infocontact.html.twig', array(
      'form' => $form->createView(),
    ));
  }

  public function ListerAction(Request $request){
$user=$user = $this->get('security.token_storage')->getToken()->getUser();

$Contact=new Contact();
    // On ajoute les champs de l'entité que l'on veut à notre formulaire  
  $repository = $this
  ->getDoctrine()
  ->getManager()
  ->getRepository('OCPlatformBundle:Contact')
;


$liste = $repository->findBy(
  array('user' => $user), // Critere
  array('date' => 'desc'),        // Tri
  5,                              // Limite
  0                               // Offset
);

//

 return $this->render('OCPlatformBundle:Advert:liste.html.twig',array('liste'=>$liste));
            }

            public function SupprimerAction(Request $request){
$user=$user = $this->get('security.token_storage')->getToken()->getUser();

$Contact=new Contact();
    // On ajoute les champs de l'entité que l'on veut à notre formulaire  
  $repository = $this
  ->getDoctrine()
  ->getManager()
  ->getRepository('OCPlatformBundle:Contact')
;


$liste = $repository->findBy(
  array('user' => $user), // Critere
  array('date' => 'desc')
);

//

 return $this->render('OCPlatformBundle:Advert:Supprimer.html.twig',array('liste'=>$liste));
            }}