@include('partials.head')

<body>
    @include('partials.nav')
    <div class="container">
        @include('partials.mesage')
    <h3>Create Post</h3>
    <form action="{{ action('PostController@store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Input Title">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea name="content" class="form-control" placeholder="Input Content" cols="30" rows="10" id="content-ckeditor"></textarea>
        </div>
        <input type="submit" value="Create" class="btn btn-primary">
    </form>

    <script>
        CKEDITOR.replace('content-ckeditor');
    </script>
</div>
</body>
</html>
