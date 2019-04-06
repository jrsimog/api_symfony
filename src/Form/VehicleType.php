<?php

namespace App\Form;

use App\Entity\Vehicle;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class VehicleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('idChassis')
            ->add('mark')
            ->add('color')
            ->add('requestDate')
            ->add('stateFk')
            ->add('automotiveFk')
            ->add('branchOfficeFk')
            ->add('originFk')
            ->add('priorityFk')
            ->add('vehicleTypeFk')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Vehicle::class,
        ]);
    }
}
