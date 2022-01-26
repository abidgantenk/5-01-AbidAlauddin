@extends('layouts.main')

@section('container')
<div classs="title-top mb-5">
    <h2 class="fw-bold">Contact Us</h2>
</div>
<form>
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="inputname" placeholder="Nama">
    <label for="inputname">Nama</label>
  </div>
  <div class="form-floating mb-3">
    <input type="email" class="form-control" id="inputemail" placeholder="Email">
    <label for="inputname">Nama</label>
  </div>
  <div class="form-floating mb-3">
    <textarea class="form-control" id="floatingTextarea2" style="height: 100px" placeholder="Tinggalkan pesan disini"></textarea>
    <label for="floatingTextarea2">Pesan</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection