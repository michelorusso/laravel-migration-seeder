@extends('layouts.app')

@section('main-content')
    <div class="container">
        <h2>Lista Viaggi</h2>

        <div class="row">

            @foreach ($travels as $travel)
                <div class="card col-4" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $travel->package_name }}</h5>
                        <p class="card-text">{{ $travel->city }}</p>
                        <p class="card-text">{{ $travel->description }}</p>
                        <p class="card-text"><b>{{ $travel->days_number }} days</b></p>
                        <p class="card-text">Price: {{ $travel->price }} $</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            @endforeach
        </div>
        
        

    </div>
    
@endsection