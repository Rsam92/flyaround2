<?php

namespace WCS\CoavBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use WCS\CoavBundle\Entity\Review;
use WCS\CoavBundle\Form\ReviewType;

/**
 * Class ReviewController
 * @package WCS\CoavBundle\Controller
 *
 * @Route("review")
 */
class ReviewController extends Controller
{
	/**
	 * @return \Symfony\Component\HttpFoundation\Response
	 *
	 * @Route("/",    name="review_index")
	 * @Method("GET")
	 */
    public function indexAction()
    {
        //to display all the reviews by users
        //we retrieve the Doctrine service and its entity mgr
        $em = $this->getDoctrine()->getManager();
        //Once its done, we charge entity review and
        $reviews = $em->getRepository('WCSCoavBundle:Review')->findAll();
        //we return to our views an object which is called 'reviews'. morelike select * from review
        return $this->render('review/index.html.twig', array(
            'reviews' => $reviews,
        ));
    }

	/**
	 * @return \Symfony\Component\HttpFoundation\Response
	 *
	 * @Route("/new",  name="review_new")
	 * @Method({"GET", "POST"})
	 */
    public function newAction(Request $request)
    {
        $review = new Review();
        $form = $this->createForm(ReviewType::class, $review);
       // return $this->render('review/new.html.twig');
        // build the form ...

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($review);
            $em->flush();

            // You can use too :
            // return $this->redirect($this->generateUrl('review_show', array('id' => $review->getId())))

            return $this->redirectToRoute('review_show', array('id' => $review->getId()));
        }

        return $this->render('review/new.html.twig', array(
            'review' => $review,
            'form' => $form->createView(),
        ));
    }

    /*La première est simple, on instancie juste un objet $review de type Review.
- La deuxième quant à elle,
    nécessite plus d'attention.
    En effet, on décide de créer un objet $form qui va récuperer le retour de la méthode `createForm()`.
    Celle-ci prend deux paramètres obligatoires, ta classe formulaire (donc ReviewType) et un objet $review
    qui recevera toutes les informations que tu auras envoyé lors de la soumission du formulaire.
*/
    }
