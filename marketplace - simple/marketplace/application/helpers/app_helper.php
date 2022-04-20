<?

function is_logged_in() {
    $CI =& get_instance();
    if(!$CI->session->has_userdata('ppobuser')){
		return false;
	}else{
		return true;
	}
}


function toRp($angka)
{
    return number_format($angka,0,'.','.');
}

function notifikasi($data)
{
	if($data == "") { return ""; }
	$ex		=	explode("||", $data);
	if($ex[0] == "11") {
		$html	=	'<div class="alert alert-success alert-dismissible fade show" role="alert">
					  <button aria-label="Close" class="close" data-dismiss="alert" type="button"><span aria-hidden="true"> ×</span></button><strong>Success! </strong>'. $ex[1].'
					</div>';
	} elseif($ex[0] == "00") {
		$html	=	'<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  <button aria-label="Close" class="close" data-dismiss="alert" type="button"><span aria-hidden="true"> ×</span></button><strong>Error! </strong>'. $ex[1].'
					</div>';
	}
    return $html;
}

function tgl_en($data)
{
	if($data == "") { return ""; }
	return date('d M Y', strtotime($data));
}