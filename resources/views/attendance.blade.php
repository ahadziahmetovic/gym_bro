@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div  class="card-header text-center">{{ __('EVIDENCIJA') }}</div>
           
                      <div id="okvir" class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card mb-4">
                                    <div class="card-body text-center">
                                     
                                        <img id="pic" name="pic" src="{{URL::asset('/images/avatar.jpg')}}"
                                            alt="avatar" class="img-fluid rounded" style="width: 220px;height:300px">
                                        <h5 id="name" name="name" class="my-3">Ime i prezime</h5>
                                        <p class="text-muted mb-1">STATUS</p>
                                        <p id="status" name="status" class="mb-8">PRIJAVA / ODJAVA</p>
                                        <div class="d-flex justify-content-center mb-2">
                                            <p id="inout" name="status" class="mb-8 h4" style="color:white"></p>
                                        {{--  <button type="button" class="btn btn-primary">Follow</button> --}}
                                        {{--  <button type="button" class="btn btn-outline-primary ms-1">Message</button> --}}
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="row">

                          {{--   <div class="form-group">
                         
                                <input type="text" id="sifra" name="sifra" class="form-control" required="">
                            </div> --}}
                  
                        </div>

                
                        <div id="poruka"></div>
                    </div>
                    <div class="form-group">
                         
                        <input type="text" id="sifra" name="sifra" class="form-control" required="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById("sifra").focus();
    </script>
    <script src="{{ asset('js/main.js') }}" defer></script>
@endsection
