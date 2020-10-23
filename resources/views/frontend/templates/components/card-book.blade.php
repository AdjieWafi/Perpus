<div class="col s12 m6">
    <div class="card horizontal hoverable">
      <div class="card-image">
        <img src="{{ $book->getCover() }}" height="150px">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <h6><b>
            <a href="{{ route('book.show', $book)}}">{{ Str::limit ($book->title,20)}}</a>
          </b></h6>
          <p>{{ Str::limit($book->description, 75) }}</p>
        </div>
        <div class="card-action">
         <a href="{{ route('book.show', $book)}}" class="btn green darken-1 right waves-effect waves-light">Lihat Detail Buku</a>
       </div>
      </div>
    </div>
</div>