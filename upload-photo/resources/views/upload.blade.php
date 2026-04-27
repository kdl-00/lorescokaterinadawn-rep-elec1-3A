<!DOCTYPE html>
<html>

<head>
    <title>Photo Studio Upload</title>

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #1e1e2f, #2b2b45);
            color: #fff;
        }

        .container {
            max-width: 1000px;
            margin: auto;
            padding: 40px 20px;
        }

        h1 {
            font-weight: 600;
            letter-spacing: 1px;
            margin-bottom: 15px;
        }

        .card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            padding: 20px;
            margin-bottom: 25px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.3);
        }

        input[type="file"] {
            width: 100%;
            padding: 12px;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 10px;
            color: #fff;
        }

        button {
            margin-top: 10px;
            padding: 10px 18px;
            border: none;
            border-radius: 10px;
            background: linear-gradient(135deg, #ff6a00, #ee0979);
            color: white;
            cursor: pointer;
            transition: 0.3s;
        }

        button:hover {
            transform: scale(1.05);
            opacity: 0.9;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 15px;
        }

        .photo {
            background: rgba(255, 255, 255, 0.08);
            border-radius: 12px;
            padding: 10px;
            text-align: center;
            transition: 0.3s;
        }

        .photo:hover {
            transform: translateY(-5px);
        }

        img {
            width: 100%;
            border-radius: 10px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .delete-btn {
            background: transparent;
            border: 1px solid #ff4d4d;
            color: #ff4d4d;
            padding: 6px 10px;
            font-size: 12px;
            margin-top: 8px;
        }

        .delete-btn:hover {
            background: #ff4d4d;
            color: #fff;
        }

        .alert-success {
            background: rgba(0, 255, 150, 0.15);
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 15px;
            color: #00ffb3;
        }

        .error-box {
            background: rgba(255, 0, 0, 0.15);
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 15px;
            color: #ff6b6b;
        }

        .pagination {
            margin-top: 20px;
            color: #fff;
        }
    </style>
</head>

<body>

    <div class="container">

        @if(session('success'))
        <div class="alert-success">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
        <div class="error-box">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <div class="card">
            <h1>Single Upload</h1>
            <form action="{{ route('photos.store.single') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="image" required>
                <button type="submit">Upload</button>
            </form>
        </div>


        <div class="card">
            <h1>Multiple Upload</h1>
            <form action="{{ route('photos.store.multiple') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="images[]" multiple required>
                <button type="submit">Upload</button>
            </form>
        </div>


        <div class="card">
            <h1>Gallery</h1>

            @if($photos->count() > 0)
            <div class="gallery">
                @foreach($photos as $photo)
                <div class="photo">
                    <img src="{{ asset('images/' . $photo->image) }}">

                    <form action="{{ route('photos.destroy', $photo->id) }}"
                        method="POST"
                        onsubmit="return confirm('Delete this photo?')">
                        @csrf
                        @method('DELETE')
                        <button class="delete-btn">Delete</button>
                    </form>
                </div>
                @endforeach
            </div>

            <div class="pagination">
                {{ $photos->links() }}
            </div>

            @else
            <p>No images uploaded yet.</p>
            @endif
        </div>

    </div>

</body>

</html>