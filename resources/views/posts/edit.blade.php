@include('partials.head')

<body>
    @include('partials.nav')
    <div class="container">
        @include('partials.mesage')
    <h3>Create Post</h3>
    <form action="{{ route('posts.update',['post'=> $post])}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
        <input type="text" class="form-control" name="title" value="{{$post->title}}">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" cols="30" rows="10" id="content-ckeditor1">{!!$post->content!!}</textarea>
        </div>
        <input type="submit" value="Update" class="btn btn-primary">
    <script>
        CKEDITOR.replace('content-ckeditor1');
    </script>
</div>
</body>
</html>
