<html>
<head>
<title>Passing Data Controller ke View</title>
</head>
<body>
    <h1>Tutorial Website</h1>

    <br>

    <p>Nama : {{ $nama}}</p>
    <p>Mata Pelajaran</p>
    <ul>

        @foreach( $matkul as $m)
    <li>{{ $m }}</li>
    @endforeach

    </ul>

</body>
</html>