@extends('layouts.main')

@section('title', 'Contact App | Add New Contact')

@section('contents')
<main class="py-5">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header card-title">
                        <strong>Add New Contact</strong>
                    </div>

                    <form action="{{ route('contacts.store') }}" method="post">
                        @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group row">
                                    <label
                                        for="name"
                                        class="col-md-3 col-form-label"
                                        >Name</label
                                    >
                                    <div class="col-md-9">
                                        <input
                                            type="text"
                                            name="name"
                                            id="name"
                                            class="form-control"
                                        />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label
                                        for="email"
                                        class="col-md-3 col-form-label"
                                        >Email</label
                                    >
                                    <div class="col-md-9">
                                        <input
                                            type="text"
                                            name="email"
                                            id="email"
                                            class="form-control"
                                        />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label
                                        for="phone"
                                        class="col-md-3 col-form-label"
                                        >Phone</label
                                    >
                                    <div class="col-md-9">
                                        <input
                                            type="text"
                                            name="phone"
                                            id="phone"
                                            class="form-control"
                                        />
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label
                                        for="company"
                                        class="col-md-3 col-form-label"
                                        >Company</label
                                    >
                                    <div class="col-md-9">
                                        <input
                                            type="text"
                                            name="company"
                                            id="company"
                                            class="form-control"
                                        />
                                    </div>
                                </div>

                                <hr />
                                <div class="form-group row mb-0">
                                    <div class="col-md-9 offset-md-3">
                                        <button
                                            type="submit"
                                            class="btn btn-primary"
                                        >
                                            Save
                                        </button>
                                        <a
                                            href="{{ route('contacts.index') }}"
                                            class="btn btn-outline-secondary"
                                            >Cancel</a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection