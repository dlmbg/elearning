<div id="tengah">
<div id="kiri">
<div id="isi">
<script type="text/javascript" src="<?php echo base_url(); ?>asset/ckeditor/ckeditor.js"></script>



<table width="100%" border="0" cellspacing="1" cellpadding="10" bgcolor="#D4E5A1">
	<tr>
	  <td class="bg-gowesip" colspan="2"><span class="tittle-forum"><strong>POST REPLY THREAD</strong></span><span class="tittle-forum2"></span></td>
	</tr>
</table>
	
<form method="post" action="<?php echo base_url(); ?>forum/save_edit_reply">
<table  width="100%" bgcolor="#cbe6ff" cellspacing="0" border="0" cellpadding="10">
<tr>
<td colspan="2"><input type="text" size="50" name="judul" style="padding:5px; font-size:12px;" placeholder="Ketikkan judul thread..." required value="<?php echo $judul; ?>" /></td>
</tr>

<tr>
<td colspan="2">
<textarea class="ckeditor" cols="40" name="isi" style="width:660px; height:220px; resize:none; outline:none; font-family:Arial; background-color:#FFFFFF; font-size:12px;" placeholder="Ketikkan isi thread..."><?php echo $isi; ?></textarea>
<input type="hidden" name="id_param" value="<?php echo $id_param; ?>">
<input type="hidden" name="id_param_redirect" value="<?php echo $id_param_redirect; ?>">
</td>
</tr>
</tr>
<tr>
	<td></td>
	<td><input type="reset" value="HAPUS" class="input-button" /><input type="submit" value="KIRIM" class="input-button" /></td>
</tr>
</table>
</form>

  </table>
  </div>
</div>
</div>
  