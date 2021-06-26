<form id="search_blog">
    <div>
        <input type="text" id="search" name="search" placeholder="Tìm kiếm theo tiêu đề sự kiện">
        <button action="submit" class="btn" >Tìm kiếm</button>
    </div>
</form>



@foreach ($blogs as $k => $blog)
    STT : {{$k + 1}}
    <a style="text-black" href="{{url('/blog/event/detail/'.$blog['id'])}}">
        Tiêu đề : {{$blog['title']}}
        <br>
        Nội dung : {{$blog['content']}}
    </a>
    <a href="{{url('/blog/event/deleted/'.$blog['id'])}}">
        <button class="btn">Xóa</button>
    </a>
    <br>

@endforeach
