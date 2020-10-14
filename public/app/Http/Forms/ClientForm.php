<?php

namespace App\Http\Forms;

use Kris\LaravelFormBuilder\Form;

/**
 * Class AnnouncementForm
 * @package Modules\Platform\Announcement\Http\Forms
 */
class ClientForm extends Form
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
        $this->add('owned_by_type', 'text', [
            'label' => trans('Owned_by_type'),
            'attr' => [
                'placeholder' => trans('Owned_by_type')
            ]
        ]);
        $this->add('owned_by_id', 'number', [
            'label' => trans('owned_by_id'),
            'attr' => [
                'placeholder' => trans('Owned_by_id')
            ]
        ]);
        $this->add('contact_status_id', 'number', [
            'label' => trans('Contact_status_id'),
            'attr' => [
                'placeholder' => trans('Contact_status_id')
            ]
        ]);
        $this->add('contact_source_id', 'number', [
            'label' => trans('Contact_source_id'),
            'attr' => [
                'placeholder' => trans('Contact_source_id')
            ]
        ]);
        $this->add('fax', 'text', [
            'label' => trans('Fax'),
            'attr' => [
                'placeholder' => trans('Fax')
            ]
        ]);
        $this->add('assistant_name', 'text', [
            'label' => trans('Assistant_name'),
            'attr' => [
                'placeholder' => trans('Assistant_name')
            ]
        ]);
        $this->add('assistant_phone', 'number', [
            'label' => trans('Assistant_phone'),
            'attr' => [
                'placeholder' => trans('Assistant_phone')
            ]
        ]);
         $this->add('street', 'text', [
            'label' => trans('Street'),
            'attr' => [
                'placeholder' => trans('Street')
            ]
        ]);
          $this->add('state', 'text', [
            'label' => trans('State'),
            'attr' => [
                'placeholder' => trans('State')
            ]
        ]);
          $this->add('city', 'text', [
            'label' => trans('City'),
            'attr' => [
                'placeholder' => trans('City')
            ]
        ]);
          $this->add('country', 'text', [
            'label' => trans('Country'),
            'attr' => [
                'placeholder' => trans('Country')
            ]
        ]);
           $this->add('pincode', 'number', [
            'label' => trans('Pincode'),
            'attr' => [
                'placeholder' => trans('Pincode')
            ]
        ]);
            $this->add('notes', 'text', [
            'label' => trans('Notes'),
            'attr' => [
                'placeholder' => trans('Notes')
            ]
        ]);
             $this->add('company_id', 'number', [
            'label' => trans('Company_id'),
            'attr' => [
                'placeholder' => trans('Company_id')
            ]
        ]);
              $this->add('profile_image', 'file', [
            'label' => trans('profile_image'),
            'attr' => [
                'placeholder' => trans('profile_image')
            ]
        ]);
         
         $this->add('submit', 'submit', [
            'label' => trans('create client'),
            'attr' => ['class' => 'btn btn-primary m-t-15 waves-effect']
        ]);


    }
}
