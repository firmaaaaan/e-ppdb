
<html>
	<head>
		<meta charset="utf-8">
		<title>Pengumuman</title>
		<link rel="stylesheet" href="{{ asset('pengumuman.css') }}">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
			h5 {
				text-align: center; /* Mengatur teks horizontal di tengah */
                margin-bottom: 3;
			}
            .penutup{
                margin-bottom: 3;
            }
		</style>
    </head>
	<body>
		<header>
			<address >
				<p>SD Sengon 03</p>
				<p>Sengon Wetan, Sengon, Kec. Tj., Kabupaten Brebes, Jawa Tengah 52254</p>
				<p>0852-0456-3827</p>
			</address>
			<span><img alt="" src="http://www.jonathantneal.com/examples/invoice/logo.png"><input type="file" accept="image/*"></span>
		</header>
		<aside>
            <h3 style="text-align: center">PENGUMUMAN</h3>
			<h3 style="text-align: center"><span>PENERIMAAN PESERTA DIDIK BARU</span></h3>
            <h3 style="text-align: center"><span>SDN SENGON 03</span></h3>
			<div>
                <table style="font-size: 16px;">
                    <tr>
                        <td style="width: 30%;">Nama</td>
                        <td style="width: 5%;">:</td>
                        <td style="width: 65%;">{{ $siswaBaru->name }}</td>
                    </tr>
                    <tr>
                        <td style="width: 30%;">Orang Tua</td>
                        <td style="width: 5%;">:</td>
                        <td style="width: 65%;">{{ $siswaBaru->nama_ayah }}</td>
                    </tr>
                    <tr>
                        <td style="width: 30%;">Alamat</td>
                        <td style="width: 5%;">:</td>
                        <td style="width: 65%;">{{ $siswaBaru->kampung }}</td>
                    </tr>
                </table>
            </div>
		</aside>
        <h5><p>Dinyatakan :</p></h5>
        <h1>
            @if ($siswaBaru->pengumuman ==2)
                {{ ($siswaBaru->pengumuman ==2) ? 'Menunggu' : ''}}
            @elseif ($siswaBaru->pengumuman ==1)
                {{ ($siswaBaru->pengumuman ==1) ? 'Diterima' : ''}}
            @elseif ($siswaBaru->pengumuman ==0)
                {{ ($siswaBaru->pengumuman ==0) ? 'Tidak Diterima' : ''}}
            @endif
        </h1>
        <div class="penutup">
            <p>Demikian pengumuman ini kami sampaikan agar dapat digunakan sebagai mestinya.</p>
        </div>
	</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>
