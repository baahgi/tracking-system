<x-app-layout>

    @push('styles')
    <link rel="stylesheet" href="{{asset('css/datatables/select2.min.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/datatables/select2-bootstrap4.min.css')}}"> --}}
    @endpush
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
        <div class="mb-2 row">
            <div class="col-sm-6">
            <h1>Add Customer</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">add customer</a></li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>

{{-- @if ($errors->any())
    @foreach ($errors->all() as $error)
        {{$error}}
    @endforeach
@endif --}}

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="col-md-8 offset-md-2">

                    @include('layouts.partials.session')
                    <!-- general form elements -->
                    <div class="card card-default">
                      <div class="card-header">
                        <h3 class="card-title">Customer Details</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form method="POST" action="{{ route('customer.store') }}">

                        @csrf

                        <div class="card-body">


                        <div class="row">
                            <div class="form-group col-md-12">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}">
                                @error('name')
                                    <span class="text-sm text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label for="company_name">Company Name</label>
                                <input type="text" class="form-control @error('company_name') is-invalid @enderror" id="company_name" name="company_name" value="{{ old('company_name') }}">
                                @error('company_name')
                                    <span class="text-sm text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-12">
                                <label for="email">Email</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="text-sm text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-12">
                                <label for="password">Password</label>
                                <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                                @error('password')
                                    <span class="text-sm text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group col-md-12">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="text" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" name="password_confirmation">
                                @error('password_confirmation')
                                    <span class="text-sm text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-12">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="text-sm text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group col-md-12">
                                <label for="address">Address</label>
                                <textarea name="address" id="address" class="form-control @error('phone') is-invalid @enderror" cols="10" rows="3"> {{ old('address') }}</textarea>
                                @error('address')
                                    <span class="text-sm text-danger">{{$message}}</span>
                                @enderror
                            </div>

                        </div>


                        <div class="card-footer">

                                <div class="col-md-4" >
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                      </form>
                    </div>
                    <!-- /.card -->



                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- /.content -->

    @push('scripts')

        <script src="{{ asset('js/datatables/select2.full.min.js') }}"></script>
        <script>
              $(function () {

                $('.select2').select2()
              })
        </script>
    @endpush
</x-app-layout>
