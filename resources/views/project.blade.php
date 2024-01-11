@extends ('dashboard')
@section('content')
<style>
    main {
        margin: 0 auto;
        width: 800px;
        height: 500px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 7px;
        margin-top: 50px;

        box-shadow: 0 4px 8px rgba(69, 71, 75, 0.5);
        background: linear-gradient(45deg, #FFC436, #596FB7);
    }

    main video {
        width: 250px;
        height: auto;

    }

    h1 {
        margin-top: 30px;
        text-align: center;
    }

    /* Responsive */
    @media screen and (max-width: 700px) {
        main {
            margin: 0 auto;
            width: 300px;
            margin-top: 20px;
        }

    }
</style>
<div>
    <h1>My Current Video</h1>
    <main>
        <video controls src="{{url('videos/video.mp4')}}"></video>
    </main>
</div>

@endsection