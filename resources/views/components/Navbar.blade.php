<!-- navbar -->
<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">Creative Coder</a>
        <div class="d-flex">
            <a href="/#blogs" class="nav-link">Blogs</a>
            @guest
                <a href="/register" class="nav-link">Register</a>
                <a href="/login" class="nav-link">Login</a>
            @else
                <a href="/register" class="nav-link">{{ auth()->user()->name }}</a>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn btn-link text-decoration-none">Logout</button>
                </form>
            @endguest
            <a href="/#subscribe" class="nav-link">Subscribe</a>
        </div>
    </div>
</nav>
