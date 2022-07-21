<?php 

if(isset($_POST["sub"]))
{
    $num=$_POST["num"];
    if($num%2==0)
    {
        // echo "<script>
        
        // alert('The number is Even')
        // window.location='form.php';
        // </script>";

        echo "<h4 align='center' style='color:green'>The number is Even</h4>";
        header('refresh:4,form.php');
    }
    else 
    {
        
        // echo "<script>
        
        // alert('The number is Odd')
        // window.location='form.php';
        // </script>";

        
        echo "<h4 align='center' style='color:red'>The number is Odd</h4>";
        header('refresh:4,form.php');
    }
}


?>