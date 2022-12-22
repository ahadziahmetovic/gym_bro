@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('UNOS ČLANARINE') }}</div>
                    <div class="container">
                        <div class="row">
                        </div>
                    </div>
                    <div class="card-body">

                        <form class="row g-3 needs-validation" action="{{ route('createFee') }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}

                            <div class="col-md-4">
                                <label>Ime</label>
                                <input type="text" class="form-control" id="name" name="name" disabled>

                            </div>
                            <div class="col-md-8">
                                <label >Prezime</label>
                                <input type="text" class="form-control" id="surname" name="surname" disabled>
                            </div>
                            <?php
                            
                            $mytime = Carbon\Carbon::now();
                            ?>
                            <div class="col-4">
                                <label >Datum unosa</label>
                                <div class="input-group date" data-date-format="dd.mm.yyyy">
                                    <input type="text" class="form-control rounded text-center" id="datum_unosa" value="{{ $mytime }}"
                                        name="datum_unosa" readonly>
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>

                                </div>

                            </div>

                            <div class="col-4">
                                <label>Uplaćeno od: </label>
                                <div id="datepicker" class="input-group date" data-date-format="dd.mm.yyyy">
                                    <input class="form-control rounded text-center" type="text" id="from" name="from" readonly />
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                            </div>
                            <div class="col-4">
                                <label>Uplaćeno do: </label>
                                <div id="datepicker2" class="input-group date" data-date-format="dd.mm.yyyy">
                                    <input class="form-control rounded text-center" type="text" id="to" name="to"readonly />
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                            </div>


                            <div class="col-12">
                                <button type="submit" class="btn btn-primary">Snimi</button>
                            </div>
                        </form>
                        <hr>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">

                            <button type="button" class="btn btn-primary justify-content-md-end mx-3 my-4"
                                onclick="location.href='{{ url('/izlaz') }}'">Početak</button>
                            <button type="button" class="btn btn-dark justify-content-md-end mx-4 my-4"
                                onclick="location.href='{{ url('/logout') }}'">Izlaz</button>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endsection
