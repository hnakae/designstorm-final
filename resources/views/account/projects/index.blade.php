@extends('layouts/account')
@section('title')
  Account - Dashboard
@endsection

@section('content')

<div>
  <h1>Projects</h1>
  <h6>This is where all your projects are located</h6>
  <div class="row">
    <div class="col-md-12">
      <div class="box">
        <div class="row">
          <div class="col-md-10">
            All of our projects
          </div>
          <div class="col-md-2">
            <a href="/account/projects/create">Add New Project</a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10">
            <table>
              <thead>
                <tr>
                  <th>id</th>
                  <th>Title</th>
                  <th>Edit</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($projects as $project)
                  <tr>
                    <td>{{$project->id}}</td>
                    <td>
                      <a href="/account/projects/{{$project->id}}/">
                        {{$project->title}}
                        @if($project->active == 1)
                          <div style="display: inline-block; padding: 6px; background: purple; color: white">
                            Active
                          </div>
                        @endif
                      </a>
                    </td>
                    <td>
                      {{-- <a href="/account/projects/{{$project->id}}/edit" class="edit-btn">Edit</a> --}}
                      <a href="/account/projects/id/edit" class="edit-btn">Edit</a>
                    </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>

@endsection
