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
        <a href="{{ route('project.index') }}" class="btn btn-primary mb-3">Data Project</a>
        <div class="card-body">
            <form action="{{ route('project.update', $project->id) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">NAMA PROJECT</label>
                    <input type="text" class="form-control" id="nama_project" value="{{ $project->nama_project }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">CLIENT</label>
                <input type="text" class="form-control" id="client" value="{{ $project->client }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">PROJECT LEADER</label>
                <input type="text" class="form-control" id="project_leader" value="{{ $project->project_leader }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">START DATE</label>
                <input type="text" class="form-control" id="start_date" value="{{ $project->start_date }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">END DATE</label>
                <input type="text" class="form-control" id="end_date" value="{{ $project->end_date }}">
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">PROGRESS</label>
                <input type="text" class="form-control" id="progres" value="{{ $project->progres }}">
            </div>
              <button class="btn btn-primary float-end">Simpan</button>
            </form>
        </div>
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
  </body>
</html>