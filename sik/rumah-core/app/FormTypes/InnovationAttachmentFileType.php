<?php

namespace App\FormTypes;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class InnovationAttachmentFileType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $attr = $options['attr'];

        // $attachment_types = ['Form latihan', 'form ketahanan', 'Rute dalam peta'];

        $builder->add('attachment_type', ChoiceType::class, $options['attachment_type_options']);

        $builder->add('attachment_file', FileType::class, $options['attachment_file_options']);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => null,
            'attachment_type_options' => [
                'required' => true,
                'mapped' => false,
                'label' => null,
                'choices' => [],
            ],
            'attachment_file_options' => [
                'required' => true,
                'mapped' => false,
                'label' => null,
            ],
        ]);
    }
}
