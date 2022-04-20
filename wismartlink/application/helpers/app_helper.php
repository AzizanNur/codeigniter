<?
function is_logged_in() {
    // Get current CodeIgniter instance
    $CI =& get_instance();
    // We need to use $CI->session instead of $this->session
	if(!$CI->session->has_userdata('slink_user')){
		return false;
	}else{
		return true;
	}
    //$user = $CI->session->has_userdata('username');
    //if (!isset($user)) { return false; } else { return true; }
}

function is_logged_admin() {
    // Get current CodeIgniter instance
    $CI =& get_instance();
    // We need to use $CI->session instead of $this->session
	if(!$CI->session->has_userdata('admuser')){
		return false;
	}else{
		return true;
	}
    //$user = $CI->session->has_userdata('username');
    //if (!isset($user)) { return false; } else { return true; }
}

function toNumber($stringdata)
{
    return number_format($stringdata,8, '.',' ');
}
function toMoney($angka)
{
    return number_format($angka,1,'.','.');
}

function covertDate($date_old)
{
    return date("d.m.y H.i", strtotime($date_old));
}

function datenotime($date_old)
{
    return date("d.m.y", strtotime($date_old));
}
function alertDanger($msg)
{

    return '<div class="alert alert-danger mg-b-0" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
            <strong class="d-block d-sm-inline-block-force">Warning!</strong> '.$msg.'
          </div>';
}

?>