<?php

	class Dateformatting
	{
		
		function indoFormat($dateRaw)
		{
			date_default_timezone_set("Asia/Bangkok");
			$date = date_create($dateRaw);
			$dateFormatted = date_format($date,"M, d Y");

			return $dateFormatted;
		}
	}
?>