<div class="" id="category">
    @foreach ($categories as $category)
        <a href="/course/{{$category->id}}">
            <div id="list" style="background-image: url({{ asset('/storage/'.$category->image)}})">
                <div id="list-wrapper">
                    <span>{{$category->name}}</span>
                </div>
            </div>
        </a>
    @endforeach 
</div>