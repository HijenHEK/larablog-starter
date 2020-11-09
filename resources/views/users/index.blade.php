@extends('layouts.app')

@section('content')



<section class="dashboard">

    <h1>Dashboard : {{Auth::user()->name}}</h1>
    <table>
        <tr>
            <td>
                #id
            </td>
            <td>
                name
            </td>
            <td>
                roles
            </td>
            <td>
                email
            </td>
            <td>
                created at
            </td>
            <td>
                posts
            </td>
            <td>
                actions
            </td>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>
                    {{$user->id}}
                </td>
                <td>
                    {{$user->name}}

                </td>
                <td>
                    @foreach ($user->roles as $role)
                        <span>{{$role->name}}</span>
                    @endforeach

                </td>
                <td>
                    {{$user->email}}

                </td>
                <td>
                    {{$user->created_at->diffForHumans()}}

                </td>
                <td>
                    {{$user->posts->count()}}

                </td>
                <td>
                    <a class="btn btn-success" href="#">Edit</a>
                    <a class="btn btn-danger" href="#">delete</a>

                </td>
            </tr>
        @endforeach
    </table>

</section>


    @include('layouts.partials.footer')

@endsection
