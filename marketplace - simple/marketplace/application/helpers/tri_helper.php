<?
function trxpembelian($idtrx)
{
	$CI 		=& get_instance();
	$cek 		= $CI->dbasemodel->loadsql("SELECT * FROM m_trx WHERE IDTRX='$idtrx'");
	if($cek->num_rows()>0){
		$res 		=  $cek->row();
		
		$key = APIKEY_TRIPAY;
		$url = 'https://tripay.co.id/api/v2/transaksi/pembelian';

		$header = array(
		   'Accept: application/json',
		   "Authorization: Bearer $key", // Ganti [apikey] dengan API KEY Anda
		);
		
		$data = array(
		'inquiry' => 'I', // 'PLN' untuk pembelian PLN Prabayar, atau 'I' (i besar) untuk produk lainnya
		'code' => $res->PRODUK, // kode produk
		'phone' => $res->NOHP, // nohp pembeli
		//'no_meter_pln' => '1234567890', // khusus untuk pembelian token PLN prabayar
		'api_trxid' => $res->NOTRX, // ID transaksi dari server Anda. (tidak wajib, maks. 25 karakter)
		'pin' => PIN_TRIPAY, // pin member
		);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		//curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		$result = curl_exec($ch);
		
		if(curl_errno($ch)){
		   return 'Request Error:' . curl_error($ch);
		}
		//echo $result;
		$json 		= json_decode($result);
		
		$success 	= ($json->success=="0")? "3":$json->success;
		$trxid 		= $json->trxid;
		$message 	= $json->message;
		
		$trxproses 	= array('STATUS'=>$success,
							'TRXID'=>$trxid,
							'PROSES'=>"1",
							'LOG'=>$result,
							'MSG'=>$message);
		$wheredepo	= "IDTRX='".$res->IDTRX."'";
		$CI->dbasemodel->updateData("m_trx",$trxproses,$wheredepo);
		
	}
	
}

function trxpln($idtrx)
{
	$CI 		=& get_instance();
	$cek 		= $CI->dbasemodel->loadsql("SELECT * FROM m_trx WHERE IDTRX='$idtrx'");
	if($cek->num_rows()>0){
		$res 		=  $cek->row();
		
		$key = APIKEY_TRIPAY;
		$url = 'https://tripay.co.id/api/v2/transaksi/pembelian';

		$header = array(
		   'Accept: application/json',
		   "Authorization: Bearer $key", // Ganti [apikey] dengan API KEY Anda
		);
		
		$data = array(
		'inquiry' => 'PLN', // 'PLN' untuk pembelian PLN Prabayar, atau 'I' (i besar) untuk produk lainnya
		'code' => $res->PRODUK, // kode produk
		'phone' => $res->NOHP, // nohp pembeli
		'no_meter_pln' => $res->IDPEL, // khusus untuk pembelian token PLN prabayar
		'api_trxid' => $res->NOTRX, // ID transaksi dari server Anda. (tidak wajib, maks. 25 karakter)
		'pin' => PIN_TRIPAY, // pin member
		);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		//curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		$result = curl_exec($ch);
		
		if(curl_errno($ch)){
		   return 'Request Error:' . curl_error($ch);
		}
		//echo $result;
		$json 		= json_decode($result);
		
		$success 	= ($json->success=="0")? "3":$json->success;
		$trxid 		= $json->trxid;
		$message 	= $json->message;
		
		$trxproses 	= array('STATUS'=>$success,
							'TRXID'=>$trxid,
							'PROSES'=>"1",
							'LOG'=>$result,
							'MSG'=>$message);
		$wheredepo	= "IDTRX='".$res->IDTRX."'";
		$CI->dbasemodel->updateData("m_trx",$trxproses,$wheredepo);
		
	}
	
}
function cektag($idtrx)
{
	$CI 		=& get_instance();
	$cek 		= $CI->dbasemodel->loadsql("SELECT * FROM m_log_inq WHERE IDINQ='$idtrx'");
	if($cek->num_rows()>0){
		
		$res 		=  $cek->row();
	
		$key = APIKEY_TRIPAY;
		$url = 'https://tripay.co.id/api/v2/pembayaran/cek-tagihan';

		$header = array(
		   'Accept: application/json',
		   "Authorization: Bearer $key", // Ganti [apikey] dengan API KEY Anda
		);
		
		$data = array(
			'product' => $res->PRODUK, // Masukkan ID Produk (exp : PLN)
			'phone' => $res->NOHP, // Masukkan No.hp Anda
			'no_pelanggan' => $res->IDPEL, // Masukkan ID Pelanggan (exp: no.meteran/ id pembayaran)
			'api_trxid' => $res->NOTRX, // ID transaksi dari server Anda. (tidak wajib, maks. 25 karakter)
			'pin' => PIN_TRIPAY, // pin member
		);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		//curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		$result = curl_exec($ch);
		
		if(curl_errno($ch)){
		   return 'Request Error:' . curl_error($ch);
		}
		//echo $result;
		$json 		= json_decode($result);
		if($json->success){
			
			$admin = "2000";
			$array = array("code"=>"200",
							"msg"=>$json->message,
							"msg"=>$res->message,
							"htmldata"=>"Idpel : <b>".$json->data->no_pelanggan."</b>"
							."<br>Nama : <b>".$json->data->nama."</b>"
							."<br>Periode : <b>".$json->data->periode."</b>"
							."<br>Jumlah : <b>Rp.".toRp($json->data->jumlah_tagihan)."</b>"
							,
							"data"=>array("produk"=>$json->data->product_name,
										"nama"=>$json->data->nama,
										"periode"=>$json->data->periode,
										"jumlah"=>$json->data->jumlah_tagihan,
										"admin"=>$admin,
										"idrequest"=>$json->data->tagihan_id));
			echo json_encode($array);
										
			$trxproses 	= array('LOGINQ'=>$result,
							'MSG'=>$json->message,
							'NAMA'=>$json->data->nama,
							'PERIODE'=>$json->data->periode,
							'JUMLAH_TAGIHAN'=>$json->data->jumlah_tagihan,
							'ADMIN'=>$admin,
							'IDREQUEST'=>$json->data->tagihan_id,
							'PROSESINQ'=>"1");
			$wheredepo	= "IDINQ='".$idtrx."'";
			$CI->dbasemodel->updateData("m_log_inq",$trxproses,$wheredepo);
	
		}else{
			$success 	= ($json->success=="0")? "3":$json->success;
			
			
			$trxproses 	= array('LOGINQ'=>$result,
							'MSG'=>$json->message,
							'STATUS'=>$success,
							'PROSESINQ'=>"1");
			$wheredepo	= "IDINQ='".$idtrx."'";
			$CI->dbasemodel->updateData("m_log_inq",$trxproses,$wheredepo);
			
			$array = array("code"=>"404",
									"msg"=>$json->message,
									"data"=>"");
			echo json_encode($array);
		}
		
		
		
	}
	
}

