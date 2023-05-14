<?php

$name = $_POST["name"];
$email = $_POST["email"];
$number = $_POST["number"];
$message = $_POST["message"];


$host = "localhost";
$dbname = "formdata";
$username = "root";
$password = "";

$conn = mysqli_connect(hostname: $host,
                       username: $username,
                       password: $password,
                       database: $dbname);

    if (mysqli_connect_errno() ){
        die("Connection error : " . mysqli_connect_error());
    }

    $sql = "INSERT INTO contactformdata (name, email, number, message)
            VALUES (?, ?, ?, ? )";

    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        die(mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "ssss",
                            $name,
                            $email,
                            $number,
                            $message);

    mysqli_stmt_execute($stmt);

    echo '

    <!DOCTYPE html>

    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Fit Station</title>
    </head>
    <body>

    <div id="contact">

    <h2> Thank you for contacting us. We will get back to you as soon as possible! </h2>

    <a href="index.html">Go back to the homepage <br><br> <img src="Layer-1.png" alt="Logo" height="50px" /></a>

    </div>

    </body>
    </html>


    <style>

        #contact a{
            font-size: 20px;
            color: white;
        }

        #contact a:hover{
            font-size:25px;
            color: #880808;
            text-decoration:none;
        }

        /* Media Query for Mobile Devices */
        @media (max-width: 480px) {

            #contact h2{
                font-size: 30px;
            }

            #contact a{
                font-size: 20px;
                color: white;
            }
    
            #contact a:hover{
                font-size:23px;
                color: #880808;
                text-decoration:none;
            }
 
        }
          
      /* Media Query for Tablets Ipads portrait mode */
        @media (min-width: 768px) and (max-width: 1024px){
            #contact a{
                font-size: 25px;
                color: white;
            }

            #contact img{
                height: 80px;
            }
    
            #contact a:hover{
                font-size:30px;
                color: #880808;
                text-decoration:none;
            }
 
        }
          
             /* Media Query for Laptops and Desktops */
             @media (min-width: 1025px) and (max-width: 1280px){
                #contact a{
                    font-size: 30px;
                    color: white;
                }
        
                #contact a:hover{
                    font-size:35px;
                    color: #880808;
                    text-decoration:none;
                }
       }
          
 
                 /* Media Query for Large screens */
                 @media (min-width: 1281px) {
                    #contact a{
                        font-size: 30px;
                        color: white;
                    }

                    #contact img{
                        height: 90px;
                    }
            
                    #contact a:hover{
                        font-size:35px;
                        color: #880808;
                        text-decoration:none;
                    }
      }
 

    </style>

    ';

?>