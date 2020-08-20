<?php
    include 'head.php';
?>
    <title>Book Tracker</title>
</head>
<body>

<nav id="nav" class="navbar">
    <div class="container">
        <a href="index.php" class="navbar-brand" id="nav-brand">
            <img src="img/book.svg" alt="" width="30" height="30" class="d-inline-block align-top" loading="lazy">
            Book Tracker
        </a>
        <form>
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Войти
            </button>
        </form>
    </div>
</nav>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="signInModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="signInModal">Войти</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="inputEmail">Почта</label>
                        <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Пароль</label>
                        <input type="password" class="form-control" id="inputPassword">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Войти</button>
                        <a class="btn" href="register.php">Зарегистрироваться</a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<?php
include 'footer.php';
?>