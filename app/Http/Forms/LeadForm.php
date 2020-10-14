<?php

namespace App\Http\Forms;
use Kris\LaravelFormBuilder\Form;

/**
 * Class AnnouncementForm
 * @package Modules\Platform\Announcement\Http\Forms
 */
class LeadForm extends Form
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
        $this->add('skype', 'text', [
            'label' => trans('Skype'),
            'attr' => [
                'placeholder' => trans('Skype')
            ]
        ]);
        $this->add('fax', 'text', [
            'label' => trans('Fax'),
            'attr' => [
                'placeholder' => trans('Fax')
            ]
        ]);
        $this->add('company', 'text', [
            'label' => trans('Company'),
            'attr' => [
                'placeholder' => trans('Company')
            ]
        ]);
        $this->add('website', 'text', [
            'label' => trans('Website'),
            'attr' => [
                'placeholder' => trans('Website')
            ]
        ]);
        $this->add('annual_revenue', 'text', [
            'label' => trans('Annual_revenue'),
            'attr' => [
                'placeholder' => trans('Annual_revenue')
            ]
        ]);
        $this->add('no_of_employees', 'text', [
            'label' => trans('No_of_employees'),
            'attr' => [
                'placeholder' => trans('No_of_employees')
            ]
        ]);
        $this->add('description', 'text', [
            'label' => trans('Description'),
            'attr' => [
                'placeholder' => trans('Description')
            ]
        ]);
        $this->add('company_id', 'text', [
            'label' => trans('Company id'),
            'attr' => [
                'placeholder' => trans('Company id')
            ]
        ]);
         $this->add('profile_image', 'file', [
            'label' => trans('profile_image'),
            'attr' => [
                'placeholder' => trans('profile_image')
            ]
        ]);
           $this->add('submit', 'submit', [
            'label' => trans('create lead'),
            'attr' => ['class' => 'btn btn-primary m-t-15 waves-effect']
        ]);
    }
}



      