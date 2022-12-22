@extends('layouts.report')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('ČLANOVI') }}</div>
                    <div class="container">

                        <div class="row">
                            <form action="izvjestaj" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col">
                                        <label>Datum početka: </label>
                                        <div id="datepicker" class="input-group date" data-date-format="dd.mm.yyyy">
                                            <input name="pocetak" class="form-control" type="text" readonly />
                                            <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-calendar"></i></span>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <label>Datum kraja: </label>
                                        <div id="datepicker2" class="input-group date" data-date-format="dd.mm.yyyy">
                                            <input name="kraj" class="form-control" type="text" readonly />
                                            <span class="input-group-addon"><i
                                                    class="glyphicon glyphicon-calendar"></i></span>
                                        </div>
                                    </div>
                                    <div class="col">
                                     
                                    </div>
                                    <div class="col">
                                        <label></label>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" class="btn btn-success">Prikaži podatke</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>


                    <div class="card-body">
                        {{-- Početak datuma --}}

<div class="text-center alert-success fs-5">@if (isset($kraj))
    Od {{date('d.m.Y',strtotime($pocetak))}} Do {{date('d.m.Y',strtotime($kraj))}}
@else

@endif</div>


                        {{-- Kraj datuma --}}
                        {{-- Tabela početak --}}
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Šifra</th>
                                    <th scope="col">Naziv</th>
                                    <th scope="col" style="text-align: center">Datum</th>
                                    <th scope="col" class="d-flex justify-content-center">Izlaz</th>
                                 
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($stanje))
                                    @foreach ($stanje as $key => $data)
                                        <tr>
                                            <td scope="row">{{ $data->sifra }}</td>
                                            <td scope="row">{{ $data->naziv }}</td>
                                            <td scope="row" style="text-align: center">{{ date('d.m.Y',strtotime($data->datum)) }}</td>
                                            <td scope="row" class="d-flex justify-content-center">@if($data->izkol != NULL){{ $data->izkol }}@else {{0}}@endif</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <div class="text-center alert alert-success">
                                        Potrebno je da izaberete vremenski raspon.
                                    </div>
                                @endif
                            </tbody>
                        </table>
                    {{--    <span>@if (isset($stanje))
                            {{ $stanje->links('pagination::bootstrap-4') }}
                            
                        @endif</span>   --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
