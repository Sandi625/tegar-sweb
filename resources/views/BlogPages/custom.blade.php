@extends('layout.app')

@section('title', 'Customize Tour Package | Tegar')

@section('content')


<script>
    document.getElementById('tourForm').addEventListener('submit', function(e){
        e.preventDefault();

        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const destination = document.getElementById('destination').value.trim();
        const date = document.getElementById('date').value.trim();
        const notes = document.getElementById('notes').value.trim();

        // Ganti nomor WA dengan nomor tujuanmu, format internasional tanpa tanda +
        const waNumber = "6281234567890";

        const message = `Hello, I would like to customize a tour package:\n\nName: ${name}\nEmail: ${email}\nDestination: ${destination}\nPreferred Date: ${date}\nNotes: ${notes}`;

        const url = `https://wa.me/${waNumber}?text=${encodeURIComponent(message)}`;

        window.open(url, '_blank');
    });
</script>
@endsection
