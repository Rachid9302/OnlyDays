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

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('content', TextareaType::class);
           // ->add('dateDepot', DateType::class);
    }

    public function getName()
    {
        return 'comment';
    }
}