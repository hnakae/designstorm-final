@extends('layouts/main')

@section('content')
<header>
  <div class="container"><a class="logo" href="index.html">Design Storm</a>
    <nav><a href="pages/register.html">register</a><a href="pages/login.html">login</a></nav>
  </div>
</header>
<div id="site-section">
  <div class="container">
    <div id="home">
      <div class="search-area">
        <div class="search-container">
          <h1>DesignStorm</h1>
          <input class="search" type="text" value="" placeholder="Search">
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
