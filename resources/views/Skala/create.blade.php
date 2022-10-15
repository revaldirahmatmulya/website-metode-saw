@extends('layouts.index')
@section('content')
    <div class="wrapper">
        <h5>Tambah Data Skala</h5>
        <div class="line-custom"></div>
        <form action="{{ url('skala/store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="id" class="form-label">ID </label>
                <input type="text" name="id" class="form-control " placeholder="Disabled input" readonly>
                <div id="emailHelp" class="form-text">ID will automated increment</div>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nomor Skala </label>
                <input type="number" name="value" class="form-control" />
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Keterangan </label>
                <input type="text" name="keterangan" class="form-control" />
            </div>

            <div class="mb-3 form-check"></div>
            <button type="submit" name="kirim" class="btn btn-primary">
                Submit
            </button>
        </form>
    </div>
@endsection
