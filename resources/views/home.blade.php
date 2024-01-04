@extends('dashboard')
@section('content')

<style>
    .content {
        margin-top: 90px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    main {
        display: grid;
        place-items: center;
        background: #FFC436;
        width: 700px;
        height: 400px;
        border-radius: 7px;
        box-shadow: 0 4px 8px rgba(69, 71, 75, 0.5);
        background: linear-gradient(45deg, #FFC436, #0C356A);
    }

    main img {
        width: 200px;
        height: 200px;
        margin: 0 auto;
        border-radius: 100%;
        box-shadow: 15px 10px 5px rgba(15, 15, 15, 0.3);
    }

    h5 {
        margin: 5px;
        font-size: 18px;
        text-align: center;
    }
</style>
<div class="content">
    <main>
        <img src="{{asset ('images/kazuha.jpeg')}}" alt="my picture" class="pict">
        
        <div>
            <p style="font-size: 9px; text-align:center"><i>*pict hanya pemanis hehe</i></p>
            <h5><i>Holla!</i> My name is William Juvent</h5>
            <h5>i'm 5th semester software engineer student</h5>
            <h5>i'm also cyber security enthusiast</h5>
        </div>
        <div style="margin: 3px; ">
            <a href="{{url('about')}}" style="text-decoration: none; color: #000; transition: color 0.3s"><u>Baca selengkapnya >>></u></a>
        </div>
    </main>
</div>

@endsection