<?php
include'../vendor/autoload.php';
include'../autoload.php';
set_time_limit(30000000000000);//Aumento de tiempo de memoria
$conexion = new Conexion();
$conexion = $conexion->get_conexion();

//cargamos el archivo al servidor con el mismo nombre
//solo le agregue el sufijo bak_ 
$archivo   = $_FILES['excel']['name'];
$tipo      = $_FILES['excel']['type'];
$destino   = "bak_" . $archivo;
if (copy($_FILES['excel']['tmp_name'], $destino))
{
echo "Archivo Cargado Con Éxito"."<br>";
}
else
{
echo "Error Al Cargar el Archivo";
}

if (file_exists("bak_" . $archivo)) 
{

// Cargando la hoja de cálculo
$objReader = new PHPExcel_Reader_Excel2007();
$objPHPExcel = $objReader->load("bak_" . $archivo);
$objFecha = new PHPExcel_Shared_Date();
// Asignar hoja de excel activa
$objPHPExcel->setActiveSheetIndex(0);

//2879
// Llenamos el arreglo con los datos  del archivo xlsx
$filas = 10;//Número de filas que se leerán
for ($i =2; $i <= 10; $i++)
{
$_DATOS_EXCEL[$i]['a'] = $objPHPExcel->getActiveSheet()->getCell('A' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['b'] = $objPHPExcel->getActiveSheet()->getCell('B' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['c'] = $objPHPExcel->getActiveSheet()->getCell('C' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['d'] = $objPHPExcel->getActiveSheet()->getCell('D' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['e'] = $objPHPExcel->getActiveSheet()->getCell('E' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['f'] = $objPHPExcel->getActiveSheet()->getCell('F' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['g'] = $objPHPExcel->getActiveSheet()->getCell('G' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['h'] = $objPHPExcel->getActiveSheet()->getCell('H' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['i'] = $objPHPExcel->getActiveSheet()->getCell('I' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['j'] = $objPHPExcel->getActiveSheet()->getCell('J' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['k'] = $objPHPExcel->getActiveSheet()->getCell('K' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['l'] = $objPHPExcel->getActiveSheet()->getCell('L' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['m'] = $objPHPExcel->getActiveSheet()->getCell('M' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['n'] = $objPHPExcel->getActiveSheet()->getCell('N' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['o'] = $objPHPExcel->getActiveSheet()->getCell('O' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['p'] = $objPHPExcel->getActiveSheet()->getCell('P' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['q'] = $objPHPExcel->getActiveSheet()->getCell('Q' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['r'] = $objPHPExcel->getActiveSheet()->getCell('R' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['s'] = $objPHPExcel->getActiveSheet()->getCell('S' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['t'] = $objPHPExcel->getActiveSheet()->getCell('T' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['u'] = $objPHPExcel->getActiveSheet()->getCell('U' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['v'] = $objPHPExcel->getActiveSheet()->getCell('V' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['w'] = $objPHPExcel->getActiveSheet()->getCell('W' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['x'] = $objPHPExcel->getActiveSheet()->getCell('X' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['y'] = $objPHPExcel->getActiveSheet()->getCell('Y' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['z'] = $objPHPExcel->getActiveSheet()->getCell('Z' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['aa'] = $objPHPExcel->getActiveSheet()->getCell('AA' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['ab'] = $objPHPExcel->getActiveSheet()->getCell('AB' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['ac'] = $objPHPExcel->getActiveSheet()->getCell('AC' . $i)->getCalculatedValue();
$_DATOS_EXCEL[$i]['ad'] = $objPHPExcel->getActiveSheet()->getCell('AD' . $i)->getCalculatedValue();



}

}

//si por algo no cargo el archivo bak_ 
else 
{
echo "Necesitas primero importar el archivo";
}

$errores = 0;
//recorremos el arreglo multidimensional 
//para ir recuperando los datos obtenidos
//del excel e ir insertandolos en la BD

foreach ($_DATOS_EXCEL as $key => $value)
{


try {
	


$query  = "INSERT INTO `mytable`(`document_number`, `document_type`, `NO_CIA`, `COD_TRAB`, `first_name`, `middle_name`, `third_name`, `last_name`, `mother_surname`, `gender`, `ruc`, `phone`, `cell_phone`, `birthdate`, `marital_status`, `graduation_year`, `ubigeo_id`, `email`, `email2`, `education_id`, `educational_institution_id`, `carrer_id`, `road_id`, `road`, `road_number`, `zone_id`, `zone`, `zone_number`, `cod_repres`, `cod_responsable`) VALUES
(
	
:a,:b,:c,:d,:e,:f,:g,:h,:i,:j,:k,:l,:m,:n,:o,:p,:q,:r,:s,:t,:u,:v,:w,:x,:y,:z,:aa,
:ab,:ac,:ad



)";
$statement = $conexion->prepare($query);
$statement->bindParam(':a',$value['a']);
$statement->bindParam(':b',$value['b']);
$statement->bindParam(':c',$value['c']);
$statement->bindParam(':d',$value['d']);
$statement->bindParam(':e',$value['e']);
$statement->bindParam(':f',$value['f']);
$statement->bindParam(':g',$value['g']);
$statement->bindParam(':h',$value['h']);
$statement->bindParam(':i',$value['i']);
$statement->bindParam(':j',$value['j']);
$statement->bindParam(':k',$value['k']);
$statement->bindParam(':l',$value['l']);
$statement->bindParam(':m',$value['m']);
$statement->bindParam(':n',$value['n']);
$statement->bindParam(':o',$value['o']);
$statement->bindParam(':p',$value['p']);
$statement->bindParam(':q',$value['q']);
$statement->bindParam(':r',$value['r']);
$statement->bindParam(':s',$value['s']);
$statement->bindParam(':t',$value['t']);
$statement->bindParam(':u',$value['u']);
$statement->bindParam(':v',$value['v']);
$statement->bindParam(':w',$value['w']);
$statement->bindParam(':x',$value['x']);
$statement->bindParam(':y',$value['y']);
$statement->bindParam(':z',$value['z']);
$statement->bindParam(':aa',$value['aa']);
$statement->bindParam(':ab',$value['ab']);
$statement->bindParam(':ac',$value['ac']);
$statement->bindParam(':ad',$value['ad']);

$statement->execute();

echo "ok"."<br>";






	
} catch (Exception $e) {
	
echo $e->getMessage()."<br>";

}





}
unlink($destino);




?>