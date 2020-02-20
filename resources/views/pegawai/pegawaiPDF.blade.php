<h3 align="center">Data Pegawai Pesantren YBM PLN</h3>
<table align="center" width="100%" cellpadding="10" cellspacing="0" border="1">
    <thead>
      <tr>
      @php
       $ar_judul = ['No','Nama Pegawai','Jabatan','Alamat','No HP','email','Foto','Action'];
        $no = 1;
      @endphp
      @foreach($ar_judul as $jdl)
          <th>{{ $jdl }}</th>
      @endforeach
      </tr>
    </thead>
    <tbody>
    @foreach ($ar_pegawai as $peg)
      <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $peg->nama }}</td>
          <td>{{ $peg->posisi }}</td>
          <td>{{ $peg->alamat }}</td>
          <td>{{ $peg->hp }}</td>
          <td>{{ $peg->email }}</td>
          <td>
            <center>
            @if(!empty($peg->foto))
                <img src="img/{{ $peg->foto }}"  />
            @else
                <img src="img/no-photo.jpg" />
            @endif
            </center>
          </td>
      </tr>
    @endforeach
    </tbody>
  </table>
