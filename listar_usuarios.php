<?php include('conexao.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sua Página</title>

  <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">





  <form action="">
        <input name="busca" value="<?php if(isset($_GET['busca'])) echo $_GET['busca']; ?>" placeholder="Digite os termos de pesquisa" type="text">
        <button type="submit">Pesquisar</button> </form>

  <table width="600px" border="1"
          </br>
                      <tr>

            <th>id</th>
            <th>nome</th>
            <th>numero container</th>
            </tr>
      




<?php



$pesquisa = $_GET['busca'];
 $pesquisa = $connx->real_escape_string($_GET['busca']);
$sql_code = "SELECT * 
    FROM cadastro1
    WHERE nome LIKE '%$pesquisa%' OR numerocontainer LIKE '%$pesquisa%'";
$sql_query = $connx->query($sql_code) or die("ERRO ao consultar! " . $connx->error); 

if ($sql_query->num_rows == 0) {
    ?>
<tr>
    <td colspan="3">Nenhum resultado encontrado...    </td>
   
</tr>
<?php
} else {
    while($dados = $sql_query->fetch_assoc()
       ) {
      
        
        ?>
        <tr>
    
                   
         
          


            <td><?php echo $dados['id']; ?></td>
            <td><?php echo $dados['nome']; ?></td>
            <td><?php echo $dados['numerocontainer']; ?></td>
      

            </form>
        </tr>
        </tr>
                    <?php
                }
            }
            ?>
        <?php
        ?>
    

  

  
         



 



</head>
<body>
  
  








</body>
</html>