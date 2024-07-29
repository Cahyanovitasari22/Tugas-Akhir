<x-app>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Lihat Data Administrator</div>
        </div>
        <div class="card-body">
            <dl>
                <dt>Nama Pengguna </dt>
                <dd>{{$user->nama}}</dd>
                <dt>Username </dt>
                <dd>{{$user->username}}</dd>
                <dt>Email </dt>
                <dd>{{$user->email}}</dd>
                <dt>Password</dt>
                <dd>{{$user->password}}</dd>

            </dl>
        </div>
    </div>
</x-app>