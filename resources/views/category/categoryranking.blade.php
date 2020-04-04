@extends('layouts.front')
@section('page')

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
       <!-- section -->
  <div class="section">
      <!-- container -->
      <div class="container">
        <!-- row -->
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-12">
                <div class="section-title">
                  <h2>Ranking</h2>
                </div>
              </div>
              <!-- post -->
             @foreach($rankings as $ranking)
             @for($rank=1;$rank<6;$rank++)
                {{$rank}}

             @endfor
              <div class="col-md-12">
                  <div class="post-body">
                      <div class="post-meta">
                        <a class="" href="">{{$ranking->name}}</a>
                      </div>
                      <h3 class="post-title">{{$ranking->coment}}</h3>
                      <h3 class="post-title">{{$ranking->description}}</h3>
                    </div>
                <div class="post post-row">
                  <a class="post-img" href=""><img src="{{asset('storage/'.$ranking->image)}}" alt="{{$ranking->name}}" style="width: 150%"></a>
                </div>
                <h5 class="favorites">いいね！ {{ $ranking->favorite_users->count() }}</h5>
              </div>
              @endforeach
              <!-- /post -->



              <div class="col-md-12">
                <div class="section-row">
                  <button class="primary-button center-block">Load More</button>
                </div>
              </div>
            </div>
          </div>


             <!-- archive -->
          <div class="aside-widget">
              <div class="section-title">
                <h2>Past Ranking</h2>
              </div>
              <div class="archive-widget">
                <ul>
                  <li><a href="#">・March 2020</a></li>
                  <li><a href="#">・February 2020</a></li>
                  <li><a href="#">・January 2020</a></li>
                  <li><a href="#">・December 2019</a></li>
                </ul>
              </div>
            </div>
            <!-- /archive -->
          </div>
        </div>
        <!-- /row -->
      </div>
      <!-- /container -->
    </div>
    <!-- /section -->
  </div>
  <!-- /section -->

  @endsection
