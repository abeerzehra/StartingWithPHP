<html>
<head>
    <h1>Form</h1>
</head>

<body>
    <?php
    //Full_name,Age,Email, password,address,phone_number
        $AllInfo =[
            "abeer.zehra@gmail.com"=>["Password","20","Abeer","H#1424/C","0334-6764290"],

            "zehra.syed@gmail.com"=>["P@ssword","22","Zehra","H#1428/C","0334-6764292"],

            "maria.ahmed@gmail.com"=>["passworD","24","Maria","H#1432/C","0334-6764294"]
        ];
        $found = 0;
        if(isset($_POST["email"]) && isset($_POST["password"])){
            $email = $_POST["email"];
            $Password = $_POST["password"];
            echo("<pre>");
            foreach($AllInfo as $keyy=>$valuee){ 
                foreach($valuee as $key=>$value){
                    if($value==$Password && $keyy==$email ){
                        echo"<b>Login scessful!!</b>";
                        echo"<br>";  
                        echo "Email:" .$email;
                        $outcome=array_slice( $valuee, 1, null, true);
                        echo"<pre>";
                        var_dump($outcome);
                        
                        echo"<br>";
                        $found =1;
                         die;
                        
                    }   
                }
            }
            if($found==0){ echo"Not found";} 
        }

        
       
            
    ?>
   
        <form method="POST">
            <div>
                <label>Email:-</label>
                <input type="email"  name="email">
                <label>Password:-</label>
                <input type="password" name="password">
            </div>
            <input type="submit" value="submit">
            
        </form>

</body>


</html>