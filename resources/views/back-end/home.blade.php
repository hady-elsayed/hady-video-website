    @extends('back-end.layout.app')

    @section('title')
        Home page
        @endsection

    @push('css')
        <style>
            a{
                color: red !important;
            }
        </style>
    @endpush

    @section('content')

        @component('back-end.layout.header',['nav_title'=>'Home page'])


            @endcomponent

        <h1>hello it's the home page</h1>

        @endsection

    @push('js')
        <script>
            alert('welcome')
        </script>
    @endpush