<form action="{{url('/blog/event/created/')}}">
    Tiêu đề:
    <input type="text" name="title" value="" id="title">
    <br>
    <br>
    Nội dung:
    <input type="text" name="content" value="" id="content">
    <br>
    <br>
    Trạng thái:
    <select name="status" >
        <option value="1" >Hoạt động</option>
        <option value="0">Nháp</option>
        </select>

    <button type="submit" class="btn">Save</button>
</form>