function lunasi($idtrx,$idrequest)
{
	$CI 		=& get_instance();
	$cek 		= $CI->dbasemodel->loadsql("SELECT * FROM m_log_inq WHERE IDINQ='$idrequest'");
	if($cek->num_rows()>0){
		$cektrx 		= $CI->dbasemodel->loadsql("SELECT * FROM m_trx WHERE IDTRX='$idtrx'");
		$res 			=  $cek->row();
		$restrx 		=  $cektrx->row();
	
		$key = APIKEY_TRIPAY;
		$url = 'https://tripay.co.id/api/v2/pembayaran/cek-tagihan';

		$header = array(
		   'Accept: application/json',
		   "Authorization: Bearer $key", // Ganti [apikey] dengan API KEY Anda
		);
		
		$data = array(
			'order_id' => $res->IDREQUEST, // Masukkan ID Produk (exp : PLN)
			'api_trxid' => $restrx->NOTRX, // Masukkan No.hp Anda
			'pin' => PIN_TRIPAY, // pin member
		);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		//curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		$result = curl_exec($ch);
		
		if(curl_errno($ch)){
		   return 'Request Error:' . curl_error($ch);
		}
		//echo $result;
		$json 		= json_decode($result);
		if($json->success){
			
			$success 	= ($json->success=="0")? "3":$json->success;
			$trxid 		= $json->api_trxid;
			$message 	= $json->message;
			
			$trxproses 	= array('STATUS'=>$success,
								'TRXID'=>$trxid,
								'PROSES'=>"1",
								'LOG'=>$result,
								'MSG'=>$message);
			$wheredepo	= "IDTRX='".$res->IDTRX."'";
			$CI->dbasemodel->updateData("m_trx",$trxproses,$wheredepo);
			
		}else{
			$success 	= "3";
			$trxid 		= $json->api_trxid;
			$message 	= $json->message;
			
			$trxproses 	= array('STATUS'=>$success,
								'TRXID'=>$trxid,
								'PROSES'=>"1",
								'LOG'=>$result,
								'MSG'=>$message);
			$wheredepo	= "IDTRX='".$res->IDTRX."'";
			$CI->dbasemodel->updateData("m_trx",$trxproses,$wheredepo);
		}
	}
}
