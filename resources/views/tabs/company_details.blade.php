<form method="POST" action="{{ route('system-settings.update') }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="ui search focus lbel25 mt-30">
        <label for="logo">Company Logo</label>
        <input type="file" class="prompt srch_explore" id="logo" name="logo">
    </div>

    <div class="course_des_textarea mt-30 lbel25">
        <label for="contact_info">Company Contact Info</label>
        <textarea class="form_textarea_1 ht-4" id="contact_info" name="contact_info" rows="3"></textarea>
    </div>

    <div class="ui search focus lbel25 mt-30">
        <label for="commission_percentage">Commission Percentage</label>
        <input type="text" class="prompt srch_explore" id="commission_percentage" name="commission_percentage">
    </div>

    <button type="submit" class="btn btn-primary mt-30">Submit</button>
</form>
