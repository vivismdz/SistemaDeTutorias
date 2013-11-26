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
                    $objCeldaL=utf8_decode($objCelda['L']);
                    $objCeldaM=utf8_decode($objCelda['M']);
                    $objCeldaN=utf8_decode($objCelda['N']);
                    $objCeldaO=utf8_decode($objCelda['O']);
                    $objCeldaP=utf8_decode($objCelda['P']);
                    $objCeldaQ=utf8_decode($objCelda['Q']);

                  // if($i==2){
                  	
                    
                    //   }
                  $i++;
                  
                  if($i>2)
                   {
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
                         <td>'.$objCeldaL.'</td>
                         <td>'.$objCeldaM.'</td>
                         <td>'.$objCeldaN.'</td>
                         <td>'.$objCeldaO.'</td>
                         <td>'.$objCeldaP.'</td>
                           <td>'.$objCeldaQ.'</td>
                         <tr>
                           ';
                            

                        mysql_query('SET foreign_key_checks = 0');      
                    $consulta2 =mysql_query("INSERT INTO  kardex_parcial(matricula,nombre,plan,periodo,materia,grupo,primer_parcial,in_primer_parcial,segundo_parcial,in_segundo_parcial,tercer_parcial,in_tercer_parcial,
                      examen_final,calificacion_final,total_in,extra,regularizacion) values ('$objCeldaA', '$objCeldaB',  '$objCeldaC', '$objCeldaD', '$objCeldaE',  '$objCeldaF','$objCeldaG',
                  '$objCeldaH',  '$objCeldaI','$objCeldaJ', '$objCeldaK','$objCeldaL','$objCeldaM','$objCeldaN','$objCeldaO','$objCeldaP','$objCeldaQ')" ) or die ("asdasd".mysql_error());  
                  
                   }

                  

                 }
                 $consul=mysql_query("delete from kardex_parcial where matricula='0'") or die(mysql_error());

                  //header("Location:carga-alumnos.php");
                    ?>
                </table>