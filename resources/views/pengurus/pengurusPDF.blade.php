<h3 align="center">Data Pegawai Pesantren YBM PLN</h3>
<table align="center" width="100%" cellpadding="10" cellspacing="0" border="1">
    <thead>
      <tr>
        @php
        $ar_judul = ['No','Nama Pengurus','Jabatan','No HP','email','Foto','Action'];
        $no = 1;
      @endphp
      @foreach($ar_judul as $jdl)
          <th>{{ $jdl }}</th>
      @endforeach
      </tr>
    </thead>
    <tbody>
      @foreach ($ar_pengurus as $peng)
      <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $peng->nama }}</td>
          <td>{{ $peng->posisi }}</td>
          <td>{{ $peng->hp }}</td>
          <td>{{ $peng->email }}</td>
            <td>
              <center>
              @if(!empty($peng->foto))
                  <img src="img/{{ $peng->foto }}"  />
              @else
                  <img src="img/no-photo.jpg" />
              @endif
              </center>
            </td>
      </tr>
    @endforeach
    </tbody>

  </table>
