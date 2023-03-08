<?php

namespace App\Controller\Admin;

use App\Entity\Notary;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class NotaryCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Notary::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */
}
