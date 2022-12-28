@extends('layouts.report')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('PREGLED EVIDENCIJA') }}</div>
                    <div class="container">

                        <div class="row">
                   {{--          <form action="izvjestaj" method="post">
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
                            </form> --}}

                        </div>
                    </div>


                    <div class="card-body">
                  
                        {{-- Tabela početak --}}
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Ime</th>
                                    <th scope="col">Prezime</th>
                                    <th scope="col" style="text-align: center">Vrijeme prijave</th>
                                    <th scope="col" style="text-align: center">Vrijeme odjave</th>
                                                                    
                                 
                                </tr>
                            </thead>
                            <tbody>
                                @if (isset($att))
                
                                    @foreach ($att as $key => $data)
                                        <tr>
                                            <td scope="row">{{ $data->name }}</td>
                                            <td scope="row">{{ $data->surname }}</td>
                                            <td scope="row" class="text-center">{{ $data->in }}</td>
                                            <td scope="row" class="text-center">{{ $data->out }}</td>
                                       
                                        {{--     <td scope="row" style="text-align: center" ><a href="{{ route('editMember',$data->id)}}" class="btn btn-warning">Izmijeni</a></td>
                                            <td scope="row" style="text-align: center" ><a href="{{ route('memberProfile',$data->id)}}" class="btn btn-warning">Profil</a></td>
                                            <td scope="row" style="text-align: center" ><a href="{{ route('fees',$data->id)}}" class="btn btn-success">Članarina</a></td> --}}
                                            
                                        </tr>
                                    @endforeach
                                @else
                                    <div class="text-center alert alert-success">
                                        Nema prijavljenih članova.
                                    </div>
                                @endif
                            </tbody>
                        </table>
                       <span>@if (isset($att))
                            {{ $att->links('pagination::bootstrap-4') }}
                            
                        @endif</span>  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
