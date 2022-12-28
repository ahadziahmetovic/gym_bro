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

                        <form class="row g-3 needs-validation" action="{{ route('insertFee') }}" method="post"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input style="display:none" type="id" name="member_id" value="{{$test['id']}}"/>
                            <div class="col-md-4">
                                <label>Ime</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$test['name']}}" disabled>

                            </div>
                            <div class="col-md-5">
                                <label >Prezime</label>
                                <input type="text" class="form-control" id="surname" name="surname" value="{{$test['surname']}}" disabled>
                            </div>
                            <div class="col-md-3">
                                <label >Iznos</label>
                                <input type="number" class="form-control" id="amount" name="amount"  required>
                            </div>
                            <?php
                            
                            $mytime = Carbon\Carbon::today()->toDateString();
                            
                            ?>
                            <div class="col-4">
                                <label >Datum unosa</label>
                                <div class="input-group date" >
                                    <input type="text" class="form-control rounded text-center" id="date" value="{{ $mytime }}"
                                        name="date" readonly>
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>

                                </div>

                            </div>

                            <div class="col-4">
                                <label>Uplaćeno od: </label>
                                <div id="datepicker" class="input-group date" data-date-format="yyyy-mm-dd">
                                    <input class="form-control rounded text-center" type="text" id="start" name="start" readonly />
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                            </div>
                            <div class="col-4">
                                <label>Uplaćeno do: </label>
                                <div id="datepicker2" class="input-group date" data-date-format="yyyy-mm-dd">
                                    <input class="form-control rounded text-center" type="text" id="end" name="end"readonly />
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label>Komentar</label>
                                <textarea class="form-control" id="comment" name="comment" rows="2" required></textarea>
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
