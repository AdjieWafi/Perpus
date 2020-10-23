@extends('frontend.templates.default')

@section('content')

{{-- @include('frontend.templates.partials.slider') --}}

<div class="container">
<h2>Koleksi Buku</h2>
<blockquote>         <p2 class="flow-text">Koleksi yang dapat dipinjam</p2></blockquote>
<div class="row">
   @foreach ($books as $book)
   @include('frontend\templates\components\card-book', ['book' => $book])
   @endforeach


   
</div>

 {{--pagination--}}
 {{ $books->links('vendor.pagination.materialize') }}
</div>
@endsection