<?php
namespace Acme\UserBundle\Form\Type;

use Symfony\Component\Form\FormBuilder;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

class RegistrationFormType extends BaseType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        parent::buildForm($builder, $options);

        // add your custom field
        $builder->add('name', null, array('label' => 'fos_user_registration_form_name'));
		$builder->add('lastname');
		$builder->add('phone');
    }

    public function getName()
    {
        return 'acme_user_registration';
    }
	  public function getLastname()
    {
        return 'acme_user_registration';
    }
	  public function getPhone()
    {
        return 'acme_user_registration';
    }
}