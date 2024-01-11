@extends ('dashboard')
@section('content')

<style>
    .main {
        width: 600px;
        height: 400px;
        border-radius: 7px;
        box-shadow: 0 4px 8px rgba(69, 71, 75, 0.5);
        background: linear-gradient(45deg, #FFC436, #0174BE);
        margin: 0 auto;
        margin-top: 80px;
        padding: 25px;
    }

    .bottom {
        padding-top: 100px;
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

    /* Responsive */
    @media screen and (max-width: 700px) {
        .main {
            margin: 0 auto;
            width: 300px;
            height: 200px;
            height: auto;
            margin-top: 120px;
        }

        p {
            width: 250px;
            overflow: hidden;
            text-align: center;
        }

        .top {
            margin-bottom: 50px;
        }

        .bottom {
            width: 250px;
            display: inline;
            align-items: center;

        }

        .bottom i,
        .bottom a {
            margin-bottom: 15px;
        }

    }
</style>
<div class="main">
    <div class="top">
        <img src="{{url('images/s1.jpg')}}" alt="">
        <p>Hello guys, if you have a message for me you can just send me anonymous below (or just wanna give me some advice for my website lol)</p>
        <button type="button" class="btn mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color:#0C356A; color:aliceblue">
            Send me Something
        </button>
    </div>


    <div class="bottom">
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
            <div class="modal-header" style="background-color: #0C356A;">
                <h1 class="modal-title fs-5" id="exampleModalLabel" style="color: aliceblue;">Send me Something</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{route('resp.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Email(if you wanna get me to reply):</label>
                        <input type="text" class="form-control" id="recipient-name" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text" name="respon" required></textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="color: aliceblue;">Close</button>
                        <button type="submit" class="btn btn-primary" style="background-color:#0C356A; color:aliceblue" id="liveToastBtn">Save changes</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- toast -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header" style="background-color: #0C356A;">
            <strong class="me-auto">Berhasil!</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Your message already sended!
        </div>
    </div>
</div>
@endsection