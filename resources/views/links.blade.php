
@extends('_layout')


    @section('body')
    <a style="text-decoration: none;" href="{{route('bitlinks.create')}}">  <button  class="btn btn-warning">the Create Page</button></a>
    <div class="container" >
        <table class="table table-dark table-striped">
            <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Link</th>
                    <th scope="col">code</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($Links as $Link)
                    <tr>

                        <td>{{$Link->id}}</td>
                        <td><a href={{$Link->Link}}>{{$Link->Link}}</a></td>
                        <td> <a href={{$Link->Link}}>http://localhost:8000/bitlinks/{{$Link->code}}</a></td>
                      </tr>
                    @endforeach



                </tbody>
              </table>
            </div>
            @endsection


