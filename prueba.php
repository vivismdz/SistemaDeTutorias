                    <table>
                    <?php
                    $nombre=$_GET['n'];
                  
                    include("conexion.php");
                    require_once 'PHPExcel/Classes/PHPExcel/IOFactory.php';
                    include ('PHPExcel/Classes/PHPExcel/Reader/Excel2007.php');
             
                
                   $objPHPExcel=PHPExcel_IOFactory::load($nombre);
                    $objHoja=$objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
                    $i=0;
                    foreach ($objHoja as $i => $objCelda) {
                    $objCeldaA=utf8_decode($objCelda['A']);
                    $objCeldaB=utf8_decode($objCelda['B']);
                    $objCeldaC=utf8_decode($objCelda['C']);
                    $objCeldaD=utf8_decode($objCelda['D']);
                    $objCeldaE=utf8_decode($objCelda['E']);
                    $objCeldaF=utf8_decode($objCelda['F']);
                    $objCeldaG=utf8_decode($objCelda['G']);
                    $objCeldaH=utf8_decode($objCelda['H']);
                    $objCeldaI=utf8_decode($objCelda['I']);
                    $objCeldaJ=utf8_decode($objCelda['J']);
                    $objCeldaK=utf8_decode($objCelda['K']);

                   if($i==2){
                  	
                    	echo '
                    	 <tr>
                    	   <td>'.$objCeldaA.'</td>
                    	   <td>'.$objCeldaB.'</td>
                    	   <td>'.$objCeldaC.'</td>
                    	   <td>'.$objCeldaD.'</td>
                    	   <td>'.$objCeldaE.'</td>
                    	   <td>'.$objCeldaF.'</td>
                    	   <td>'.$objCeldaG.'</td>
                    	   <td>'.$objCeldaH.'</td>
                    	   <td>'.$objCeldaI.'</td>
                    	   <td>'.$objCeldaJ.'</td>
                    	   <td>'.$objCeldaK.'</td>
                    	   <tr>
                    	   ';
                       $consulta =mysql_query("INSERT INTO  alumno(matricula,nombre)
                       values ('$objCeldaA','$objCeldaB')" ) or die ("Alumno ya fue ingresado. Seleccione otro kardex <a href='carga-alumnos.php'>Regresar</a>");       
                       }
                   $i++;
                   
                 	}

                  $i=0;
                   foreach ($objHoja as $i => $objCelda) {

                  if($i>1)
                   {
                    $objCeldaA=utf8_decode($objCelda['A']);
                    $objCeldaB=utf8_decode($objCelda['B']);
                    $objCeldaC=utf8_decode($objCelda['C']);
                    $objCeldaD=utf8_decode($objCelda['D']);
                    $objCeldaE=utf8_decode($objCelda['E']);
                    $objCeldaF=utf8_decode($objCelda['F']);
                    $objCeldaG=utf8_decode($objCelda['G']);
                    $objCeldaH=utf8_decode($objCelda['H']);
                    $objCeldaI=utf8_decode($objCelda['I']);
                    $objCeldaJ=utf8_decode($objCelda['J']);
                    $objCeldaK=utf8_decode($objCelda['K']);
                       
                    $consulta2 =mysql_query("INSERT INTO  kardex_general(matricula,nombre,semestre,materia,grupo,periodo,final,extra,regularizacion,creditos,status) values ('$objCeldaA', '$objCeldaB',  '$objCeldaC', '$objCeldaD', '$objCeldaE',  '$objCeldaF','$objCeldaG',
                  '$objCeldaH',  '$objCeldaI','$objCeldaJ', '$objCeldaK')" ) or die ("asdasd".mysql_error());  
                  
                   }
                 }

                  header("Location:carga-alumnos.php");
                    ?>
                </table>