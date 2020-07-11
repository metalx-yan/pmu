<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<!-- JS, Popper.js, and jQuery -->

</head>
<body>
<a href="{{ route('produksi.create') }}" class="btn btn-primary">Tambah</a>
        <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Produksi</th>
                    <th scope="col">Komoditas Nama</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($produksi as $komoditas)
                      <tr>
                          <td>{{ $komoditas->produksi }}</td>
                          <td>{{ $komoditas->komoditas->name }}</td>
                          <td>{{ Carbon\Carbon::parse($komoditas->updated_at)->format('d F Y') }}</td>
                          <td>
                              <a href="{{ route('produksi.edit', $komoditas->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('produksi.destroy', $komoditas->id) }}" method="post">
                                @csrf 
                                @method('DELETE') 
                                
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                
                            </form>
                        </td>
                      </tr>
                  @endforeach
                </tbody>
              </table>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>    
</body>
</html>