@extends('admin.layouts.app')
@push('styles_top')
    <link rel="stylesheet" href="/assets/vendors/summernote/summernote-bs4.min.css">
@endpush
@push('libraries_top')
@endpush

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>{{ !empty($jobs) ? 'Edit job post' : 'Add job post' }}
            </h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ getAdminPanelUrl() }}">{{ trans('admin/main.dashboard') }}</a>
                </div>
                <div class="breadcrumb-item"><a>Jobs</a>
                </div>
                <div class="breadcrumb-item">{{ !empty($jobs) ? 'Update' : 'New' }}</div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 ">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 ">
                                    <form
                                        action="{{ getAdminPanelUrl() }}/custom/{{ !empty($jobs) ? $jobs->id . '/update' : 'store' }}"
                                        method="Post">
                                        {{ csrf_field() }}

                                        <div class="form-group">
                                            <label>Title</label>
                                            <input type="text" name="title"
                                                class="form-control  @error('title') is-invalid @enderror"
                                                value="{{ !empty($jobs) ? $jobs->title : old('title') }}"
                                                placeholder="Title for your job post" />
                                            @error('title')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input type="text" name="location"
                                                class="form-control  @error('location') is-invalid @enderror"
                                                value="{{ !empty($jobs) ? $jobs->location : old('location') }}"
                                                placeholder="Job location" />
                                            @error('location')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group mt-15">
                                            <label class="input-label">Description</label>
                                            <textarea id="summernote" name="description"
                                                class="summernote form-control @error('description')  is-invalid @enderror">{!! !empty($jobs) ? $jobs->description : old('description') !!}</textarea>
                                            @error('description')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>{{ trans('/admin/main.status') }}</label>
                                            <select class="form-control @error('status') is-invalid @enderror"
                                                id="status" name="status">
                                                <option disabled selected>{{ trans('admin/main.select_status') }}</option>
                                                @foreach (\App\User::$statuses as $status)
                                                    <option value="{{ $status }}"
                                                        {{ (!empty($jobs) && $jobs->status == $status) || old('status') === $status ? 'selected' : '' }}>
                                                        {{ $status }}</option>
                                                @endforeach
                                            </select>
                                            @error('status')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                        <div class="text-right mt-4">
                                            <button class="btn btn-primary">{{ trans('admin/main.submit') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('scripts_bottom')
    <script src="/assets/vendors/summernote/summernote-bs4.min.js"></script>
@endpush
