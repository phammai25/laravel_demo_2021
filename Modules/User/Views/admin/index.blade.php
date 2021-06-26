<form id="search_user">
    <div>
        <input type="text" id="search" name="search" placeholder="Tìm kiếm theo tên hoặc Email">
        <button action="submit" class="btn" >Tìm kiếm</button>
    </div>
</form>



@foreach ($users as $k => $user)
    STT : {{$k + 1}}
    <a href="{{url('/admin/user/detail/'.$user['id'])}}">
        Ten : {{$user['first_name']}}
        <br>
        Email : {{$user['email']}}
    </a>
    <br>
@endforeach
