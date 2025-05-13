<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fuji Graphic Jakarta</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  
  @include('partial.navbar')

  <main class="container my-4 p-5">
    <div class="row">
        <!-- Kolom Hubungi Kami & Form Kontak -->
        <div class="col-md-6">
            <h2 class="fw-bold mb-5 mt-5">Hubungi Kami :</h2>
            <table class="table table-borderless">
                <tr>
                    <td class="fw-bold">Telp / Fax</td>
                    <td>: <a href="tel:+622188352076">(021) 88352076</a></td>
                </tr>
                <tr>
                    <td class="fw-bold">Telp</td>
                    <td>: <a href="tel:+6281932018666">081932018666</a></td>
                </tr>
                <tr>
                    <td class="fw-bold">Telp</td>
                    <td>: <a href="tel:+628561861567">0856 1861 567</a></td>
                </tr>
                <tr>
                    <td class="fw-bold">WhatsApp</td>
                    <td>: <a href="https://wa.me/6281932018666">081932018666</a></td>
                </tr>
                <tr>
                    <td class="fw-bold">Email</td>
                    <td>: <a href="mailto:bagus.fujigraphic@gmail.com">bagus.fujigraphic@gmail.com</a></td>
                </tr>
                <tr>
                    <td class="fw-bold">Email</td>
                    <td>: <a href="mailto:bagus@fujigraphic.co.id">bagus@fujigraphic.co.id</a></td>
                </tr>
            </table>
        </div>

        <div class="col-md-6">
            <h2 class="fw-bold mb-5 mt-5">Form Kontak :</h2>
            <form action="{{ url('/contact') }}" method="POST">
            @csrf
            <div class="mb-3">
            <label class="form-label">Nama :</label>
        <input type="text" name="nama" class="form-control" placeholder="Nama Anda">
    </div>
    <div class="mb-3">
        <label class="form-label">Email :</label>
        <input type="email" name="email" class="form-control" placeholder="Email Anda">
    </div>
    <div class="mb-3">
        <label class="form-label">No Telpon/WhatsApp :</label>
        <input type="text" name="telepon" class="form-control" placeholder="Nomor Telpon/WhatsApp Anda">
    </div>
    <div class="mb-3">
        <label class="form-label">Pesan :</label>
        <textarea name="pesan" class="form-control" rows="3" placeholder="Pesan Anda"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Kirim</button>
</form>

        </div>
    </div>
</main>


 
  @include('partial.footer')

  <script src="{{ asset('script/script.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
