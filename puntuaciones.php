<?php
   include("conn/header.php");
    //Seleccionamos las puntuaciones de mayor a menor y mostramos las 5 primeras en una tabla.
    $aux=0;
    $sql = "SELECT p.nick, p.puntuacion, u.foto FROM puntuaciones p, users u WHERE p.nick = u.nick ORDER BY puntuacion DESC;" ;
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($arr = mysqli_fetch_assoc($result)) {
            if($aux===0){
       
?>
   <!-- HTML comienza en header -->
   <br><br><br>
        <div class="container table-dark">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" class="text-white">#</th>
                        <th scope="col" class="text-white">Foto Perfil</th>
                        <th scope="col" class="text-white">Nick</th>
                        <th scope="col" class="text-white">Puntuacion</th>
                    </tr>
                </thead>
<?php             
?>
                <tbody>
                    <tr>
                        <th scope="row" class="text-white">1</th>
                        <td class="text-white"> <img src="img/perfil/<?php echo $arr['foto'];?>" alt="fotoPerfil" class="rounded float-end" style="width: 5vw;"></td>
                        <td class="text-white"> <?php echo $arr['nick'] ?> </td>
                        <td class="text-white"><?php echo $arr['puntuacion'] ?></td>
                    </tr>
<?php        
        }else if($aux===1){       
?>
                    <tr>
                        <th scope="row" class="text-white">2</th>
                        <td class="text-white"> <img src="img/perfil/<?php echo $arr['foto'];?>" alt="fotoPerfil" class="rounded float-end" style="width: 5vw;"> </td>
                        <td class="text-white"> <?php echo $arr['nick'] ?> </td>
                        <td class="text-white"><?php echo $arr['puntuacion'] ?></td>
                    </tr>
<?php        
        }else if($aux===2){       
?>
                    <tr>
                        <th scope="row" class="text-white">3</th>
                        <td class="text-white"> <img src="img/perfil/<?php echo $arr['foto'];?>" alt="<?php echo $arr['foto'];?>" class="rounded float-end" style="width: 5vw;"> </td>
                        <td class="text-white"> <?php echo $arr['nick'] ?> </td>
                        <td class="text-white"><?php echo $arr['puntuacion'] ?></td>
                    </tr>
<?php        
        }else if($aux===3){       
?>
                    <tr>
                        <th scope="row" class="text-white">4</th>
                        <td class="text-white"> <img src="img/perfil/<?php echo $arr['foto'];?>" alt="fotoPerfil" class="rounded float-end" style="width: 5vw;"> </td>
                        <td class="text-white"> <?php echo $arr['nick'] ?> </td>
                        <td class="text-white"><?php echo $arr['puntuacion'] ?></td>
                    </tr>
<?php        
        }else if($aux===4){       
?>
                    <tr>
                        <th scope="row" class="text-white">5</th>
                        <td class="text-white"> <img src="img/perfil/<?php echo $arr['foto'];?>" alt="fotoPerfil" class="rounded float-end" style="width: 5vw;"> </td>
                        <td class="text-white"> <?php echo $arr['nick'] ?> </td>
                        <td class="text-white"><?php echo $arr['puntuacion'] ?></td>
                    </tr>
                </tbody>
            </table>
<?php
    }
    $aux++;
        }
    }
?>
            <footer>
                <h5 class="text-center"> &copy2022  quiz</h5> 
            </footer>
        </div>      
    </body>
</html>
<?php   
   $con->close();
?>