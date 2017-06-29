<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class AnnonceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('titre')
            ->add('description')
            ->add('superficie')
            ->add('piece')
            ->add('chambre')
            ->add('lit')
            ->add('cuisine')
            ->add('voyageurmax', TextType::class, array(
                'label' => "Voyageur maximum"
            ))
            ->add('wifi')
            ->add('prixnuit', TextType::class, array(
                'label' => "Prix nuit"
            ))
            ->add('dateDepot', HiddenType::class )
            ->add('firstimage')
            ->add('typepropriete', TextType::class, array(
                'label' => "Type de propriété"
            ))
            ->add('auteur', HiddenType::class )
            ->add('last_auteur', HiddenType::class)
            ->add('arrondissement', ChoiceType::class, array(
                'choices' => array(
                    '1 arrondissement' => '1',
                    '2 arrondissement' => '2',
                    '3 arrondissement' => '3',
                    '4 arrondissement' => '4',
                    '5 arrondissement' => '5',
                    '6 arrondissement' => '6',
                    '7 arrondissement' => '7',
                    '8 arrondissement' => '8',
                    '9 arrondissement' => '1',
                )
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Annonce'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_annonce';
    }


}
