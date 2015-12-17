<?php
/**
 * Created by naveedulhassan.
 * Date: 12/11/15
 * Time: 2:45 PM
 */?>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?=config('app.basePath')?>">Home</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

                @if(\Illuminate\Support\Facades\Auth::user())
                    <li><a href="<?=config('app.basePath')?>auth/logout">Logout</a></li>
                @else
                    <li><a href="<?=config('app.basePath')?>auth/login">Login</a></li>
                @endif

                @if(\Illuminate\Support\Facades\Auth::user())
                    <li><a href="<?=config('app.basePath')?>tasks">Tasks</a></li>
                @endif

            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
