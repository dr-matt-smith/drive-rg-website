<?php

namespace App\Controller;

use App\Entity\MemberStatus;
use App\Form\MemberStatusType;
use App\Repository\MemberStatusRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/memberstatus")
 */
class MemberStatusController extends AbstractController
{
    /**
     * @Route("/", name="member_status_index", methods={"GET"})
     */
    public function index(MemberStatusRepository $memberStatusRepository): Response
    {
        return $this->render('member_status/index.html.twig', [
            'member_statuses' => $memberStatusRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="member_status_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $memberStatus = new MemberStatus();
        $form = $this->createForm(MemberStatusType::class, $memberStatus);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($memberStatus);
            $entityManager->flush();

            return $this->redirectToRoute('member_status_index');
        }

        return $this->render('member_status/new.html.twig', [
            'member_status' => $memberStatus,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="member_status_show", methods={"GET"})
     */
    public function show(MemberStatus $memberStatus): Response
    {
        return $this->render('member_status/show.html.twig', [
            'member_status' => $memberStatus,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="member_status_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, MemberStatus $memberStatus): Response
    {
        $form = $this->createForm(MemberStatusType::class, $memberStatus);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('member_status_index');
        }

        return $this->render('member_status/edit.html.twig', [
            'member_status' => $memberStatus,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="member_status_delete", methods={"DELETE"})
     */
    public function delete(Request $request, MemberStatus $memberStatus): Response
    {
        if ($this->isCsrfTokenValid('delete'.$memberStatus->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($memberStatus);
            $entityManager->flush();
        }

        return $this->redirectToRoute('member_status_index');
    }
}
