@extends('layouts.front')
@section('page')
<!-- section -->
  <div class="section">
    <!-- container -->
    <div class="container">


      <!-- row -->
      <div class="row">
        <div class="col-md-12">
          <div class="section-title">
            <h2>New post</h2>
          </div>
        </div>

        <!-- post -->
        @foreach($posts as $post)
        <div class="col-md-4">
          <div class="post">
            <a class="post-img" href=""> <img src="{{asset('storage/'.$post->image)}}" alt="{{$post->name}}" style="width:100%; height:250px"></a>
            <div class="post-body">
              <div class="post-meta">
                <a href="">{{$post->name}}</a>
                <span class="post-date">March 27, 2018</span>
              </div>
              <h3 class="post-title"><a href=””>{{$post->description}}</a></h3>
              <h3 class="post-title"><a href="">{{$post->comment}}</a></h3>
              <!-- ヒデト追加　-->
              <form action="" method="POST">
              @csrf
                <button class="good" type="submit"><img class="good" src="{{ asset('app/img/good.png') }}">いいね！</button>
              </form>
              <!-- ここまで　-->
            </div>
          </div>
        </div>
        @endforeach
        <!-- /post -->
    </div>  <!-- /container -->
    <div class="paginate">
        {{$posts->links()}}
      </div>
  </div>  <!-- /section -->

  <!-- section -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
          <!-- tags -->
          <div class="aside-widget">
            <div class="tags-widget">
            <h2>Tags</h2>
              <ul>
                <li><a href="#">ピン</a></li>
                <li><a href="#">コンビ</a></li>
                <li><a href="#">トリオ</a></li>
              </ul>
            </div>
          </div>
          <!-- /tags -->
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /section -->

  @endsection

