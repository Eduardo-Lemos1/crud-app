@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Posts') }}</div>

                <div class="card-body">

                    @if ($data->id == "")
                        <form method="POST" action="{{ route('post.store') }}">
                    @else
                        <form method="POST" action="{{ route('post.update',$data) }}">
                        @method('PUT')
                    @endif

                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">
                                {{ __('Name') }}
                            </label>

                            <div class="col-md-6">
                                <input id="name" type="text" 
                                    class="form-control @error('name') is-invalid @enderror" name="name" 
                                    value="{{ old('name', $data->name) }}" 
                                    autofocus>

                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">
                                {{ __('Address') }}
                            </label>

                            <div class="col-md-6">
                                <input id="address" type="text" 
                                    class="form-control @error('address') is-invalid @enderror" name="address" 
                                    value="{{ old('address', $data->address) }}" >

                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">
                                {{ __('Phone') }}
                            </label>

                            <div class="col-md-6">
                                <input id="phone" type="text" 
                                    class="form-control phone @error('phone') is-invalid @enderror" name="phone" 
                                    value="{{ old('phone', $data->phone) }}" >

                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="birth_date" class="col-md-4 col-form-label text-md-end">
                                {{ __('Birth date') }}
                            </label>

                            <div class="col-md-6">
                                <input id="birth_date" type="date" 
                                    class="form-control @error('birth_date') is-invalid @enderror" name="birth_date" 
                                    value="{{ old('birth_date',$data->birth_date == "" ? "" : $data->birth_date->format('Y-m-d')) }}" >

                                @error('birth_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="age" class="col-md-4 col-form-label text-md-end">
                                {{ __('Age') }}
                            </label>

                            <div class="col-md-6">
                                <input id="age" type="text" 
                                    class="form-control age @error('age') is-invalid @enderror" name="age" 
                                    value="{{ old('age', $data->age) }}" >

                                @error('age')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="registration_date" class="col-md-4 col-form-label text-md-end">
                                {{ __('Registration date') }}
                            </label>

                            <div class="col-md-6">
                                <input id="registration_date" type="date" 
                                    class="form-control @error('registration_date') is-invalid @enderror" 
                                    name="registration_date" 
                                    value="{{ old('registration_date',$data->registration_date == "" ? "" : $data->registration_date->format('Y-m-d')) }}" >

                                @error('registration_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>

                                <a class="btn btn-secondary" href="{{route('post.create')}}">
                                    {{__('New Post')}}
                                </a>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
