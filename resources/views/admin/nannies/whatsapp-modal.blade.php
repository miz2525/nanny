<p>Sent WhatsApp messages to {{$nanny->first_name}} {{$nanny->family_name}}</p>
<hr>
<div class="mb-3">
    <label for="message-one-text" class="form-label">Message 1</label>
    <textarea class="form-control mb-2" id="message-one-text" rows="3">Hi {{$nanny->first_name}} {{$nanny->family_name}} - this is John from NannyGenie. Are you still available for a job with NannyGenie?</textarea>
    <a href="javascript:;" type="button" class="btn btn-outline-primary btn-sm waves-effect waves-light" onclick="send_whatsapp_message(1)">Send this to {{$nanny->first_name}} {{$nanny->family_name}} via WhatsApp</a>
</div>
<hr>
<div class="mb-3">
    <label for="message-two-text" class="form-label">Message 2</label>
    <textarea class="form-control mb-2" id="message-two-text" rows="3">Hi {{$nanny->first_name}} {{$nanny->family_name}} - this is John from NannyGenie. This is your profile on our website: {{route('nanny.profile', $nanny->id)}}</textarea>
    <a href="javascript:;" type="button" class="btn btn-outline-primary btn-sm waves-effect waves-light" onclick="send_whatsapp_message(2)">Send this to {{$nanny->first_name}} {{$nanny->family_name}} via WhatsApp</a>
</div>
<input type="hidden" name="nanny_phone_number" id="nanny_phone_number" value="{{$nanny->phone_number}}">

