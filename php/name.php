<?php

class Product
{

   private $name=array();
   function __constructer($name)
   {
    $this->name = $name;
   }
   function GetName( $parameter)
   {
     $this->name= array(
       
        'ProductONE' => array(
          'watch'=> 'https://media.istockphoto.com/id/1189983695/photo/smart-watch-for-branding-and-mock-up-3d-render-illustration.jpg?s=2048x2048&w=is&k=20&c=gtEOE3RPZOZAzKQO7wWybz4XN-iiv471f3gtoQCtuZI=',                              
          'Card'=>'https://media.istockphoto.com/id/1180795255/vector/blank-company-lanyard-realistic-mockup-with-blank-black-id-card-hanging-on-blue-neck-strap.jpg?s=612x612&w=0&k=20&c=6BHk7-dsqXxDiwXm-K4LFAQtRp3j-Shk1DIi-gvTPJc=',
          'boowam'=>"https://miro.medium.com/v2/da:true/resize:fit:1200/0*ZjYSm_q36J4KChdn",

        ),
        'ProductTwo' => array
        (
            'earing'=>"https://www.oberlo.com/media/1635315155-etsy.jpeg",
            'Skrit'=>'https://keiytambanhkhmer.com/wp-content/uploads/2021/11/2021-11-28-15.55.22.jpg',
            'Wellet'=>'https://lh3.googleusercontent.com/proxy/DleeAIbzUfxbbV4P35ummUg9y1Pi_mP4XA2dRxVjkZL6F65_EGZHNAJBllDlhCLYilOjlETxpDfguvhjJqdommzXbD8XGHQ5K7hxQiIMUyAQipOLCCqhit3ygoO0wfTHoRIMSF2A5yP5UoEw6c5m7XdAnTAw4v0',  
            'nekless'=>'https://i.pinimg.com/originals/52/9a/db/529adbf6c644765184494d0c7fc5c676.jpg',
            'ring'=> 'https://i.etsystatic.com/11821412/r/il/c47f10/4790826576/il_fullxfull.4790826576_fviu.jpg',
        ),

     );
     return $this->name[$parameter];
   }

}


$Tagname = new Product();

$TagenameProduct = $Tagname->GetName('ProductONE');
$TagenameProductTwo = $Tagname->GetName('ProductTwo');


?>