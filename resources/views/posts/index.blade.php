@include('partials.head')

<body>
    @include('partials.nav')
    <div class="container">
        @include('partials.mesage')
        <h2 class="text-center">Quản lý bài viết</h2>
        <table class="table table-bordered">
            <thead>
                <th>Tên bài viết</th>
                <th>Nội dung bài viết</th>
                <th>Thao tác</th>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>
                        <h6><a href="{{ route('posts.show', ['post'=> $post])}}">{{$post->title}}</a></h6>
                    </td>
                    <td>{!!$post->content!!}</td>
                    <td> <a href="{{ route('posts.edit', ['post'=> $post])}}" class="btn btn-primary">Chỉnh sửa</a>
                        <form action="{{ route('posts.destroy',['post'=> $post])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Xóa bài</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

</body>

</html>
