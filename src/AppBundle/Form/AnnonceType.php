<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AnnonceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('reference')
            ->add('titre')
            ->add('description')
            ->add('superficie')
            ->add('piece')
            ->add('chambre')
            ->add('lit')
            ->add('cuisine')
            ->add('voyageurmax')
            ->add('wifi')
            ->add('prixnuit')
            ->add('dateDepot')
            ->add('firstimage')
            ->add('localisation')
            ->add('typepropriete')
            ->add('auteur')
            ->add('last_auteur')
            ->add('arrondissement');
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
