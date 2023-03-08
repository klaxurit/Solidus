<?php

namespace App\Controller\Admin;

use App\Config\Status;
use App\Entity\Valuation;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\Field;

class ValuationCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Valuation::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            ChoiceField::new('status')->setChoices(Status::cases()),
        ];
    }
}
