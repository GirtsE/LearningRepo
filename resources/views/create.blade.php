@extends('layouts.app')

@section('content')
    <div id="main-conteiner">
        <form action="/ad/create" method="POST">
        @csrf
            <select name="ad_type">
                <option value="">Izvēleties sludinājuma tipu</option>
                <option value="job">Darba piedavajums</option>
                <option value="sell">Pārdot</option>
                <option value="swap">Mainīt</option>
                <option value="rent">Īrēt</option>
                <option value="buy">Pirkt</option>
            </select></br>
            <input type="text" name="heading"></br>
            <textarea name="desc" id="" cols="150" rows="20"></textarea></br>
            <input type="number" name=price></br>
            <input type="submit" value="Izveidot sludinājumu">
        </form>
    </div>
@endsection