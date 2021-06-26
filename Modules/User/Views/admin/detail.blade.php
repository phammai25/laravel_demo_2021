<form action="{{url('/admin/user/edit/'.$user['id'])}}">
    <input type="text" name="first_name" value="<?php echo $user['first_name'] ?>">
    <input type="text" name="email" value="<?php echo $user['email'] ?>">
    <button type="submit" class="btn">Save</button>
</form>
