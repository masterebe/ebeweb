<?php
		//echo('curl'); exit;
		//header("Pragma: public");
        //header("Expires: 0");
        //header("Cache-Control: must-revalidate, post-check=0, pre-check=0"); 
        //header("Content-Type: application/force-download");
       // header("Content-Type: application/octet-stream");
       //header("Content-Type: application/download");
        //header("Content-Disposition: attachment; filename=\"hola.jpg\"");
        //header("Content-Transfer-Encoding: binary ");
		
    $url = "http://www.busesfronterasdelnorte.com/enconstruccion.jpg";
	//echo($_SERVER['DOCUMENT_ROOT']); exit;	
    // $url  = 'http://www.example.com/a-large-file.zip';
    $path = $_SERVER['DOCUMENT_ROOT'].'/enconstruccion.jpg';
 
    $fp = fopen($path, 'w');
 
    $ch = curl_init($url);
    //curl_setopt($ch, CURLOPT_FILE, $fp);
 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, $fp);
    $data = curl_exec($ch);
 
    curl_close($ch);
    fclose($fp);


?>