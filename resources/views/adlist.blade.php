@extends('layouts.app')

@section('content')

<div id="main-conteiner">
    <table id="adlist_table">
        <tr>
            <th>Sludinājuma veids</th>
            <th>Virsraksts</th>
            <th>Apraksts</th>
            <th>cena</th>
            <th>Izveidošanas datums</th>
            <th>Datu atjaunošanas datums</th>
            <th>Atjaunot informāciju</th>
            <th>Dzēst</th>
        </tr>
        
        @foreach ($ads as $ad)
        <tr>
            <td>{{ $ad->ad_type }}</td>
            <td>{{ $ad->heading }}</td>
            <td class="adlist_desc">{{ $ad->desc }}</td>
            <td>{{ $ad->price }}</td>
            <td>{{ $ad->created_at }}</td>
            <td>{{ $ad->updated_at }}</td>
            {{ $ad_id=$ad->id }}
            <td class="edit"><a href="/ad/edit/{{ $ad_id }}">Atjaunot</a></td>
            <td class="delete"><a href="/ad/delete/{{ $ad_id }}">dzēst</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection