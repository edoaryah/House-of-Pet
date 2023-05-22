<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Edit</title>
</head>

<body>
    <form method="post" action="/antrian/{{ $data->id }}">
        @method('put')
        @csrf
        <div class="card text-center" style="width:20rem,justify-content-center;">
            <div class="card-body">
                <h5 class="card-title">UBAH ANTRIAN</h5>
                <div>
                    <div class="form-check form-check-inline">
                        <input type="hidden" name="id" value="{{ $data->id }}">
                        <input type="radio" class="form-check-input" name="status_antrian" id="a" value="TUNGGU">
                        <label class="form-check-label" for="a">TUNGGU</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="status_antrian" id="b" value="PROSES">
                        <label class="form-check-label" for="b">PROSES</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="status_antrian" id="c" value="SELESAI">
                        <label class="form-check-label" for="c">SELESAI</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="status_antrian" id="d" value="BATAL">
                        <label class="form-check-label" for="d">BATAL</label>
                    </div>

                    <input type="submit" class="btn btn-primary" value="KONFIRMASI">
                </div>

            </div>
        </div>
    </form>
</body>

</html>