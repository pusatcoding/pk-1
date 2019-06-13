<?php
$o='';
if(!empty($data))
{
	$i=0;
	foreach($data as $row)
	{
		$i+=1;
		$tarif			= $row['cost'][0]['value'];
		$service		= $row['service'];
		$deskripsi	= $row['description'];
		$waktu			= $row['cost'][0]['etd']?$row['cost'][0]['etd']:"-";
		?>

        <div class="custom-radio">
            <input type="radio" name="service" class="service" data-id="<?=$i;?>" id="<?=$i;?>" value="<?=$service;?>"
                required />
            <label for="<?=$i;?>">
                <span class="circle"></span><?=$service;?>
            </label>
            <input type="hidden" name="tarif" id="tarif<?=$i;?>" value="<?=$tarif;?>" required />
            <dl class="pl-5">
                <dd><?=$deskripsi;?></dd>
                <dd>Tarif <b>Rp <?=number_format($tarif,0);?></b></dd>
                <dd>Estimasi waktu sampai <b><?=$waktu;?> hari</b></dd>
            </dl>
        </div>
   
<?php
	}
?>
<script>
$(document).ready(function() {
    $(".service").each(function() {
        $(this).on("change", function() {
            var did = $(this).attr('data-id');
            var tarif = $("#tarif" + did).val();
            $("#ongkir").val(tarif);
            hitung();
        });
    });
});
</script>
<?php
}
echo $o;
?>