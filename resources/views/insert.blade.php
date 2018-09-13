@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
<div id="jsErrorDiv"></div>
<form method="post" action="{{ route('index') }}" enctype="multipart/form-data" id="form">
    @csrf
    <div class="form-group">
        <label for="name">{{ Lang::get('ru.name') }}:</label>
        <input type="text" name="name" class="form-control" id="name" placeholder="{{ old('name') }}">
    </div>

    <div class="form-group">
        <label for="category">{{ Lang::get('ru.category') }}:</label>
        <select name="category" class="form-control" id="category">
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="supplier">{{ Lang::get('ru.supplier') }}:</label>
        <select name="supplier" class="form-control" id="supplier">
            @foreach($suppliers as $supplier)
                <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="img">{{ Lang::get('ru.image') }}:</label>
        <input type="file" name="img" class="form-control" id="img">
    </div>

    <button type="submit" class="btn btn-default" id="save">{{ Lang::get('ru.save') }}</button>
</form>