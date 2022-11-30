<?php

$con=mysqli_connect('localhost','root','','landing');

if($con) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['last'];
        $cedula = $_POST['cc'];
        $celular = $_POST['cel'];
        $email = $_POST['email'];
        $sql="INSERT INTO kirei (nome,apellido,cedu,celu,email)
        VALUES 
        ('$nombre','$apellido','$cedula','$celular','$email')";
        $result=mysqli_query($con,$sql);
        if ($result) 
        {
            echo "TODO GOOD ";
            
        }
        else
        {
            echo "Algo no esta bien :(";
        }
    }
    

}
else {
    echo "No conectado";
}