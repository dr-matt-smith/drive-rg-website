<?php

namespace App\Controller;

use App\Entity\MemberPublication;
use App\Form\MemberPublication1Type;
use App\Repository\MemberPublicationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/memberpublication")
 */
class MemberPublicationController extends AbstractController
{
    /**
     * @Route("/", name="member_publication_index", methods={"GET"})
     */
    public function index(MemberPublicationRepository $memberPublicationRepository): Response
    {
        return $this->render('member_publication/index.html.twig', [
//            'member_publications' => $memberPublicationRepository->findAll(),
            'member_publications' => $memberPublicationRepository->findAllByPublicationThenAuthorSequence()
        ]);
    }

    /**
     * @Route("/new", name="member_publication_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $memberPublication = new MemberPublication();
        $form = $this->createForm(MemberPublication1Type::class, $memberPublication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($memberPublication);
            $entityManager->flush();

            return $this->redirectToRoute('member_publication_index');
        }

        return $this->render('member_publication/new.html.twig', [
            'member_publication' => $memberPublication,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="member_publication_show", methods={"GET"})
     */
    public function show(MemberPublication $memberPublication): Response
    {
        return $this->render('member_publication/show.html.twig', [
            'member_publication' => $memberPublication,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="member_publication_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, MemberPublication $memberPublication): Response
    {
        $form = $this->createForm(MemberPublication1Type::class, $memberPublication);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('member_publication_index');
        }

        return $this->render('member_publication/edit.html.twig', [
            'member_publication' => $memberPublication,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="member_publication_delete", methods={"DELETE"})
     */
    public function delete(Request $request, MemberPublication $memberPublication): Response
    {
        if ($this->isCsrfTokenValid('delete'.$memberPublication->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($memberPublication);
            $entityManager->flush();
        }

        return $this->redirectToRoute('member_publication_index');
    }
}
