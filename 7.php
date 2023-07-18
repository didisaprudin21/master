<?php
$nama_lengkap="PT Industri Telekomunikasi Indonesia (Persero)";


    function inisial($nama){
        $jml_kata= str_word_count($nama);
		$arr = explode(' ', $nama);
        $singkatan = '';
        foreach($arr as $kata)
        {
			if($jml_kata==1){
				$singkatan .= substr($kata, 0, 4);
			}else if($jml_kata==2){
				$singkatan .= substr($kata, 0, 2);
			}else if($jml_kata==3){
				$singkatan .= substr($kata, 0, 4);
			}else if($jml_kata >=4){
				$singkatan .= substr($kata, 0, 1);
			}
			
        }
        return substr($singkatan,0,4);
    }
   $nama1=inisial($nama_lengkap);
   echo strtoupper($nama1);
?>