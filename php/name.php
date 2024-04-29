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
          'boom'=>"https://ih1.redbubble.net/image.2329477566.1257/gsss,large,product,750x1000.webp",

        ),

        'ProductTwo' => array
        (
            'earing'=>"https://www.oberlo.com/media/1635315155-etsy.jpeg",
            'Skrit'=>'https://keiytambanhkhmer.com/wp-content/uploads/2021/11/2021-11-28-15.55.22.jpg',
            'Wellet'=>'https://shopsatu.com/cdn/shop/products/untitled-13_6_1024x1024.jpg?v=1627474145',  
            'nekless'=>'https://i.pinimg.com/originals/52/9a/db/529adbf6c644765184494d0c7fc5c676.jpg',
            'ring'=> 'https://i.etsystatic.com/11821412/r/il/c47f10/4790826576/il_fullxfull.4790826576_fviu.jpg',
            'khor'=>"https://m.media-amazon.com/images/I/61E+3B4RhPL._AC_UY1100_.jpg",
            "name"=>"url pic",
        ),

     );
     return $this->name[$parameter];
   }

}


$Tagname = new Product();
$TagenameProduct = $Tagname->GetName('ProductONE');
$TagenameProductTwo = $Tagname->GetName('ProductTwo');


?>