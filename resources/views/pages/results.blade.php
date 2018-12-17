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
            <form class="" action="/results" method="post">
              {{ csrf_field() }}
              <input class="search" type="text" value="{{$search}}" placeholder="Search" name="search">
              {{-- {{$keyword}} --}}
            </form>
          </div>
          <div class="boxes">
            <div class="row">
              @if(count($filteredData) >= 1)
                @foreach ($filteredData as $project)
                  <div class="col-md-3">
                    <div class="box">
                      <div style="position: relative; background: url('{{$project->covers->{'202'} }}') no-repeat center
                      center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size:
                      cover;background-size: cover; height: 200px;">
                        {{-- @php
                        $codedUrl = urlencode($project->covers->{'202'})
                        @endphp --}}
                        {{-- <a href="/projects/item/{{ $project->id }}/add?image_url={{ $codedUrl }}">
                          <div class="add-btn
                          @if(in_array($project->id, $arrayInfo))
                            active
                          @endif">
                          <i class="fa fa-check" aria-hidden="true"></i></div>
                        </a> --}}
                      </div>
                      {{-- <h4>{{$project->name}}</h4> --}}
                    </div>
                  </div>
                @endforeach
              @else
                <h1>No Results</h1>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
