
<?php require_once("../controlador/mostrar_registro.php");?>

<div class="container align-content-center justify-content-center">

<h1 class="">Números comprados</h1>
<div>
<table class="table " id="orden" >
  <thead class="table-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th></th>
      <th scope="col">Apellido</th>
      <th scope="col">Numero</th>
      <th>correo</th>
      <th>Dirección</th>
      <th >Fecha de Ingreso </th>
    </tr>
  </thead>
  <tbody id="body">
  <?php 
          
            if($consultasql): foreach($consultasql as $row):
                
    ?>
    <tr>
      <td style="color: black;"><?php echo $row['idpersona']?></td>
      <td><?php echo $row['nombre']?></td>
      <td><?php echo $row['apellido_p']?></td>
      <td><?php echo $row['numero']?></td>
      <td><?php echo "<small>".$row['correo']."</small>"?></td>
      <td><?php echo $row['direccion']?></td>
      <td ><?php echo $row['fecha_ingreso']?>
      
      </td>
      
    </tr>
    
    <?php endforeach; endif ;?>
  </tbody>
</table>
</div>
</div> 

