<?php
    
    namespace App\Controller\Partials;

    use App\Repository\CategoryRepository;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;

    final class NavController extends AbstractController{

        public function getCategories(CategoryRepository $repo): Response{
            return $this->render('partials/_nav_categories.html.twig',[
                'categories'=> $repo->findAll()
            ]);
        }

    }