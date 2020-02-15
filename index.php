<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href = "css/bootstrap.min.css">
    <link rel="stylesheet" href = "css/style.css">
</head>
<body>
     
     <h1 class="text-center my-5 text-danger"> Task one answers by fatma saad </h1>

        <?php 

     ################################ start  problem 1  Sum Of Array Elements #########################

       function getSum($arr){
            $res = 0;
            foreach ($arr as $num) {
                $res += $num;
            }
            return $res;
       }

       $nums =[4,1,6,5,10];

       echo "<h2>1- Sum Of Array Elements is :" . getSum($nums)." </h2>";


       
     ################################ start  problem 2  search function  #########################

          function search($arr,$keyword){
               $flag = false;
               foreach ($arr as $word) {
                   if($keyword == $word){
                       $flag = true;
                       break;
                   }
               }
               return $flag;
          }

          $arr=['php','javascript','java','python','C'];
          $keyword = 'Ruby';
          echo "<h2>2- Search of Elements in array result :" . search($arr,$keyword)." </h2>";

      ################################ start  problem 3  max function  #########################

       function getMax($arr){
           $maxNum =$arr[0];
           foreach ($arr as $num ) {
               if($num >$maxNum){
                   $maxNum = $num;
               }
           }
         return $maxNum;
       }

       $nums=[4,1,6,5,10];


       echo "<h2>3- Max Element in array is :" . getMax($nums)." </h2>";
      

    ################################ start  problem 4 validation  function  #########################


    function validate($age){

        $ageType = is_numeric($age);

        if($age == " "){
            return " age is required ";
        }
        else if($ageType == false){
            return " age must be an integer";
        }
        else if ($age < 0 || $age >150){
            return " age mast be greater than 0 and less than 150" ;
        }
        else{
            return "your age is $age";
        }
    }
  
    $age = '160';
    echo "<h2>4- age validation result is :" . validate($age)." </h2>";
     

  ################################ start  problem 5  #########################
 
         $employees = array(
             'fatma saad'=> array( 'position'=> 'Front End Developer' , 'img'=>'2.jpg'),
              'Ahmed Ezzat'  => array('position'=> 'Back End Developer' , 'img'=>'1.jpg' ),
              'Mohammed Saad'  => array('position'=> 'Full stack  Developer' , 'img'=>'3.jpg' )
         );
        
         ?>

    <div class="container my-5">
            <div class="row "> 
                <?php

                foreach ( $employees  as $name => $data) { ?>
                                <div class="col-md-4">
                                    <div class="item">
                                            <div class="card" >
                                                <img src="upploads/<?php echo $data['img'] ?> " class="card-img-top" alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title"> <?php echo $name  ?> </h5>
                                                    <p class="card-text"> <?php echo $data['position'] ?> </p>
                                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                                </div>
                                            </div> <!--./card -->
                                        </div> <!--./item -->
                                </div> <!--./col-md-4 -->
               <?php   } ?>

            </div> <!--./row -->

        </div> <!--./container -->
                

        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

</body>
</html>


