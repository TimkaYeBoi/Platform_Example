@section("header_platform")
<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-2">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/admin/main">Platform Test</a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap d-flex">
                <p class="mx-auto , text-light">{{ auth()->user()->name }}</p>a;
                <form action="{{route("logout")}}" method="post">
                    @csrf
                    <button class="btn btn-danger">Sign out</button>
                </form>
        </li>
    </ul>
</nav>


