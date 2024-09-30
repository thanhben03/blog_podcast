@push('css')
    <style>
        .card-custom {
            border: none;
            background-color: #8d8d8d;
            background: url("/assets/bacnguyen/banner/horizontal/slide-01.jpg");
            border-radius: 10px;
            padding: 1.5rem;
            background-size: cover;
            background-position: center;
        }
        .news-img {
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
        }
        .news-title {
            font-size: 1.8rem;
            font-weight: bold;
            color: #fff;
        }
        .badge-custom {
            background-color: #ff5a5f;
            font-size: 0.9rem;
        }
        .audio-controls {
            margin-top: 15px;
            display: flex;
            align-items: center;
            color: white;
        }
        .audio-controls button, .audio-controls span {
            margin-right: 10px;
        }
        .audio-progress {
            flex-grow: 1;
        }
        .audio-progress input {
            width: 100%;
        }
    </style>
@endpush
<div class="container mt-4">
    <div class="card card-custom">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://cdn.tuoitre.vn/zoom/250_250/471584752817336320/2024/9/30/photo1727667865193-1727667865291583625804.png" alt="News Image" class="img-fluid card-img-left">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <span class="badge bg-danger mb-2">Tin Nhanh Mới Ngày</span>
                    <h5 class="news-title">Việt Nam phải chi gần 1 tỉ USD để nhập khẩu gạo</h5>
                    <audio controls>
                        <source src="https://cdn.tuoitre.vn/471584752817336320/2024/9/30/untitled-session-1mixdown-1727667541010349907895.mp3" type="audio/ogg">
                    </audio>
                </div>
            </div>
        </div>
    </div>
</div>
