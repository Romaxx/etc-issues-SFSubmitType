<?php

namespace App\Form\Type;

use ...;

class Custom2FormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('searchfield', SearchType::class, array(
            'required' => true
        ));
        $builder->add('searchbutton',SubmitType::class,array(
            'label'=>'Search'
        ));

        $builder->addEventListener(
            FormEvents::SUBMIT,
            function (FormEvent $event) use ($options) {
                $form = $event->getForm();
                $data = $event->getData();

                if (!is_null($form->getClickedButton())){
                    switch ($form->getClickedButton()->getName()){
                        case 'searchbutton':
                           
                            //here the problem, when searchbutton SubmitType is clicked from parent, this trigger occur, 
                            //but self searchbutton hasnt be pushed
                            break;
                    }
                }
            }
        );

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            //some stuff
        ));

        $resolver->setRequired(array(
            //some stuff
        ));
    }

}
