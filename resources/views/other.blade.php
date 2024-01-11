@extends ('dashboard')
@section('content')
<style>
    main {
        margin: 0 auto;
        width: 500px;
        height: 500px;
        display: flex;
        align-items: center;
        justify-content: center;

    }

    /* Responsive */
    @media screen and (max-width: 700px) {
        main {
            margin: 0 auto;
            width: 300px;
            margin-top: 120px;
        }

    }
</style>
<div>
    <main>
        <h1>Coming Soon</h1>
    </main>
</div>

@endsection