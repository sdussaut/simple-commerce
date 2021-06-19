@extends('statamic::layout')
@section('title', 'Create Tax Rate')
@section('wrapper_class', 'max-w-xl')

@section('content')
    <form action="{{ cp_route('simple-commerce.tax-rates.store') }}" method="POST">
        @csrf

        <header class="mb-3">
            <div class="flex items-center justify-between">
                <h1>Create Tax Rate</h1>
                <button type="submit" class="btn-primary">Save</button>
            </div>
        </header>

        <div class="publish-form card p-0 flex flex-wrap">
            <div class="form-group w-full">
                <label class="block mb-1">Name</label>
                <input type="text" name="name" autofocus="autofocus" class="input-text">
            </div>

            <div class="form-group w-full">
                <label class="block mb-1">Rate %</label>
                <input type="number" name="rate" class="input-text">
            </div>

            <div class="form-group w-full">
                <label class="block mb-1">Tax Category</label>
                <select name="category" class="input-text">
                    @foreach($taxCategories as $taxCategory)
                        <option value="{{ $taxCategory->id() }}">{{ $taxCategory->name() }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group w-full">
                <label class="block mb-1">Country</label>
                <select name="country" class="input-text">
                    @foreach($countries as $country)
                        <option value="{{ $country['iso'] }}">{{ $country['name'] }}</option>
                    @endforeach
                </select>
            </div>

            <!-- TODO: state -->
        </div>
    </form>
@endsection
