<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CinemaController extends AbstractController
{
    private $peliculas;
    private $nombreCine;

    public function __construct()
    {
        // Array de películas dirigidas por mujeres
        $this->peliculas = [
            [
                'titulo' => 'Lost in Translation',
                'director' => 'Sofia Coppola',
                'resumen' => 'Un actor en decadencia y una joven recién graduada se encuentran en un hotel de Tokio y entablan una inesperada amistad mientras exploran la ciudad juntos y se enfrentan a sus propios problemas personales.',
                'foto' => 'images/lost_in_translation.jpg'
            ],
            [
                'titulo' => 'The Hurt Locker',
                'director' => 'Kathryn Bigelow',
                'resumen' => 'La película sigue a un equipo de artificieros del ejército de los Estados Unidos durante la Guerra de Irak, centrándose en la tensión y el peligro constante que enfrentan mientras desactivan bombas.',
                'foto' => 'images/the_hurt_locker.jpg'
            ],
            [
                'titulo' => 'The Kids Are All Right',
                'director' => 'Lisa Cholodenko',
                'resumen' => 'La historia gira en torno a una pareja de lesbianas que tienen dos hijos adolescentes concebidos mediante inseminación artificial. Cuando sus hijos deciden localizar a su donante de esperma biológico, las dinámicas familiares se ven desafiadas y se revelan secretos ocultos.',
                'foto' => 'images/the_kids_are_all_right.jpg'
            ]
        ];

        // Nombre del cine
        $this->nombreCine = 'Cinema Picheleiras';
    }

    #[Route('/')]

    public function homepage()
    {

        return $this->render('cinema/homepage.html.twig', [
            'title' => $this->nombreCine
        ]);
    }
    #[Route('/presenta')]
    public function presenta()
    {

        return $this->render('cinema/presenta.html.twig', [
            'title' => $this->nombreCine,
            'peliculas' => $this->peliculas
        ]);
    }

    #[Route('/fichas/{titulo}')]
    
    public function fichas($titulo){

        return $this->render('cinema/fichas.html.twig', ['titulo' =>$titulo]);

    }

}
