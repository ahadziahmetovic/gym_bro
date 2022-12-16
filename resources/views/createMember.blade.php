@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('UNOS KORISNIKA') }}</div>
                <div class="container">
                    <div class="row">
                    </div>
                </div>
                <div class="card-body">

                    <form class="row g-3 needs-validation" action="{{ route('create') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                  
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Ime</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                            
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Prezime</label>
                            <input type="text" class="form-control" id="surname" name="surname" required>
                        </div>
                        <div class="col-4">
                            <label for="inputAddress" class="form-label">Code</label>
                            <input type="text" class="form-control" id="code" placeholder="" name="code" required>
                        </div>
                        <div class="col-8">
                            <label for="inputAddress" class="form-label">JMBG</label>
                            <input type="text" class="form-control" id="jmbg" placeholder="" name="jmbg" required>
                        </div>
                   
                        <div class="col-4">
                            <label for="inputAddress" class="form-label">Datum registracija</label>
                            <?php 
                           
                            $mytime = Carbon\Carbon::now();
                            ?>
                            <input type="text" class="form-control" id="register_date" placeholder="{{$mytime}}" name="register_date" required>
                        </div>
                    
                        <div class="image col-md-8">
                            <label for="inputState" class="form-label">Upload slike</label>
                            <input class="form-control" type="file" id="image" name="image">
                        </div>
                        <div class="col-md-5">
                            <label for="inputZip" class="form-label">Ulica</label>
                            <input type="text" class="form-control" id="street" name="street" required style="text-align: right" aria-describedby="customFileInput">
                        </div>
                        <div class="col-md-3">
                            <label for="inputZip" class="form-label">Poštanski broj</label>
                            <input type="number" class="form-control" id="post_no" name="post_no" required style="text-align: right" aria-describedby="customFileInput">
                        </div>
                        <div class="col-md-4">
                            <label for="inputZip" class="form-label">Grad</label>
                            <input type="text" class="form-control" id="city" name="city" required style="text-align: right" aria-describedby="customFileInput">
                        </div>
                     
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Snimi</button>
                        </div>
                    </form>
                    <hr>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                         
                        <button type="button" class="btn btn-primary justify-content-md-end mx-3 my-4" onclick="location.href='{{ url('/izlaz') }}'">Početak</button>
                        <button type="button" class="btn btn-dark justify-content-md-end mx-4 my-4" onclick="location.href='{{ url('/logout') }}'">Izlaz</button>

                </div>

                </div>
            </div>
        </div>
    </div>
  @endsection