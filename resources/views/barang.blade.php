<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>

    <div class="d-flex justify-content-between align-items-center">
        <h1>List Barang</h1>
        <a href="{{ route('tambah-barang') }}" class="btn btn-primary">Tambah Barang</a>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Kode Barang</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach($barang as $row)
          <tr>
            <td>{{ $row->id }}</td>
            <td>{{ $row->kode_barang }}</td>
            <td>{{ $row->nama_barang }}</td>
            <td>
              <a href="{{ route('edit-barang', $row->id) }}" class="btn btn-warning">Edit</a>
              <form method="post" action="{{ route('delete-barang', $row->id) }}">
                @csrf
                @method('delete')

                <button class="btn btn-danger">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>