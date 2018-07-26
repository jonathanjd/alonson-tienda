@extends('ecommerce.layouts.ecommerce')
@section('content')
@include('ecommerce.include.navbar', ['categories' => $categories])

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-half is-offset-one-quarter">
                <div class="box">
                    <h3 class="title">Login</h3>
                    <hr>
                    <form action="">
                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input class="input" type="email" placeholder="Email">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control has-icons-left">
                                <input class="input" type="password" placeholder="Password">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-lock"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control">
                                <button class="button is-success is-fullwidth">
                                    Login
                                </button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
