@include('layouts.app)

@section('content')

<?php
use App\Company;
$company = Company::all();
?>
    <table>
        <thead></thead>
        <tbody>
        @if(count($company)>1)
            @foreach($company as $com)
            <tr>
                <td><p>{{$com->companyName}}</p></td>
                <td><button>Verify</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
