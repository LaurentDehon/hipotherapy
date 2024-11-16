@extends('layouts.app')

@section('content')

<h2>Connexion<?php if (isset($_SESSION['error_message'])): ?>
    <span style="color: red;"><?= htmlspecialchars($_SESSION['error_message']) ?></span>
    <?php unset($_SESSION['error_message']); ?>
<?php endif; ?></h2>
<form method="POST" action="/auth/login">
    <input type="text" id="username" name="username" required placeholder="Nom d'utilisateur">
    <input type="password" id="password" name="password" required placeholder="Mot de passe">
    <button type="submit">Se connecter</button>
</form>

<p>Pas encore inscrit ?<a href="/auth/register" style="margin-left: 15px">Créez un compte</a></p>

@endsection