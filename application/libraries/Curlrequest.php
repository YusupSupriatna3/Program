<?php

	class CurlRequest
	{
	
		function apiRequest ($method, $url, $data){
			$ch = curl_init();

			switch ($method){
		      case "POST":
		         curl_setopt($ch, CURLOPT_POST, 1);
		         if ($data)
		            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
		         break;
		      case "PUT":
		         curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
		         if ($data)
		            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));			 					
		         break;
		      default:
		         if ($data)
		            $url = sprintf("%s?%s", $url, http_build_query($data));
		   }

	        curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-Type: application/json"));
	        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
	        curl_setopt($ch, CURLOPT_HEADER, FALSE);
	        curl_setopt($ch, CURLOPT_URL, $url);
	        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT ,0);
	        curl_setopt($ch, CURLOPT_TIMEOUT, 400);

	        $results = curl_exec($ch);
	        curl_close($ch);

	        if ($results) {
	            $json_results = json_decode(utf8_encode($results),TRUE);
	            return $json_results;
	        } else {
	        	return "Request Failed.";
	        }
		}
	}

?>