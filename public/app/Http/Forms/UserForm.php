<?php

namespace App\Http\Forms;

use Kris\LaravelFormBuilder\Form;

/**
 * Class AnnouncementForm
 * @package Modules\Platform\Announcement\Http\Forms
 */
class UserForm extends Form
{
    public function buildForm()
    {
        $this->add('first_name', 'text', [
            'label' => trans('First_name'),
            'attr' => [
                'placeholder' => trans('First_name')
            ]
        ]);
        $this->add('last_name', 'text', [
            'label' => trans('Last_name'),
            'attr' => [
                'placeholder' => trans('Last_name')
            ]
        ]);
        $this->add('username', 'text', [
            'label' => trans('Username'),
            'attr' => [
                'placeholder' => trans('Username')
            ]
        ]);
        $this->add('password', 'password', [
            'label' => trans('Password'),
            'attr' => [
                'placeholder' => trans('Password')
            ]
        ]);
        $this->add('title', 'text', [
            'label' => trans('title'),
            'attr' => [
                'placeholder' => trans('title')
            ]
        ]);
        $this->add('email', 'email', [
            'label' => trans('Email'),
            'attr' => [
                'placeholder' => trans('Email')
            ]
        ]);
         $this->add('secondary_email', 'email', [
            'label' => trans('Secondary email'),
            'attr' => [
                'placeholder' => trans('Secondary email')
            ]
        ]);
        
        $this->add('department', 'text', [
            'label' => trans('Department'),
            'attr' => [
                'placeholder' => trans('Department')
            ]
        ]);
       
        $this->add('office_phone', 'number', [
            'label' => trans(' Office Phone Number'),
            'attr' => [
                'placeholder' => trans('Office Phone Number')
            ]
        ]);
        $this->add('mobile_phone', 'number', [
            'label' => trans('Mobile Number'),
            'attr' => [
                'placeholder' => trans('Mobile Number')
            ]
        ]);
        $this->add('home_phone', 'number', [
            'label' => trans('Home phone Number'),
            'attr' => [
                'placeholder' => trans('Home phone Number')
            ]
        ]);
        $this->add('signature', 'text', [
            'label' => trans('Signature'),
            'attr' => [
                'placeholder' => trans('Signature')
            ]
        ]);

        $this->add('fax', 'text', [
            'label' => trans('fax'),
            'attr' => [
                'placeholder' => trans('fax')
            ]
        ]);
        $this->add('address_street', 'text', [
            'label' => trans('Address street'),
            'attr' => [
                'placeholder' => trans('Address street')
            ]
        ]);
        $this->add('address_city', 'text', [
            'label' => trans('address_city'),
            'attr' => [
                'placeholder' => trans('address_city')
            ]
        ]);
        $this->add('address_state', 'text', [
            'label' => trans('address_state'),
            'attr' => [
                'placeholder' => trans('address_state')
            ]
        ]);
        $this->add('address_country', 'text', [
            'label' => trans('address_country'),
            'attr' => [
                'placeholder' => trans('address_country')
            ]
        ]);
        
        $this->add('address_postal_code', 'number', [
            'label' => trans('address_postal_code'),
            'attr' => [
                'placeholder' => trans('address_postal_code')
            ]
        ]);
        $this->add('profile_image', 'file', [
            'label' => trans('profile_image'),
            'attr' => [
                'placeholder' => trans('profile_image')
            ]
        ]);
        
      $this->add('submit', 'submit', [
            'label' => trans('create user'),
            'attr' => ['class' => 'btn btn-primary m-t-15 waves-effect']
        ]);
    }
}
















