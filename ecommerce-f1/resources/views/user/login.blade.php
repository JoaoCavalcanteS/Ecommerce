<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <form method="POST" action="login">
            @csrf
            <input type="email" name="email">
            input
            <input type="password" name="senha">
            <button type="submit">Logar</button>
        </form>
        @if (isset($falha))
            <div>{{ $falha }}</div>
        @endif
    </body>
</html>
