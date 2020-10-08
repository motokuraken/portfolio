<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
<title>portfolio</title>
<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-info">
        <h2 class="navber-brand">Portfolio</h2>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link mr-2 ml-2" href="/todo_list">Todoリスト</a>
                </li>
                {{--<li class="nav-item">
                    <a class="nav-link mr-2 ml-2" href=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-2 ml-2" href=""></a>
                </li>--}}
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link mr-2 ml-2" href="/profile">プロフィール</a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('contents')

</body>
</html>