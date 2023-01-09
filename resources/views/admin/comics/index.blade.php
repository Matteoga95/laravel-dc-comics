@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{route('comics.create')}}" class="btn btn-primary">Add Comic Book</a>
</div>


<div class="container">
    <div class="table-responsive">
        <table class="table table-striped
    table-hover	
    table-borderless
    table-primary
    align-middle">
            <thead class="table-light">

                <tr>
                    <th>Name</th>
                    <th>Code</th>
                    <th>Image</th>
                    <th>actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">

                @forelse($comics_list as $comic)
                <tr class="table-primary">
                    <td><img src="{{$comic->thumb}}" alt=""></td>
                    <td scope="row">{{$comic->title}}</td>
                    <td>{{$comic->description}}</td>

                </tr>
                @empty
                <tr>
                    <td>
                        <p>
                            😗 Sorry no products in this store yet!
                        </p>
                        ì
                    </td>
                </tr>


                @endforelse;

            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
</div>



@endsection