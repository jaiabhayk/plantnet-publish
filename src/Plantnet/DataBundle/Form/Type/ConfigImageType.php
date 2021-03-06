<?php

namespace Plantnet\DataBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\CallbackValidator;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormError;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\OptionsResolver\Options;

class ConfigImageType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder,array $options)
    {
        $builder
            ->add('file','file',array(
                'label'=>'Image file',
                'required'=>true
            ))
        ;
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class'=>'Plantnet\DataBundle\Document\Config',
        );
    }

    public function getName()
    {
        return 'config';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class'=>'Plantnet\DataBundle\Document\Config',
        ));
    }
}