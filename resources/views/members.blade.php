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
                  
                        {{-- Tabela početak --}}
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Ime</th>
                                    <th scope="col">Prezime</th>
                                    <th scope="col" style="text-align: center">Code</th>
                                    <th scope="col" style="text-align: center">Grad</th>
                                    <th scope="col" style="text-align: center">Izmijeni</th> 
                                    <th scope="col" style="text-align: center">Profil</th> 
                                    <th scope="col" style="text-align: center">Članarina</th> 

                                    
                                 
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($stanje))
                                    @foreach ($stanje as $key => $data)
                                        <tr>
                                            <td scope="row">{{ $data->name }}</td>
                                            <td scope="row">{{ $data->surname }}</td>
                                            <td scope="row" style="text-align: center">{{ $data->code }}</td>
                                            <td scope="row" style="text-align: center">{{$data->city}}</td>
                                            <td scope="row" style="text-align: center" ><a href="{{ route('editMember',$data->id)}}" class="btn btn-warning">Izmijeni</a></td>
                                            <td scope="row" style="text-align: center" ><a href="{{ route('memberProfile',$data->id)}}" class="btn btn-warning">Profil</a></td>
                                            <td scope="row" style="text-align: center" ><a href="{{ route('fees',$data->id)}}" class="btn btn-success">Članarina</a></td>
                                            
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
