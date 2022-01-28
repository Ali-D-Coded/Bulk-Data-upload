@extends('layout.layouts')
@section('content')
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="container-sm ">
                <p>{{ session('status') }}</p>

                <form action="{{ route('uploadcards') }}" enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('file') ? 'has-error' : '' }}">
                        <label for="formFile" class="form-label">Select cards to upload</label>

                        {{-- <div class="form-group p-5 d-flex p-2 bd-highlight"> --}}
                            <input class="form-control d-inline-flex p-2 bd-highlight" type="file" id="file" name="file" required>
                        {{-- </div> --}}
                        @if ($errors->has('file'))
                        <span class="help-block">
                            <strong>{{ $errors->first('file') }}</strong>
                        </span>
                        @endif

                    </div>
                        <p>
                            <button class="btn btn-primary " type="submit">
                                <i class="fa fa-upload">Upload</i>
                            </button>
                        </p>
                </form>


              </div>
        </div>
  @endsection
