<?php
/**
 * Created by naveedulhassan.
 * Date: 12/11/15
 * Time: 12:24 PM
 */
?>

@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Whoops! Something went wrong!</strong>

    <br><br>

    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
