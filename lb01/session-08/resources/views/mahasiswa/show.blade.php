<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Mahasiswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    p {
        margin: 0
    }
</style>

<body>
    <div class="pt-3">

        {{-- href="{{ route('mahasiswa.show', ['mahasiswa' => $mahasiswa->id]) }}" --}}
        <div style="display:flex;margin: 0 20%">
            <h1 class="h2 mr-auto">Biodata {{ $mahasiswas->nama }}</h1>
            <div class="d-flex align-items-center" style="margin-left: 5%">
                <a class="btn btn-dark">
                    Back
                </a>
                <a class="btn btn-primary" style="margin: 0 4%">
                    Edit
                </a>
                <form>
                    <button type="submit" class="btn btn-danger ml-3">Delete</button>
                </form>
            </div>
        </div>
        <div style="margin: 2% 20%">
            <p><b>Nim :</b></p>
            <p><b>Nama :</b></p>
            <p><b>Jenis Kelamin :</b></p>
            <p><b>Jurusan :</b></p>
            <p><b>Alamat :</b></p>
        </div>


    </div>

</body>

</html>
