<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>OTP Email Verification</title>
</head>
<body>
<div style="font-family: Helvetica,Arial,sans-serif;min-width:1000px;overflow:auto;line-height:2">
  <div style="margin:50px auto;width:70%;padding:20px 0">
    <div style="border-bottom:1px solid #eee">
      <a href="" style="font-size:1.4em;color: #00466a;text-decoration:none;font-weight:600">Antareja</a>
    </div>
    <p style="font-size:1.1em">Hi,</p>
    <p>Terima Kasih sudah bergabung dengan antareja. Silahkan verifikasi kode OTP untuk mengaktifkan akun. OTP berlaku selama 10 menit.</p>
    <h2 style="background: #de0000;margin: 0 auto;width: max-content;padding: 0 10px;color: #fff;border-radius: 4px;">{{ $validToken }}</h2>
    <p style="font-size:0.9em;">Hormat,<br />Antareja</p>
    <hr style="border:none;border-top:1px solid #eee" />
    <div style="float:right;padding:8px 0;color:#aaa;font-size:0.8em;line-height:1;font-weight:300">
      <p>Paskatema</p>
      <p>SMK Telkom Sandhy Putra</p>
      <p>Kota Malang</p>
    </div>
  </div>
</div>
</body>
</html>
