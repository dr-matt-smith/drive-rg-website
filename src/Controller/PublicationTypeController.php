<?php

namespace App\Controller;

use App\Entity\PublicationType;
use App\Form\PublicationTypeType;
use App\Repository\PublicationTypeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/publicationtype")
 */
class PublicationTypeController extends AbstractController
{
    /**
     * @Route("/", name="publication_type_index", methods={"GET"})
     */
    public function index(PublicationTypeRepository $publicationTypeRepository): Response
    {
        return $this->render('publication_type/index.html.twig', [
            'publication_types' => $publicationTypeRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="publication_type_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $publicationType = new PublicationType();
        $form = $this->createForm(PublicationTypeType::class, $publicationType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($publicationType);
            $entityManager->flush();

            return $this->redirectToRoute('publication_type_index');
        }

        return $this->render('publication_type/new.html.twig', [
            'publication_type' => $publicationType,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="publication_type_show", methods={"GET"})
     */
    public function show(PublicationType $publicationType): Response
    {
        return $this->render('publication_type/show.html.twig', [
            'publication_type' => $publicationType,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="publication_type_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PublicationType $publicationType): Response
    {
        $form = $this->createForm(PublicationTypeType::class, $publicationType);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('publication_type_index');
        }

        return $this->render('publication_type/edit.html.twig', [
            'publication_type' => $publicationType,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="publication_type_delete", methods={"DELETE"})
     */
    public function delete(Request $request, PublicationType $publicationType): Response
    {
        if ($this->isCsrfTokenValid('delete'.$publicationType->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($publicationType);
            $entityManager->flush();
        }

        return $this->redirectToRoute('publication_type_index');
    }
}
