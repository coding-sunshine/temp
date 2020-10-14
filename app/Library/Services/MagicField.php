<?php
namespace App\Library\Services;
use Illuminate\Support\Facades\DB;
  
class MagicField
{
   
    public static function getTableColumnAndTypeList($tableName, $fullType = false){
          $fieldAndTypeList = [];
          foreach (DB::select( "describe $tableName")  as $key => $field){
            $type = ($fullType || !str_contains($field->Type, '('))? $field->Type: substr($field->Type, 0, strpos($field->Type, '('));
            $fieldAndTypeList[$field->Field] = $type;
        
        }
      return $fieldAndTypeList;
    }

    public static function getFieldsDetails($tableName, $fieldName){
       $fieldAndTypeList = [];
       $fieldDetails = [];

      if($tableName == 'properties'){
       switch ($fieldName){
          case 'developer_project_ID':
           $fieldDetails['label'] = 'Developer project id';
           $fieldDetails['title'] = 'Developer id';
           $fieldDetails['view'] = False;
           $fieldDetails['edit'] = False;
           $fieldDetails['readonly'] = True;
          
          break; 
          case 'lot':
           $fieldDetails['label'] = 'lot';
           $fieldDetails['title'] = 'lot';
           $fieldDetails['view'] = False;
           $fieldDetails['edit'] = False;
           $fieldDetails['readonly'] = True;
           
          break; 
          case 'price':
           $fieldDetails['label'] = 'Price';
           $fieldDetails['title'] = 'Price';
           $fieldDetails['view'] = False;
           $fieldDetails['edit'] = False;
           $fieldDetails['readonly'] = True;
          
          break; 

          case 'bedrooms':
            $fieldDetails['label'] = 'Bedrooms';
            $fieldDetails['title'] = 'Bedrooms';
            $fieldDetails['view'] = False;
            $fieldDetails['edit'] = False;
            $fieldDetails['readonly'] = True;
           
           break; 

           case 'bathrooms':
            $fieldDetails['label'] = 'Bathrooms';
            $fieldDetails['title'] = 'Bathrooms';
            $fieldDetails['view'] = False;
            $fieldDetails['edit'] = False;
            $fieldDetails['readonly'] = True;
           
           break; 

           case 'garage':
            $fieldDetails['label'] = 'Garage';
            $fieldDetails['title'] = 'Garage';
            $fieldDetails['view'] = False;
            $fieldDetails['edit'] = False;
            $fieldDetails['readonly'] = True;
           
           break; 

           case 'car':
            $fieldDetails['label'] = 'Car';
            $fieldDetails['title'] = 'Car';
            $fieldDetails['view'] = False;
            $fieldDetails['edit'] = False;
            $fieldDetails['readonly'] = True;
           
           break; 

           case 'price':
            $fieldDetails['label'] = 'Price';
            $fieldDetails['title'] = 'Price';
            $fieldDetails['view'] = False;
            $fieldDetails['edit'] = False;
            $fieldDetails['readonly'] = True;
           
           break; 

           case 'status_ID':
            $fieldDetails['label'] = 'Property status';
            $fieldDetails['title'] = 'Property status';
            $fieldDetails['view'] = False;
            $fieldDetails['edit'] = False;
            $fieldDetails['readonly'] = True;
           
           break; 

           case 'is_smsf':
            $fieldDetails['label'] = 'SMSF';
            $fieldDetails['title'] = 'SMSF';
            $fieldDetails['view'] = False;
            $fieldDetails['edit'] = False;
            $fieldDetails['readonly'] = True;
           
           break; 

           case 'is_cashflow_positive':
            $fieldDetails['label'] = 'Cashflow positive';
            $fieldDetails['title'] = 'Cashflow positive';
            $fieldDetails['view'] = False;
            $fieldDetails['edit'] = False;
            $fieldDetails['readonly'] = True;
           
           break; 

           case 'is_nras':
            $fieldDetails['label'] = 'NRAS';
            $fieldDetails['title'] = 'NRAS';
            $fieldDetails['view'] = False;
            $fieldDetails['edit'] = False;
            $fieldDetails['readonly'] = True;
           
           break; 

         
       }
     
      }else if($tableName == 'statuses'){
        switch ($fieldName){
          case 'label':
            $fieldDetails['label'] = 'Label';
            $fieldDetails['title'] = 'Label';
            $fieldDetails['view'] = False;
            $fieldDetails['edit'] = False;
            $fieldDetails['readonly'] = True;
           
           break; 
        }
      }else if($tableName == 'developer_projects'){
        switch ($fieldName){
          case 'estate':
            $fieldDetails['label'] = 'Estate';
            $fieldDetails['title'] = 'Label';
            $fieldDetails['view'] = False;
            $fieldDetails['edit'] = False;
            $fieldDetails['readonly'] = True;
           break; 
           case 'suburb':
            $fieldDetails['label'] = 'Suburb';
            $fieldDetails['title'] = 'Suburb';
            $fieldDetails['view'] = False;
            $fieldDetails['edit'] = False;
            $fieldDetails['readonly'] = True;
           
           break; 
           case 'lots':
            $fieldDetails['label'] = 'Lots';
            $fieldDetails['title'] = 'Suburb';
            $fieldDetails['view'] = False;
            $fieldDetails['edit'] = False;
            $fieldDetails['readonly'] = True;
           
           break; 
           case 'text_intro':
            $fieldDetails['label'] = 'Text Intro';
            $fieldDetails['title'] = 'Text Intro';
            $fieldDetails['view'] = False;
            $fieldDetails['edit'] = False;
            $fieldDetails['readonly'] = True;
           
           break; 
        }
      }
      return $fieldDetails;
   }
}