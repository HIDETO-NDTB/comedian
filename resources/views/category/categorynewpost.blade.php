@extends('layouts.front')
@section('page')
<br>
            <div class="container mt-4">
        <div class="border p-4-1">
            <h1 class="h5 mb-4-1" style="font-size:30px">
                <strong>New post</strong>
            </h1>

<br>

  <form method="POST" action="/post" enctype="multipart/form-data">
      @csrf
         <fieldset class="mb-4">
            <div class="form-group">
                <label>image</label>
                <input name="image" value="" type="file">
            </div>

            <fieldset class="mb-4">
               <div class="form-group">
                   <label for="name">name</label>
                   <input id="name" name="name" class="form-control " value="" type="text">
               </div>
              <div class="form-group">
                <label>description</label>
                <textarea id="body" name="description" class="form-control " rows="2"></textarea>
              </div>

              <div class="form-group">
                <label>comment</label>
                <textarea id="body" name="comment" class="form-control " rows="15"></textarea>
              </div>

            <!-- ヒデト追加 -->
            @foreach ($users as $user)
              <div class="form-group">
                <input type="hidden" name="user_id"  value="{{ $user->id }}">
              </div>
            </div>
            @endforeach
            <!-- ここまで -->

                      <div class="mt-5">
                          <a class="btn btn-secondary" href="">
                              cancel
                          </a>

                          <button type="submit" class="btn btn-primary">
                              submit
                          </button>
                      </div>
                </fieldset>
            </form>
        </div>
    </div>
    </div>


</body>
@endsection
