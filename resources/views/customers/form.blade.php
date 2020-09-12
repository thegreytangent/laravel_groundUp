
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" name="name" class="form-control" value="{{old('name') ?? $customer->name}}" placeholder="Name">
  </div>

  <div class="form-group">
    <label for="name">Email:</label>
    <input type="text" name="email" value="{{old('email') ?? $customer->email}}" class="form-control" placeholder="Email">
  </div>

  <div class="form-group">
    <label for="name">Status: </label>
    <select class="form-control" name="active" value="{{old('status') ?? $customer->status}}">
      <option value="" disabled>Select customer status</option>
      <option value="1">Active</option>
      <option value="0">Inactive</option>
    </select>
  </div>

  <div class="form-group">
    <label for="name">Companies: </label>
    <select class="form-control" name="company_id" value="{{$customer->company_id}}">
      @foreach ($companies as $company)
        <option value="{{$company->id}}">{{$company->name}}</option>
      @endforeach

    </select>
  </div>

  @csrf
