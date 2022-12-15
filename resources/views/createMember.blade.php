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

                    <form class="row g-3 needs-validation" action="{{ url('create') }}" method="post">
                        {{ csrf_field() }}
                  
                        <div class="col-md-6">
                            <label for="inputEmail4" class="form-label">Ime</label>
                            <input type="text" class="form-control" id="inputEmail4" name="name" required>
                            <div class="invalid-feedback">
                                Popunite polje sa imenom.
                              </div>
                        </div>
                        <div class="col-md-6">
                            <label for="inputPassword4" class="form-label">Prezime</label>
                            <input type="text" class="form-control" id="inputPassword4" name="naziv" required>
                        </div>
                        <div class="col-12">
                            <label for="inputAddress" class="form-label">Opis</label>
                            <input type="text" class="form-control" id="inputAddress" placeholder="" name="opis" required>
                        </div>
                   
                        <div class="col-md-6">
                            <label for="inputCity" class="form-label">Datum</label>
                            <input type="text" class="form-control" id="inputCity" disabled>
                        </div>
                        <div class="col-md-4">
                            <label for="inputState" class="form-label">Upload slike</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="col-md-2">
                            <label for="inputZip" class="form-label">Limit</label>
                            <input type="text" class="form-control" id="inputZip" name="limit" required style="text-align: right" aria-describedby="customFileInput">
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Aktiviraj
                                </label>
                            </div>
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