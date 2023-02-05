<?php 


    $connection = mysqli_connect('localhost','root','','booking');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];
        $guests = $_POST['guests'];
        $arrivals = $_POST['arrivals'];
        $leaving = $_POST['leaving'];


        $_request = "insert into  book_form(name,email,phone,address,location,guests,arrivals,leaving) values 
        ('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving')";

        // $select = "select * from book_form";
        
        mysqli_query($connection, $_request);
             
          
        header('location:book.php');
        
    }else{
        echo 'somthing went wrong try again'; 
    }
?>