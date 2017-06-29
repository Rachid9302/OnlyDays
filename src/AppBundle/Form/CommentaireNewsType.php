<?php
/**
 * Created by PhpStorm.
 * User: Erwan
 * Date: 21/06/2017
 * Time: 22:09
 */

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class CommentaireNewsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('texteCommentaire', TextareaType::class)
           ->add('datecreation', DateType::class)
           ->add('note');
    }

    public function getName()
    {
        return 'appbundle_commentaire';
    }
}