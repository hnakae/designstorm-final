@extends('layouts/account')
@section('title')
  Account - Dashboard
@endsection

@section('content')

<div>
  <h1>Create Project</h1>
  <h6>This is where all your projects are located</h6>
  <div class="row">
    <div class="col-md-12">

      <div class="box">
        <div class="row">
          <div class="col-md-10">
            <form class="" action="/account/projects" method="post">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-6">
                  <label for="title">
                    Title
                  </label>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <input type="text" name="title">
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <label for="title">
                    Active
                  </label>
                </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                    <select name="active">
                      <option value="0">No</option>
                      <option value="1">Yes</option>
                    </select>
                  </div>
              </div>
              <button type="submit" name="button">Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>

@endsection
