@extends ('dashboard')
@section('content')

<style>
    .main {
        width: 600px;
        height: 500px;
        border-radius: 7px;
        box-shadow: 0 4px 8px rgba(69, 71, 75, 0.5);
        background: linear-gradient(45deg, #FFC436, #0174BE);
        margin: 0 auto;
        margin-top: 80px;
        padding: 25px;
    }

    .bottom {
        padding-top: 200px;
        display: flex;
        align-items: center;
        justify-content: center;

    }

    i {
        padding: 5px;
        color: #0C356A;

    }

    a {
        padding: 5px;
        padding-right: 15px;
        color: #0C356A;
    }

    img {
        width: 75px;
        height: 75px;
        border-radius: 100%;
    }

    .top {
        display: grid;
        place-items: center;
    }

    p {
        width: 400px;
        overflow: hidden;
        text-align: center;
    }
</style>
<div class="main">
    <div class="top">
        <img src="{{url('images/s1.jpg')}}" alt="">
        <p>Hello guys, if you have a message for me you can just send me anonymous below (or just wanna give me some advice for my website lol)</p>
        <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color:#0C356A; color:aliceblue">
            Send me Something
        </button>
    </div>


    <div class="bottom ">
        <i class="fa-brands fa-instagram fa-2xl"></i>
        <a href="https://www.instagram.com/williamjvnt/?hl=id">williamjvnt</a>
        <br>
        <i class="fa-brands fa-linkedin fa-2xl"></i>
        <a href="">William Juvent</a>
        <br>
        <i class="fa-brands fa-github fa-2xl"></i>
        <a href="https://github.com/williamjvnt">williamjvnt</a>
    </div>

</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Send me Something</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="color: aliceblue;">Close</button>
                <button type="button" class="btn btn-primary" style="background-color:#0C356A; color:aliceblue">Save changes</button>
            </div>
        </div>
    </div>
</div>

@endsection