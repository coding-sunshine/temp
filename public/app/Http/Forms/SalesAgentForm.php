<?php

namespace  App\Http\Forms;

use Kris\LaravelFormBuilder\Form;

/**
 * Class AnnouncementForm
 * @package Modules\Platform\Announcement\Http\Forms
 */
class SalesagentForm extends Form
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
        $this->add('job_title', 'text', [
            'label' => trans('Job_title'),
            'attr' => [
                'placeholder' => trans('Job_title')
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
       
        $this->add('phone', 'number', [
            'label' => trans(' Office Phone Number'),
            'attr' => [
                'placeholder' => trans('Office Phone Number')
            ]
        ]);
        $this->add('mobile', 'number', [
            'label' => trans('Mobile Number'),
            'attr' => [
                'placeholder' => trans('Mobile Number')
            ]
        ]);
        $this->add('home_phone', 'text', [
            'label' => trans('Home_phone'),
            'attr' => [
                'placeholder' => trans('Home_phone')
            ]
        ]);
        
        $this->add('Address_street', 'text', [
            'label' => trans('address_street'),
            'attr' => [
                'placeholder' => trans('Address_street')
            ]
        ]);
            $this->add('submit', 'submit', [
            'label' => trans('create salesagent'),
            'attr' => ['class' => 'btn btn-primary m-t-15 waves-effect']
        ]);
    }
}
