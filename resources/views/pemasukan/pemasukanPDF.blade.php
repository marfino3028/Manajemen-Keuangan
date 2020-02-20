@php
$ar_judul = ['No','Nama Anggaran','Jenis Anggaran','Jumlah Anggaran','Pegawai','Tanggal Pemasukan'];
$no = 1;
$pemasukanzz = DB::table('aktivitas')->where('jenis_anggaran','=','Pemasukan')->sum('jumlah_anggaran');
@endphp
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pemasukan</title>

    <style type="text/css">
        @page {
            margin: 0px;
        }
        body {
            margin: 0px;
        }
        * {
            font-family: Verdana, Arial, sans-serif;
        }
        a {
            color: #fff;
            text-decoration: none;
        }
        table {
            font-size: x-small;
        }
        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }
        .invoice table {
            margin: 15px;
        }
        .invoice h3 {
            margin-left: 15px;
        }
        .information {
            background-color: #60A7A6;
            color: #FFF;
        }
        .information .logo {
            margin: 50px;
        }
        .information table {
            padding: 10px;
        }
    </style>

</head>
<body>

<div class="information">
    <table width="100%">
        <tr>
            <td align="left" style="width: 50%;">
                <h2>Ponpes Tursina</h3>
                <pre>
Cibeureum, Kec. Cisarua
Bogor,16750
Jawa Barat,Indonesia
<br /><br />



</pre>


            </td>
            <td align="center">
                <img src="{{('img/favicon.png')}}" alt="Logo" width="100px" height="100px" class="logo"/>
            </td>
            <td align="right" style="width: 40%;">

                <h2>Total :Rp. {{ number_format($pemasukanzz,0,',','.') }}</h3>
                <pre>
                Date: {{ date('d/m/Y') }}

                    Aktivitas: Pemasukan
                </pre>
            </td>
        </tr>

    </table>
</div>


<br/>

<div class="invoice">
    <h3>Pemasukan</h3>
    <table border="1" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
        @foreach($ar_judul as $jdl)
          <th align="center" style="width: 50%;">{{ $jdl }}</th>
        @endforeach
        </tr>
        </thead>
        <tbody>
        @foreach($ar_pemasukan as $pemasukan)
        <tr>
        <td align="center">{{ $no++ }}</td>
          <td align="center" >{{ $pemasukan->nama_jenis_anggaran }}</td>
          <td align="center" >{{ $pemasukan->jenis_anggaran }}</td>
          <td align="center" >Rp.{{ number_format($pemasukan->jumlah_anggaran,0,',','.') }}</td>
          <td align="center" >{{ $pemasukan->peg }}</td>
          <td align="center" >{{ $pemasukan->tgl_aktivitas }}</td>
        </tr>
        @endforeach
        </tbody>
        <tfoot>
        <tr>
            
            <th align="center" style="width: 100%;">Total</th>
            <td colspan="4"></td>
            <td align="center" style="width: 100%;" class="gray">Rp.{{ number_format($pemasukanzz,0,',','.') }}</td>
        </tr>
        </tfoot>
    </table>
</div>

<div class="information" style="position: absolute; bottom: 0;">
    <table width="100%">
        <tr>
            <td align="left" style="width: 50%;">
                &copy; {{ date('d/m/Y') }} Ponpes Thursina - All rights reserved.
            </td>
            <td align="right" style="width: 50%;">
                YBM PLN
            </td>
        </tr>

    </table>
</div>
</body>
</html>