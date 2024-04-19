<!-- //store static data -->
<?php
class Pic{

    private $pic =array();
    //associative array
    function  __constructer ( $pic)
    {
      $this->pic = $pic;
    }
    function Getpic( $parameter)
    {
      $this->pic = array(
     'Amok'=>"Amok-2.png",
     'khmer'=> array(
        'earing'=>"https://www.oberlo.com/media/1635315155-etsy.jpeg",
        'Skrit'=>'https://keiytambanhkhmer.com/wp-content/uploads/2021/11/2021-11-28-15.55.22.jpg',
        'Wellet'=>'https://lh3.googleusercontent.com/proxy/DleeAIbzUfxbbV4P35ummUg9y1Pi_mP4XA2dRxVjkZL6F65_EGZHNAJBllDlhCLYilOjlETxpDfguvhjJqdommzXbD8XGHQ5K7hxQiIMUyAQipOLCCqhit3ygoO0wfTHoRIMSF2A5yP5UoEw6c5m7XdAnTAw4v0',
        'idk'=>'https://www.thefairtradevillage.com/wp-content/uploads/2019/06/FTV-Masks-Product_AHA-3548-600x300.jpg',
     ),
      );
      return $this->pic[$parameter];
    }
}

$object = new Pic();
$NewObject = new Pic();
$NewObject =$object->Getpic('khmer');


// $servername = "localhost";
// $username ="root";
// $password ="";
// $dbname= "RUPP";

// $conn = new mysqli($servername, $username, $password ,$dbname);
// if( $conn->connect_error){
//     die("connection error". $conn->connect_error);

// }
// $succus =" conecct succues";
// echo($succus);
// $sql= "SELECT * From 'ProjectS1";
// $result =$conn->query($sql);

// if( $result->num_rows>0)
// {
// while( $row =$result->fetch_assoc() )
// {
//     echo ("Price: " . $row["price"].
//      " Pic: " . $row["url"].
//      " Name" . $row["name"]. "<br" );
// }
// }
// $conn->close();

?>