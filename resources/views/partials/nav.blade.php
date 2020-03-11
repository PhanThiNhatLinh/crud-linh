<nav class="navbar navbar-expand-sm bg-primary navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('posts.create') }}">Tạo bài viết mới</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('posts.index') }}">Các bài viết</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
        </li>
    </ul>
</nav>
