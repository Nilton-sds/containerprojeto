



<?php



include 'conexao.php';

$buscar_cadastros = "SELECT * FROM  cadastro1 ";
$query_cadastros = mysqli_query($connx, $buscar_cadastros);






?>









<!doctype html>
<html lang="en">
  <head>
    <title>Cadastro de cliente</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <h3><strong><center>Cadastro do Cliente </html></strong></h3>
  <body>

  <!-- Colococar a pagina centralizada -->
   <div class="container">  
  





        <?php
        
        while ($receber_cadastros = mysqli_fetch_array($query_cadastros))
        {
            $id = $receber_cadastros['id'];
            //$nome = $receber_cadastros['nome'];
            $nome = $_GET['parametro1'];
            $numerocontainer = $receber_cadastros['numerocontainer'];
            $tipo = $receber_cadastros['tipo'];
            $status = $receber_cadastros['status'];  
            $categoria = $receber_cadastros['categoria'];


            
 
?>    
<!--

             <th> ID CAD  <td scope="row"> <?php echo $id; ?></td>
           <br> <td>  <input type="text" name="nome" value=" <?php echo $nome; ?>" >
            <td>  <input type="text" name="numerocontainer" value=" <?php echo $numerocontainer; ?>" >
            


  
          <td> <form action="excluir.php" method="post">                             
        <input type="hidden" name="id" value=" <?php echo $id; ?>" >                    
          <td><input type="submit" value="EXCLUIR">
        </form>     -->

</tr>

    
           <?php }; ?>

          
          
        <form action="cadastro.php" method="post">


       
        
        <td> </td><form> <pre> 
        <br><strong><label>Nome</th> <td><input type="text" name="nome">  </td>
        <br><th>Numero container </th><td><input type="text" name="numerocontainer">  </td>  
        <br><label>Tipo</th> <td><input type="tipo" name="tipo">  </td>
        <br><label>Status</th> <td><input type="status" name="status">  </td>      
        <br><label>Categoria</th> <td><input type="categoria" name="categoria">  </td>



          <br><td><input type="submit" value="Cadastro"> </td></br>    
      
          </form>
    
          </tr>
       
    </tbody>
</table>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>