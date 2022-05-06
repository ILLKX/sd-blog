@foreach($articles as $key=>$value)
    <div class="box is-flex">
        <time>{{$value->created_at->toDateString()}}</time>
        <span class="ml-1 mr-1">|</span>
        <a class="is-flex" href="{{route('article.show',$value->id)}}" title="{{$value->title}}">
            {{$value->title}}
        </a>
    </div>
@endforeach
