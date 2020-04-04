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
        <div class="col-md-4 post">
          <div class="post">
            <a class="post-img" href=""> <img src="{{asset('storage/'.$post->image)}}" alt="{{$post->name}}" style="width:100%; height:250px"></a>
            <div class="post-body">
              <div class="post-meta">
                <h3 class="name">{{$post->name}}
                    <span class="post-date">March 27, 2018</span></h3>
                <h3 class="post-description">{{$post->description}}</h3>
              </div>
              <div class=commentBox>
                <h3 class="commentTitle">コメント一覧</h3>
                <h3 class="post-comment">{{$post->comment}}</h3>
              </div>
              <!-- ヒデト追加　-->
              @if((Auth::check())&&($post->user_id!=Auth::user()->id))
              @if (Auth::user()->is_favorite($post->id))
              <form action="{{ route('favorites.unfavorite',['id'=>$post->id]) }}" method="POST">
              @csrf
              @method('DELETE')
                   <button class="good" type="submit"><img class="good" src="{{ asset('app/img/good.png') }}">取消し</button>
              </form>
              @else
              <form action="{{ route('favorites.favorite',['id'=>$post->id]) }}" method="POST">
              @csrf
                <button class="good" type="submit"><img class="good" src="{{ asset('app/img/good.png') }}">いいね！</button>
              </form>
              @endif
              @endif
              <h5 class="favorites">いいね！ {{ $post->favorite_users->count() }}</h5>
              <!-- ここまで　-->
            </div>
          </div>
        </div>
        @endforeach
        <!-- /post -->
    </div>  <!-- /container -->


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

