<?php
    include 'head.php';
?>
    <title>Регистрация</title>
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

<br>

<div class="container">
    <h2>Регистрация</h2><br>
    <form>
        <div class="form-group">
            <label for="inputEmailReg">Введите почту</label>
            <input type="email" class="form-control" id="inputEmailReg" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="inputPasswordReg">Введите пароль</label>
            <input type="password" class="form-control" id="inputPasswordReg">
        </div>
        <div class="form-group">
            <label for="inputPasswordConfirmReg">Введите пароль повторно</label>
            <input type="password" class="form-control" id="inputPasswordConfirmReg">
        </div>
        <div id="passwordConfirmStatus" class="alert alert-warning" role="alert" hidden="">
            Пароли не совпадают
        </div>
        <div class="form-group">
            <button id="submitButton" type="submit" class="btn btn-primary">Зарегистрироваться</button>
        </div>
    </form>
</div>

<script src="js/register.js"></script>
<?php
include 'footer.php';
?>