<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class CategoryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Category::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name'),
            ChoiceField::new('color')
                ->setChoices([
                    'Rouge' => 'danger',
                    'Vert' => 'success',
                    'Bleu' => 'primary',
                    'Jaune' => 'warning',
                    'Gris' => 'secondary',
                    'Noir' => 'dark',
                    'Cyan' => 'info',
                    'Clair' => 'light',
                ]),
        ];
    }
    
}
