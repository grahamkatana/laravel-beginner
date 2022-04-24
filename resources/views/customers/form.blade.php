<div class ="form-group">
<label for="name">Name:</label>
<input type="text" name="name" placeholder="Enter name here" value="{{old('name')??$customer->name}}" class="form-control">
<div>{{$errors->first('name')}}</div>
</div>

<div class="form-group">
<label for="email">Email:</label>
<input type="text" name="email" placeholder="Enter email here" value="{{old('email')??$customer->email}}" class="form-control"> 
<div>{{$errors->first('email')}}</div>
</div>

<div class=form-group"">
<label for="active">Status</label>
<select name="active" id="active" class="form-control">
<option value="" disabled>Select customer status</option>
@foreach($customer->activeOptions() as $activeOptionKey=>$activeOptionValue)
<option value="{{$activeOptionKey}}" {{$customer->active==$activeOptionValue?'selected':''}}>{{$activeOptionValue}}</option>
@endforeach
</select>


<div class=form-group"">
<label for="company-id">Company</label>
<select name="company_id" id="active" class="form-control">
@foreach ($companies as $company)
<option value="{{$company->id}}">{{$company->name}}</option>
@endforeach

</select>

</div>
<p></p>
<div>
{{$errors->first('active')}}
</div>

<div class="form-group d-flex flex-column">
<label for="image">Profile Picture</label>
<input type="file" name="image" class="py-3">
<div>{{$errors->first('image')}}</div>
</div>

@csrf