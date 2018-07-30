@extends('ecommerce.layouts.ecommerce')
@section('content')
@include('ecommerce.include.navbar', ['categories' => $categories])

<section class="section">
    <div class="container">
        <div class="columns">
            <div class="column is-half is-offset-one-quarter">
                @if ($errors->any())
                <article class="message is-danger">
                    <div class="message-header">
                        <p><i class="fas fa-exclamation-triangle m-r-sm"></i>Error</p>
                    </div>
                    <div class="message-body">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </article>
                @endif
                @if (Session::has('errorAuth'))
                <article class="message is-danger">
                    <div class="message-header">
                        <p><i class="fas fa-exclamation-triangle m-r-sm"></i>Error</p>
                    </div>
                    <div class="message-body">
                       {{ Session::get('errorAuth') }}
                    </div>
                </article>
                @endif
                <div class="box">
                    <h3 class="title">Login</h3>
                    <hr>
                    <form action="{{ url('tienda/login') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="field">
                            <p class="control has-icons-left has-icons-right">
                                <input name="email" class="input" type="email" placeholder="Email">
                                <span class="icon is-small is-left">
                                    <i class="fas fa-envelope"></i>
                                </span>
                            </p>
                        </div>
                        <div class="field">
                            <p class="control has-icons-left">
                                <input name="password" class="input" type="password" placeholder="Password">
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
