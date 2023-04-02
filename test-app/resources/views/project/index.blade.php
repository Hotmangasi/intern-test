<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
        <h1 class="text-center mb-5">Project Monitoring</h1>
        <a href="{{ route('project.create') }}" class="btn btn-primary mb-3">Tambah Data</a>
        <div class="card-body">
            <table class="table">
                <thead>
                    <th>PROJECT NAME</th>
                    <th>CLIENT</th>
                    <th>PROJECT LEADER</th>
                    <th>START DATE</th>
                    <th>END DATE</th>
                    <th>PROGRESS</th>
                    <th>ACTION</th>
                </thead>
                <tbody>
                    @foreach ($project as $item => $hasil)
                        <td>{{ $hasil->nama_project }}</td>
                        <td>{{ $hasil->client }}</td>
                        <td>{{ $hasil->project_leader }}</td>
                        <td>{{ $hasil->start_date }}</td>
                        <td>{{ $hasil->end_date }}</td>
                        <td>{{ $hasil->progres }}</td>
                        <td>
                            <a href="" class="btn btn-success btn-sm">Edit</a>
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>