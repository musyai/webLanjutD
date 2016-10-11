<?php
/* Buat form untuk insert dengan metode post, yang akan dikirim ke pokemon/insert_action */
?>
<form name="form_insert_pokemon" method='POST' action="<?=site_url('pokemon/insert_action')?>">
 <input type="text" name="nama"><br>
  <input type="text" name="tipe"><br>
  <button name="simpan"> Tambah Pokemon</button>
</form>
