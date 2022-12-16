@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center">{{ __('PRIJAVA / ODJAVA') }}</div>
           
                      <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card mb-4">
                                    <div class="card-body text-center">
                                        <img src="{{ URL::asset('/images/avatar.jpg') }}"
                                            alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                        <h5 class="my-3">John Smith</h5>
                                        <p class="text-muted mb-1">Full Stack Developer</p>
                                        <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
                                        <div class="d-flex justify-content-center mb-2">
                                    {{--         <button type="button" class="btn btn-primary">Follow</button>
                                            <button type="button" class="btn btn-outline-primary ms-1">Message</button> --}}
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="row">

                            <div class="form-group">
                         
                                <input type="text" id="sifra" name="sifra" class="form-control" required="">
                            </div>
                  
                        </div>

                
                        <div id="poruka"></div>
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
