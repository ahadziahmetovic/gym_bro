@extends('layouts.app')

@section('content')
<div class="container py-5">
  <div class="row">
  
  </div>

  <div class="row">
    <div class="col-lg-4">
      <div class="card mb-4">
        <div class="card-body text-center">
          <?php $image = $member->image_path;?>
          <img src="{{asset("images/{$image}")}}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
          <h5 id="name" name="name" class="my-3">{{$member->name.' '.$member->surname}}</h5>
          <p class="text-muted mb-1">Datum isteka članarine</p>
          <p class="text-muted mb-4">Bay Area, San Francisco, CA</p>
          <div class="d-flex justify-content-center mb-2">
            @if($member->status =='on')
            <button type="button" class="btn btn-primary">Aktivan</button>
            <button type="button" class="btn btn-outline-primary ms-1">Neaktivan</button>
            @else
            <button type="button" class="btn btn-outline-primary">Aktivan</button>
            <button type="button" class="btn btn-danger ms-1">Neaktivan</button>
            @endif
          </div>
        </div>
      </div>
      <div class="card mb-4 mb-lg-0">
        <div class="card-body p-0">
          <ul class="list-group list-group-flush rounded-3">
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              <i class="fas fa-globe fa-lg text-warning"></i>
              <p class="mb-0">Datum prve registracije:</p>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
              <i class="fab fa-github fa-lg" style="color: #333333;"></i>
              <p class="mb-0">Istek članarine:</p>
            </li>
            
          </ul>
        </div>
      </div>
    </div>
    <div class="col-lg-8">
      <div class="card mb-4">
        <div class="card-body">
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Ime i prezime</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{$member->name.' '.$member->surname}}</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">JMBG</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{$member->jmbg}}</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Mobile</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{$member->mobile}}</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Adresa</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{$member->street}}</p>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-sm-3">
              <p class="mb-0">Grad</p>
            </div>
            <div class="col-sm-9">
              <p class="text-muted mb-0">{{$member->city}}</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="card mb-4 mb-md-0">
            <div class="card-body">
              <p class="mb-4"><span class="text-primary font-italic me-1">Statistika</span> Prošli mjesec
              </p>
              <p class="mb-1" style="font-size: .77rem;">Dnevni prosjek</p>
              <div class="progress rounded" style="height: 5px;">
                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="mt-4 mb-1" style="font-size: .77rem;">Sedmični prosjek</p>
              <div class="progress rounded" style="height: 5px;">
                <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="mt-4 mb-1" style="font-size: .77rem;">Mjesečni prosjek</p>
              <div class="progress rounded" style="height: 5px;">
                <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card mb-4 mb-md-0">
            <div class="card-body">
              <p class="mb-4"><span class="text-primary font-italic me-1">Statistika</span> Tekući mjesec
              </p>
              <p class="mb-1" style="font-size: .77rem;">Dnevni prosjek</p>
              <div class="progress rounded" style="height: 5px;">
                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="mt-4 mb-1" style="font-size: .77rem;">Sedmični prosjek</p>
              <div class="progress rounded" style="height: 5px;">
                <div class="progress-bar" role="progressbar" style="width: 72%" aria-valuenow="72"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="mt-4 mb-1" style="font-size: .77rem;">Mjesečni prosjek</p>
              <div class="progress rounded" style="height: 5px;">
                <div class="progress-bar" role="progressbar" style="width: 89%" aria-valuenow="89"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
             
            
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection