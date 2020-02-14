<?php

	function SimplaLicence($key)
	{

        /*
		if($this->request->method('POST'))
		{
			$license = $this->request->post('license');
			$this->config->license = trim($license);
		}
		*/

		$p=11; $g=2; $x=7; $r = ''; $s = $x;
		$bs = explode(' ', $key);		
		foreach($bs as $bl){
			for($i=0, $m=''; $i<strlen($bl)&&isset($bl[$i+1]); $i+=2){
				$a = base_convert($bl[$i], 36, 10)-($i/2+$s)%26;
				$b = base_convert($bl[$i+1], 36, 10)-($i/2+$s)%25;
				$m .= ($b * (pow($a,$p-$x-1) )) % $p;}
			$m = base_convert($m, 10, 16); $s+=$x;
			for ($a=0; $a<strlen($m); $a+=2) $r .= @chr(hexdec($m{$a}.$m{($a+1)}));}

		@list($l->domains, $l->expiration, $l->comment) = explode('#', $r, 3);

		$l->domains = explode(',', $l->domains);

		$h = getenv("HTTP_HOST");
		if(substr($h, 0, 4) == 'www.') $h = substr($h, 4);
		$l->valid = true;
		if(!in_array($h, $l->domains))
			$l->valid = false;
		if(strtotime($l->expiration)<time() && $l->expiration!='*')
			$l->valid = false;
			
		
 	  	return $l;
	}
	
		// $l->domains = explode(',', $l->domains);
		// $h = getenv("HTTP_HOST");
		// if(substr($h, 0, 4) == 'www.') $h = substr($h, 4);
		// if((!in_array($h, $l->domains) || (strtotime($l->expiration)<time() && $l->expiration!='*')) && $this->request->get('module')!='LicenseAdmin')
			// header('location: '.$this->config->root_url.'/simpla/index.php?module=LicenseAdmin');
 		// else
 		// {
 			// $l->valid = true;
			// $this->design->assign('license', $l);
		// }
	
	$key = "aeddjfbekk kjloognpqj osvsqvrrxa 644456d6 fijjkdfigk hiqqoltspu rtx8t55b79 57bf99ajch khdhglflmr surprqvtqr va89a5ca9b bccbdidldn kmmnkpnpqq osspw6q5t8 bf77b8cgad ekgkkhljdk onltpmmwqu q6s3u7zba5 ae5dchchgg ekckglnllm rwoxpsr2m4 w6zd7aad8c chamfjbjdm frgmosmvkw m9s9p7rcoa 
";
	
	$res = SimplaLicence($key);
	
	var_dump($res);
	
