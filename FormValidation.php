<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <h1>Form Validation</h1>
    </head>

    <body>
        <?php include_once('./constant.php')?>
        <?php


            $user =[
                "user1"=>[
                    "id"=>"danin@abc.com",
                    "password"=>"Password1",
                    "full_name"=>"ABC"
                ],
                "user2"=>[
                    "id"=>"dxyz@abc.com",
                    "password"=>"Password1",
                    "full_name"=>"XYZ"
                ],
                "user3"=>[
                    "id"=>"IJK@abc.com",
                    "password"=>"Password1",
                    "full_name"=>"IJK"
                ],
            ];
            $errors = [];
            $valid_user = false;
            $error_exist = false;

            if(isset($_GET['submit'])){

                foreach($_GET as $key =>$value){
                    if(empty($value)){
                        $error[$key]=ERROR_MESSAGE;
                    }
                    
                }
                if(!$error_exist){
                    $email = $_GET['email'];
                    $pass = $_GET['password'];
                    foreach($user as $user){

                        if($email == $user["id"] &&  $pass = $user["password"]){
                            $valid_user=true;
                            echo"welcome";
                            echo "<pre>";
                            echo($user["full_name"]);
                            die;
                        }
                        //Agar banda exist nahi karta toh 
                        else{
                            $error = "Credentials are not correct";
                        }
                    }
                }

                // if(isset($_GET['full_name'])){
                //     $error['full_name']=ERROR_MESSAGE; 
                // }
                // if(isset($_GET['email'])){
                //     $error['email']=ERROR_MESSAGE; 
                // }
                // if(isset($_GET['password'])){
                //     $error['password']=ERROR_MESSAGE; 
                // }

            }
        
        ?>
        <?php if(!$valid_user){?>
        <form>
            <div>
                <small><?php echo isset($error['full_name'])?$error['full_name']: '' ?></small>
                <input name="full_name" placeholder="Full Name" value = " <?php echo isset($_GET['full_name'])? $_GET['full_name'] :''?> " >
            </div>
            
            <div>
                <small><?php echo isset($error["email"])?$error["email"]: '' ?></small>
                <input type="email" name="email" placeholder="Email address">
            </div>

            <div>
                <small><?php echo isset($error["password"])?$error["password"]: '' ?></small>
                <input type="password" name="password" placeholder="*******">
            </div>


            <input type="submit" name="submit">

        </form>
        <?php }?>
        

        <!-- <script
        src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
        crossorigin="anonymous"></script> -->
    </body>


</html> 