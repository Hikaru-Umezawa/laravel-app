@foreach ($articles as $article)
<div class="list-group-main mt col-lg-4 col-md-4 col-sm-4">
    <a href="{{ route('user.show',[$article->user->name])}}"><i class="fa fa-user-circle fa-3x mr-1"></i></a>
    <div class="font-weight-bold">
        <a href="{{ route('user.show',[$article->user->name])}}" class="user-name">{{$article->user->name}}</a>
    </div>
    <a href="{{ route('article.details',[$article->id])}}" class="list-group-item flex-column align-items-start text-center">
        <div class="d-flex justify-content-between">
            <h3 class="mb-1">{{ $article->article_title}}</h3>
            <p class="text-muted">{{ $article->create_at}}</p>
            <img src="{{ $article->url}}" width="150" height="225">
            <h4 class="mb-1">{{ $article->book_title}}</h4>
            <div class="text">
                {!! nl2br(e( $article->book_content )) !!}
            </div>
        </div>
    </a>
</div>
@endforeach