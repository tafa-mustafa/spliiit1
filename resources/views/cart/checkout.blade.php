@extends('layouts.front')

@section('content')



<h3 style="text-align:center">Finaliser mon Payement</h3>

<form  class="btn-subscription" action="{{route('orders.store')}}" method="post">
    @csrf


    <div class="form-group col-md-6 line-suscribe">
        <input type="text" name="shipping_fullname" id="" class="form-control line-suscribe" placeholder="Nom complet"  required autocomplete="oups">
    </div>
    <div class="form-group">
        <input type="text" name="shipping_state" id="" class=" form-control  line-suscribe"  placeholder="Pays" required autocomplete="oups">
    </div>

    <div class="form-group col-md-6 line-suscribe">
        <input type="text" name="shipping_city" id="" class="form-control line-suscribe"  placeholder="Ville" required autocomplete="oups">
    </div>

    <div class="form-group col-md-6 line-suscribe">
        <input type="number" name="shipping_zipcode" id="" class="form-control line-suscribe"  placeholder="Code postal" required autocomplete="oups">
    </div>

    <div class="form-group col-md-6 line-suscribe">
        <input type="text" name="shipping_address" id="" class="form-control line-suscribe" placeholder="Adress" required autocomplete="oups">
    </div>

    <div class="form-group col-md-6 line-suscribe">
        <input type="text" name="shipping_phone" id="" class="form-control   line-suscribe" placeholder="Telephone" required autocomplete="oups">
    </div>

    <h4>Payer</h4>

   
 {{-- <div class="form-check ">
                <spam> A la livraison</spam>

            <input class="line-suscribe " type="radio" class="form-check-input" name="payment_method" id="" value="cash_on_delivery">

    </div> --}}
    <div class="form-check">
        <spam> Avec Paypal</spam>
            <input type="radio" class="form-check-input line-suscribe" name="payment_method" id="" value="paypal">
           

    </div>


    <button type="submit" class="btn-subscription-etape mt-13">Passer la commande</button>

        <a href="url('/home)" class="btn-subscription-etape mt-13">Annuler</a>

</form>



@endsection
