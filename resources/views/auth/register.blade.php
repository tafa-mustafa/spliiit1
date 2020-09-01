@extends('welcome')
@section('tete')
@endsection
@section('container')
<section class="etape-subscribe container-view"   id="registration-card2" style='margin-buttom:-25px'>
                    <form class="btn-subscription" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="line-suscribe" >
                                <input id="name" type="text" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="votre nom">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- </div> --}}
                        </div>

                        <div  class="line-suscribe">

                                <input id="email" type="email" @error('email') is-invalid @enderror name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Votre Email">

                                @error('email')
                                    <span class="line-suscribe invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="line-suscribe">

                                <input id="password" type="password" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Cotre mot de passe">

                                @error('password')
                                    <span class="line-suscribe invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="line-suscribe">

                                <input id="password-confirm" type="password"  name="password_confirmation" required autocomplete="new-password" placeholder="Confirmer votre mot de passe">
                        </div>

                        <div class="line-btn-suscribe">
                                <button type="submit" class="btn-subscription-etape">
                                    {{ __("S'inscrire") }}
                                </button>
                        </div>
                        <div class="line-btn-suscribe">
                                    <a href="{{ route('login') }}" class="btn-login ">  j'ai deja un compte</a>

                        </div>
                    </form>
                </div>
</section>
@endsection
@section('tronc')

@endsection

