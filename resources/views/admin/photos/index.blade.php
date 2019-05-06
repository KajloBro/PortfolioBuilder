@extends('layouts.admin')

@section('content')

<div class="container-fluid mt-3">
    <div class="row text-center">
        <div class="col-12">
            <h3>My Photos</h3>
        </div>
    </div>

    <table class="table table-dark">
        <thead>
            <tr>
                <th>ID</th>
                <th>Photo</th>
                <th>Logo Photo</th>
                <th>Show at home</th>
                <th>Save</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($photos as $photo)
                <form action="{{ route('photos.update', ['id' => $photo->id]) }}" method="POST">
                    @method('PATCH')
                    @csrf
                    <tr>
                        <td>{{ $photo->id }}</td>
                        <td><img src="{{ asset($photo->small) }}" alt="" class="table_small_pic"></td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="" name="is_logo" id="is_logo_{{ $photo->id }}" value="is_logo_{{ $photo->id }}" {{ $photo->is_logo == 1 ? "checked" : "" }}>
                            </div>
                        </td>
                        <td>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="show_at_home_{{ $photo->id }}" id="show_at_home_{{ $photo->id }}" {{ $photo->show_at_home == 1 ? "checked" : "" }}>
                            </div>
                        </td>
                        <td>
                            {{-- <form action="{{ route('photos.destroy', ['id' => $photo->id]) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                            </form> --}}
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td><input type="submit" class="btn btn-primary" value="Save"></td>
                </tr>
            </tbody>
        </table>
    </form>

</div>

@endsection
