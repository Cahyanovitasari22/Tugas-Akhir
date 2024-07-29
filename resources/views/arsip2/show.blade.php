<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Lihat Data SPPD Luar Kota</div>
        </div>
        <div class="card-body">
            <dl>
                <dt>Nama Pegawai</dt>
                <dd>{{$arsip2->nama}}</dd>
                <dt>Nomor Surat</dt>
                <dd>{{$arsip2->nomor_surat}}</dd>
                <dt>Tujuan</dt>
                <dd>{{$arsip2->tujuan}}</dd>

            </dl>
        </div>
    </div>
</x-app>