@extends ('layouts.master')

@section ('content')
    @include('includes.message-block')
    <section class="row new-post">
        <div class="col-md-6-col-md-offset-3">
          <header><h3>What do you have to say?</h3></header>
            <form action="{{ route ('post.create') }}" method="post">
                <div class="form-group">
                    <textarea class="form-control" name="body" id="new-post" rows="5" placeholder="Your Post"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Create Post</button>
                <input type="hidden" value="{{ Session::token() }}" name="_token">
            </form>
        </div>
    </section>
    <section class="row posts">
        <div class="col-md-6-col-md-3-offset">
        <header><h3>What other people say..</h3></header>
        @foreach($posts as $post)

        <article class="post">
            <p>Help me LORD to finish my projects so that I can sleep</p>
            <div class="info">
                Posted by Kathyryne on 12 Feb 2016
            </div>
            <div class="interaction">
                <a href="#">Like</a> |
                <a href="#">Dislike</a> |
                <a href="#">Edit</a> |
                <a href="#">Delete</a>
            </div>
        </article>
            <article class="post">
                <p>{{}} </p>
                <div class="info">
                    Posted by Kathyryne on 12 Feb 2016
                </div>
                <div class="interaction">
                    <a href="#">Like</a> |
                    <a href="#">Dislike</a> |
                    <a href="#">Edit</a> |
                    <a href="#">Delete</a>
                </div>
            </article>
            @endforeach
        </div>
    </section>

@endsection