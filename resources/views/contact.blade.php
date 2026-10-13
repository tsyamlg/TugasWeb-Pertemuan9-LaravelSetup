<h1>Halaman Contact</h1>
<ul>
    @foreach ($kontak as $label => $isi)
        <li>{{ ucfirst($label) }}: {{ $isi }}</li>
    @endforeach
</ul>