<?php
include 'include/connect.php';
?>
<script type="text/javascript" src="include/jquery-1.3.2.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function(){
	alert("kebaca gak");
	jQuery('.add').click(function(){
		var kodetin = jQuery(this).attr('kodetin');
		var nopas= jQuery(this).attr('nopas');
		jQuery.post('save_tambahtindakan.php',{nopas:nopas;kodetin:kodetin},function(data){
			alert(data);
		});
	});
});
</script>
<html>
<head>
</head>
<style type="text/css">
#popup-windows {font-size:10px; font-family:Verdana,Geneva,sans-serif;}
table{ border:1px solid #999; border-collapse:0px; border-spacing:0px;}
th{background:#069; padding:3px; font-size:11px; color:#FFF; font-weight:bold;}
td{padding:3px; font-size:11px;}
.add, .batal, .simpan{cursor:pointer; border:1px solid #000; padding:2px 3px; background:#FF6; font-size:10px;}
.popup-table tr.footer td{border-top:1px solid #666; font-weight:bold;}
.selectbox{ font-size:10px;}
.text { border:1px solid #000; font-size:11px;}
.text:focus { background:#FF6;}
</style>
<body>
<style type="text/css">
ul.tabs {margin: 0;padding: 0;float: left;list-style: none;height: 32px;border-bottom: 1px solid #999;border-left: 1px solid #999;width: 100%;}
ul.tabs li {float: left;margin: 0;padding: 0 3px;height: 31px;line-height: 31px;border: 1px solid #999;border-left: none;margin-bottom: -1px;background: #e0e0e0;overflow: hidden;position: relative;}
ul.tabs li:hover{ background:#FF9; display:block; cursor:pointer;}
ul.tabs li a {text-decoration: none;color: #000;display: block;font-size: 10px;padding: 0 10px;border: 1px solid #fff;outline: none;}
ul.tabs li a:hover {background: #ccc;}
html ul.tabs li.active, html ul.tabs li.active a:hover  {background: #fff;border-bottom: 1px solid #fff;}
.tab_container {border: 1px solid #999;	border-top: none;clear: both;float: left; width: 100%;background: #fff;	-moz-border-radius-bottomright: 5px;-khtml-border-radius-bottomright: 5px;	-webkit-border-bottom-right-radius: 5px;-moz-border-radius-bottomleft: 5px;	-khtml-border-radius-bottomleft: 5px;	-webkit-border-bottom-left-radius: 5px; padding-top:60px;}
.tab_content {padding: 5px;font-size: 11px; text-align:left;}
</style>
<div id="popup-windows">
<table width=50%>
	<tr>
		<th>No</th>
		<th>Nama Tindakan</th>
		<th>Aksi</th>
	</tr>
	<?php
	 	$no=1;
		$sql = $mysqli->query("SELECT * FROM tindakan ORDER BY NAMA_TIN");
		while($data = $sql->fetch_object()){
			?>
			<tr>
				<td><?php echo $no; $no++; ?></td>
				<td><?php echo $data->NAMA_TIN ; ?></td>
				<td align="center"><input type="button" class="add" name="add" id="add<?php echo $data->KODE_TIN;?>" nopas="<?php echo $_GET['no_pas'];?>" kodetin="<?php echo $data->KODE_TIN;?>" value="ADD"></td>
			</tr>
			<?
		}
	 ?>
</table>
<div id="load_tmp_cartbayar" style="width:340px; float:right;">
</div>
<br clear="all">

</div>
</body>
</html>
