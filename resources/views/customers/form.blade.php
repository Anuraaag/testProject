@csrf
    <div class="form-group mt-4">
        <label for="name">Name</label>
        <input class="form-control" id="name" placeholder="John" name="name" value="{{ old('name') ?? $customer->name }}" required>
        <div class="text-danger">{{ $errors->first('name')}}</div>
    </div>

    <div class="form-group mt-4">
        <label for="email">Email address</label>
        <input type="email" class="form-control" name="email" id="email"  value="{{ old('email') ?? $customer->email }}" placeholder="example@domain.com" required>
        <div class="text-danger">{{ $errors->first('email')}}</div>
    </div>

    <div class="form-group mt-4">
        <label for="company">Company</label>
        <select class="form-control" id="company_id" name="company_id" value="{{ old('company_id') ?? $customer->company_id }}" required>
            <option selected disabled>Select Company</option>
            @foreach($companies as $company)
                <option value="{{ $company->id}}" {{ $company->id == $customer->company_id ? 'selected' : '' }}> {{ $company->name}} </option>
            @endforeach
        </select>
        <div class="text-danger">{{ $errors->first('company_id')}}</div>
    </div>

    <div class="form-group mt-4">
        <label for="category">Category</label>
        <select class="form-control" id="category" name="category" required>
            <option selected disabled>Select Category</option>
            @foreach($customer->categoryOptions() as $categoryOptionKey => $categoryOptionValue)
                <option value="{{ $categoryOptionKey }}" {{ $customer->category == $categoryOptionValue ? 'selected' : "" }} >{{ $categoryOptionValue }}</option>
            @endforeach
        </select>
        <div class="text-danger">{{ $errors->first('category')}}</div>
    </div>

