
<table class="voucher" style=" width: 180px;">
  <tbody>
<!-- Logo Hotspotname -->
    <tr>
      <td style="text-align: left; font-size: 11.5px; font-weight:bold; border-bottom: 1px black solid;"><?= $hotspotname; ?>  <span id="num"><?= " [$num]"; ?></span></td>
    </tr>
<!-- /  -->
    <tr>
      <td>
    <table style=" text-align: center; width: 200px; font-size: 12px;">
  <tbody>
<!-- Username Password QR    -->
    <tr>
      <td>
        <table style="width:100%;">
<!-- Username = Password    -->
<?php if ($usermode == "vc") { ?>
        <tr>
          <td font-size: 10.5px; font-weight:bold >Kode Voucher</td>
        </tr>
        <tr>
          <td style="width:100%; border: 1px solid black; font-weight:bold;
          font-size:12px; letter-spacing:3px;"><?= $username; ?></td>
        </tr>
<!-- /  -->
<!-- Username & Password  -->
<?php 
} elseif ($usermode == "up") { ?>
<!-- Check QR  -->
<?php if ($qr == "yes") { ?>
        <tr>
          <td>Username</td>
        </tr>
        <tr>
          <td style="border: 1px solid black; font-weight:bold;"><?= $username; ?></td>
        </tr>
        <tr>
          <td>Password</td>
        </tr>
        <tr>
          <td style="border: 1px solid black; font-weight:bold;"><?= $password; ?></td>
        </tr>
<?php 
} else { ?>
        <tr>
          <td style="width: 50%">Username</td>
          <td >Password</td>
        </tr>
        <tr style="font-size: 14px;">
          <td style="border: 1px solid black; font-weight:bold;"><?= $username; ?></td>
          <td style="border: 1px solid black; font-weight:bold;"><?= $password; ?></td>
        </tr>
<?php 
}
} ?>
<!-- /  -->
        </table>
      </td>
<!-- QR Code    -->
<?php if ($qr == "yes") { ?>
      <td>
	<?= $qrcode ?>
      </td>
<?php 
} ?>
<!-- /  -->
    <tr>
      <!-- Price  -->
      <td colspan="2" style="border-top: 1px solid black;font-weight:bold;
      font-size:12px"><?= $price; ?></td>
<!-- /  -->
    </tr>
    <tr>
      <!-- Note 1 -->
      <td colspan="2" style="font-weight:bold; font-size:8px">Dengan Membeli
      Voucher<br>Anda Telah Melakukan Sedekah Rp500,00 <hr></td>
    </tr>
    <tr>
      <!-- Note 2 -->
      <td colspan="2" style="font-weight:bold; font-size:9.5px">Login: http://<?= $dnsname; ?></td>
<!-- /  -->
    </tr>
    
    
<!-- /  -->
  </tbody>
    </table>
      </td>
    </tr>
  </tbody>
</table>
	        	        	        