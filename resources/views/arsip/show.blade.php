<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Lihat Data SPPD Dalam Kota</div>
        </div>
        <div class="card-body">
            <dl>
                <dt>Nama Pegawai</dt>
                <dd>{{$arsip->nama}}</dd>
                <dt>Nomor Surat</dt>
                <dd>{{$arsip->nomor_surat}}</dd>
                <dt>Tujuan</dt>
                <dd>{{$arsip->tujuan}}</dd>

            </dl>
        </div>
    </div>
</x-app>