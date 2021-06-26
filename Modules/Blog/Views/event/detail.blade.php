<form action="{{url('/blog/event/edit/'.$blog['id'])}}">
    <input type="text" name="title" value="<?php echo $blog['title'] ?>">
    <input type="text" name="content" value="<?php echo $blog['content'] ?>">
    <button type="submit" class="btn">Save</button>
</form>
