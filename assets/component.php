<?php

function komponen($namaproduk,$foto, $id, $deskripsi){
	$elemen = "		
		    <div class=\"box-menu carousel-cell\">
		        <img src=\"./assets/img/$foto\" alt=\"\">
		        <div class=\"area-menu\">
		          <h1 class=\"judul\">$namaproduk</h1>
		          <p>$deskripsi</p>
		        </div>
		    </div>
		    ";
  	echo $elemen;
};
function komponen2($foto){
	$elemen = "
      		<img src=\"./assets/img/$foto\" alt=\"\">

	";
	echo $elemen;
}

?>