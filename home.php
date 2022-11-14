<?php
   include("conn/header.php");
   //Actualizar si añadimos preguntas
   ?>
   <!-- HTML comienza en header -->
      <div>
         <h1 class="text-center">  Quiz Game </h1><br>
      <div class="container "><br>
         <div class="container">
            <div class=" col-lg-12 text-center">
               <h3> <a href="#" > <?php echo $_SESSION['nick']; ?>,</a> Bienvenido </h3>
            </div>
            <br>
            <div class="quizsetting ">
               <div class="card">
                  <p>Selecciona una respuesta.</p>
               </div>
               <br>
               <form action="comprobar.php" method="post">
                  <?php
                  //10 preguntas  
                        $i = $_SESSION['nPregunta'];      
                        $res_id = $i;
                        $sql1 = "SELECT * FROM `preguntas` WHERE `pre_id` = $i";
                        $result1 = mysqli_query($con, $sql1);                          //Ejecutamos la consulta en la bd
                        if (mysqli_num_rows($result1) > 0) {            
                     	   while($arrPreg = mysqli_fetch_assoc($result1)) {            //Crea array asociativo con los resultados de la consulta y guardamos en 
                              // $aux = $arrPreg['pregunta'];
                              // echo "<script>console.log('$aux');</script>";
                  ?>				
                  <br>
                  <div class="card">                                                   <!--Creamos tarjeta y rellenamos contenido-->
                     <br>
                     <p class="card-header">  <?php echo $i ." : ". $arrPreg['pregunta']; ?> </p>       
                    
                     <?php
                        $sql = "SELECT * FROM `respuestas` WHERE `pre_id` = $i";   //Lo mismo para las respuestas
                        $result = mysqli_query($con, $sql);
                        if (mysqli_num_rows($result) > 0) {
                        	while($arrRes = mysqli_fetch_assoc($result)) {
                              switch($i){
                                 case 1:
                                 case 2:
                                 case 3:
                                 case 4:
                                 case 5:
                     ?>	
                           
                     <div class="card-block">
                        <!-- Imprimimos inputs respuestas -->
                        <input type="checkbox" onclick="uncheck()" name="quizcheck[<?php echo $res_id; ?>]" id="<?php echo $res_id; ?>" value="<?php echo $arrRes['res_id']; ?>" > <?php echo $arrRes['respuesta']; ?> 
                        <br>
                     </div>
                     <?php
                                    break;
                                 //Todas estas seran de tipo radio
                                 case 6:
                                 case 7:
                                 case 8:
                                 case 9:
                                 case 10:
                     ?>
                     <div class="card-block">
                     <!-- Imprimimos inputs respuestas -->
                     <input type="radio" name="quizcheck[<?php echo $res_id; ?>]" id="<?php echo $res_id; ?>" value="<?php echo $arrRes['res_id']; ?>" > <?php echo $arrRes['respuesta']; ?> 
                     <br>
                  </div>
                  <?php
                                 break;
                              }          
                  ?> 
                  <?php
                     }} //aumentamos id
                     $res_id = $res_id + 1;
                     }}
                  ?>
                     
                  </div>
                  <br>
                  <input type="submit" name="submit" Value="Submit" /> <br>
               </form>
            </div>
            <br>
         </div>
         <br>
         <footer>
            <h5 class="text-center"> &copy2022  quiz</h5> 
         </footer>
      </div>      
   </body>
</html>
<?php   
   $con->close();
?>