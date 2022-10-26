@extends('layouts.app')

@section('content')
    <div id="main-conteiner">
    @foreach ($uads as $uad)
    {{ $id=$uad->id }}
        <form action="/ad/update/{ id }" method="POST">
            @csrf
            
            
            <select name="ad_type">
                @if ($uad->ad_type=="sell")
                    {{ $option_select="Pārdot" }}

                @elseif ($uad->ad_type=="job")
                    {{ $option_select="Darba piedāvāvajums" }}

                @elseif ($uad->ad_type=="swap")
                    {{ $option_select="Mainīt" }}

                @elseif ($uad->ad_type=="rent")
                    {{ $option_select="Īrēt" }}

                @elseif ($uad->ad_type=="buy")
                    {{ $option_select="Pirkt" }}

                @endif

                <option value="{{ $uad->ad_type }}" selected>{{ $option_select }}</option>
                <option value="job">Darba piedāvājums</option>
                <option value="sell">Pārdot</option>
                <option value="swap">Mainīt</option>    
                <option value="rent">Īrēt</option>
                <option value="buy">Pirkt</option>
            </select></br>
            <input type="text" name="heading" value="{{ $uad->heading }}"></br>
            <textarea name="desc" id="" cols="150" rows="20" >{{ $uad->desc }}</textarea></br>
            <input type="number" name="price" value="{{ $uad->price }}"></br>
            <input type="submit" value="Atjaunot informāciju">
            @endforeach
        </form>
    </div>
@endsection