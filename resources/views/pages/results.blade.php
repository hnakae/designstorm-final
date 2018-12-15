@extends('layouts/main')

@section('title')
  Design Storm - Inspiration for Developers
@endsection

@section('content')
  <div id="site-section">
    <div class="container">
      <div id="results">
        <div>
          <div class="search-container">
            <input class="search" type="text" value="Results" placeholder="Search">
          </div>
          <div class="boxes">
            <div class="row">
              @foreach ($filteredData as $project)
                <div class="col-md-3">
                  <div class="box">
                    <div style="position: relative; background: url('{{$project->covers->original}}') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; height: 200px;">
                      <div class="add-btn ">
                        <i class="fa fa-check" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
