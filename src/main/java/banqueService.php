<?php

    $mt=0;  
    if(isset($_POST["montant"])){
		
		
    $myapi = new SoapClient("http://localhost:8089/banqueWS?wsdl");
	
     //$fcs = $myapi->__getFunctions();
      //$types = $myapi->__getTypes();
       //var_dump($fcs);  
        // var_dump($types);   
		
   $mt=$_POST["montant"];
   $request_param = new stdClass();
   $request_param->montant=$mt;
   
  try
{
    $resultat = $myapi->ConvertionEuroToDA($request_param);
	 //echo ($resultat->return);
    
} 
catch (Exception $e) 
{ 
    echo "<h2>Exception Error!</h2>"; 
    echo $e->getMessage(); 
}



	}
?>

<html>
   <body>
         <h1 style="color:blue;text-align:center"> Convertir  EURO en DINAR </h1>
        <form action="banqueService.php" method="post" style="position: absolute; left: 40%;" >
		     <label>Entrer Le Montant (EURO) SVP </label><br>
		    <input type="text" name="montant" /><br>
			<input type ="submit" value="calculer">
		</form>
		<?php  if(isset($resultat)){  ?>
		<label style="position: absolute; left: 40%; top:150px ; font-weight:bold;"> <?php echo $mt ?> Euro est : <?php echo ($resultat->return )?> DA  </label>
		<?php }?>
    </body>

</html>