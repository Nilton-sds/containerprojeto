



     <td> </td><form> <pre> 
        <form id="" method="POST" action="teste.php">

        <br><strong><label>Nome</th> <td><input type="text" name="nome">  </td>
        <br><th>Numero container </th><td><input type="text" name="numerocontainer">  </td>  
        <br><label>Tipo</th> <td><input type="tipo" name="tipo">  </td>
        <br><label>Status</th> <td><input type="status" name="status">  </td>      
        <br><label>Categoria</th> <td><input type="categoria" name="categoria">  </td>



          <br><td><input type="submit" value="Cadastro"> </td></br>    
      
        
   



          </form>
    

          <?php
   
   try{
   
    if(empty($_GET["parametro1"]))
          throw new Exception("nenhum valor para paramtro 1")
 
    $nome = $_GET['parametro1'];
    $numerocontainer= $_GET["parametro2"];
    
    $nome = $receber_cadastros['nome'];
 
 
 } catch(Exception $e){
 echo $e= "não temos dados";
 
 }
    
   
   ?>
   
   
   
  

       
        
     
    
         




   