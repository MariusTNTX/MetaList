<?php
  
  function getVerifyEmailHTML($code){
      return "<head><meta charset='UTF-8'></head><body><div style='text-align:center;padding:1rem 3rem;background-color:rgb(33,37,41);margin:3rem auto;max-width:500px;color:white;'><hr style='height:0.5rem;background-color:rgb(220,33,14);margin:2rem 0;border:0px solid;'><div style='font-size:1.5rem;margin-bottom:2rem;'>! Gracias por confiar en MetaList !</div><div style='font-size:1.25rem;margin-bottom:3rem;'>Regresa a la ventana de verificación y pega el siguiente código:</div><div style='margin-bottom:3rem;'><b style='letter-spacing:10px;border-radius:0.375rem;font-size:2.5rem;padding:0.5rem 0.5rem 0.5rem 1rem;background-color:white;color:rgb(33,37,41);'>".$code."</b></div><hr style='height:0.5rem;background-color:rgb(220,33,14);margin:2rem 0;border:0px solid;'></div></body>";
  }
  
  function generateNewPass(){
    $specials = ['!','#','$','%','/','(',')','=','¿','º','@','¡','^','*','-','_','.',':',',',';','ñ','ç'];
    $password = [];
    for($i=0;$i<3;$i++) array_push($password,$specials[rand(0,count($specials)-1)]);
    for($i=0;$i<3;$i++) array_push($password,chr(rand(48,57)));
    for($i=0;$i<3;$i++) array_push($password,chr(rand(65,90)));
    for($i=0;$i<3;$i++) array_push($password,chr(rand(97,122)));
    shuffle($password);
    return implode("",$password);
  }
  
  function getNewPassHTML($user, $pass){
      return "<head><meta charset='UTF-8'></head><body><div style='text-align:center;padding:2rem;background-color:rgb(33,37,41);margin:3rem auto;max-width:500px;color:white;'><div style='border:3px solid rgb(220,33,14);padding:0.5rem 1rem;'><p style='font-size:1.5rem;'>Hola <span style='color:rgb(238,55,29);'>".$user."</span>,</p><p style='font-size:1.25rem;margin-bottom:3rem;'>Tu contraseña original ha sido sustituida por la siguiente:</p><div style='margin-bottom:3rem;'><b style='letter-spacing:10px;border-radius:0.375rem;font-size:2rem;padding:0.5rem 0.5rem 0.5rem 1rem;background-color:white;color:rgb(33,37,41);'>".$pass."</b></div></div></div></body>";
  }
?>
