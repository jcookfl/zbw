<input type="hidden" name="to" value="{{$message->from}}">
<input type="hidden" name="history" value="{{$message->content}}">
<div class="input-group">
    <span>Forget History? </span><input name="forget_history" value="forget" type="checkbox" class="checkbox-inline">
</div>
<div class="input-group">
    <label for="cc">CC <span class="text-muted">(initials, comma separated)</span> :</label>
    <input class="form-control" type="text" name="cc" id="cc">
    <div style="vertical-align: bottom" class="input-group-btn">
        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Users <span class="caret"></span></button>
        <ul id="userlist" class="dropdown-menu pull-right">
            @foreach($users as $user)
            <li data-name="{{$user->first_name . ' ' . $user->last_name}}" data-initials="{{$user->initials}}">{{$user->first_name . ' ' . $user->last_name . ' ('.$user->initials.')'}}</li>
            @endforeach
        </ul>
    </div>
</div>
    <label for="subject">Subject</label>
    <input class="form-control" type="text" name="subject" id="subject" value="re: {{$message->subject}}">
    <label for="message">Message</label>
    <textarea class="editor" name="content"></textarea>
<button type="submit" class="btn btn-primary">Send</button>