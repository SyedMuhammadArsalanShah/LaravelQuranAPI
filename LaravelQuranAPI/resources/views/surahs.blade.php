{{-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mushaf</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Aref+Ruqaa&display=swap" rel="stylesheet">
    <style>
         body {
            direction: rtl;
        }
        td {
            font-family: 'Amiri Quran', serif;

        }
    </style>

</head>

<body>

    <div class="container">


        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Surah Name</th>
                    <th scope="col">Surah Name Meaning</th>
                    <th scope="col">Surah English Name</th>
                    <th scope="col">Verses</th>
                    <th scope="col">RevealationType</th>
                    <th scope="col">ReadSurah
                    </th>
                </tr>
            </thead>
            <tbody>



                @foreach ($collection as $item)
                    <tr>

                        <td>{{ $item['number'] }} </td>
                        <td>{{ $item['name'] }} </td>
                        <td>{{ $item['englishNameTranslation'] }} </td>
                        <td>{{ $item['englishName'] }} </td>
                        <td>{{ $item['numberOfAyahs'] }} </td>
                        <td>{{ $item['revelationType'] }} </td>
                        <td><button type="button" class="btn btn-light"><a href="/read/{{ $item['number'] }}"
                                    target="_blank" rel="noopener noreferrer">ReadSurah</a></button></td>


                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html> --}}
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mushaf</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Aref+Ruqaa&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/fontawesome.min.css"
        integrity="sha512-KVdV5HNnN1f6YOANbRuNxyCnqyPICKUmQusEkyeRg4X0p8K1xCdbHs32aA7pWo6WqMZk0wAzl29cItZh8oBPYQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            direction: rtl;
        }

        .card-body,
        .product-content,
        h3,
        div {
            font-family: 'Amiri Quran', serif;
        }

        a {
            text-decoration: none
        }

        .product-grid {
            background-color: #f7f3f3;
            border: 1px solid #0000000F;
            font-family: "Lora", serif;
            padding: 10px 10px;
            text-align: center;
            transition: all 0.3s ease 0s;
            border-radius: 20px;
        }

        .product-grid .product-image {
            overflow: hidden;
            position: relative;
        }

        .product-grid .product-image a.image {
            display: block;
        }

        .product-grid .product-image img {
            width: 100%;
            height: 250px;
            border-radius: 15px;
        }

        .product-grid .product-image .pic-1 {
            transition: all 0.5s ease 0s;
        }

        .product-grid:hover .product-image .pic-1 {
            opacity: 0;
        }

        .product-grid .product-image .pic-2 {
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            opacity: 0;
            position: absolute;
            top: 0;
            left: 0;
            transition: all 0.5s ease 0s;
        }

        .product-grid:hover .product-image .pic-2 {
            opacity: 1;
        }

        .product-grid .product-discount-label {
            color: #fff;
            background-color: #c1890f;
            font-size: 13px;
            padding: 2px 5px 1px;
            border-radius: 0 6px 6px 0;
            position: absolute;
            left: 0;
            top: 10px;
        }

        .product-grid .product-content {
            padding: 12px 0;
            position: relative;
        }

        .product-grid .rating {
            color: #999;
            font-size: 11px;
            padding: 0;
            margin: 0 0 10px;
            list-style: none;
        }

        .product-grid .rating li.fas {
            color: #fcb900;
        }

        .product-grid .title {
            font-size: 18px;
            font-weight: 700;
            text-transform: capitalize;
            margin: 0 0 13px;
        }

        .product-grid .title a {
            color: #000;
            transition: all 0.3s ease 0s;
        }

        .product-grid .title a:hover {
            color: #f26b0e;
        }

        .product-grid .price {
            color: #6d9c19;
            /* font-family: "Barlow", sans-serif; */
            font-size: 17px;
            font-weight: 700;
            margin: 0 0 10px;
        }

        .product-grid .price span {
            color: #949494;
            text-decoration: line-through;
            margin: 0 5px 0;
        }

        .product-grid .product-links {
            font-size: 0;
            width: 100%;
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .product-grid .product-links li {
            margin: 0 3px;
            display: inline-block;
        }

        .product-grid .product-links li a {
            color: #111;
            background: #fff;
            font-size: 15px;
            font-weight: 500;
            line-height: 35px;
            width: 35px;
            height: 35px;
            border-radius: 50%;
            display: block;
            position: relative;
            box-shadow: 0 8px 24px 0 hsla(210, 8%, 62%, .2);
            transition: all 0.5s ease-out;
        }

        .product-grid:hover .product-links li a:hover {
            color: #fff;
            background-color: rgb(177, 152, 118);
        }

        .product-grid .product-links li:first-child a {
            width: auto;
            padding: 0 13px;
            border-radius: 30px;
        }

        .product-grid .product-links li a:before,
        .product-grid .product-links li a:after {
            content: attr(data-tip);
            color: #fff;
            background-color: #000;
            font-size: 12px;
            line-height: 22px;
            padding: 2px 7px;
            white-space: nowrap;
            border-radius: 5px 5px;
            display: none;
            transform: translateX(-50%);
            position: absolute;
            left: 50%;
            top: -35px;
            transition: all 0.3s ease-in-out;
            z-index: 1;
        }

        .product-grid .product-links li a:after {
            content: '';
            height: 15px;
            width: 15px;
            position: 0;
            border-radius: 0;
            transform: translateX(-50%) rotate(45deg);
            top: -22px;
            z-index: 0;
        }

        .product-grid .product-links li a:hover:before,
        .product-grid .product-links li a:hover:after {
            display: block;
        }

        .product-grid .product-links li:first-child a:before,
        .product-grid .product-links li:first-child a:after {
            display: none;
        }

        @media screen and (max-width: 990px) {
            .product-grid {
                margin: 0 0 30px;
            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            {{-- blade templating => foreach loop --}}
            @foreach ($collection as $item)
                {{-- <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">سورة {{ $item['name'] }}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{ $item['englishName'] }}</h6>
                            <p class="card-text">{{ $item['englishNameTranslation'] }}</p>
                            <p class="card-text">عدد الآيات: {{ $item['numberOfAyahs'] }}</p>
                            <p class="card-text">نوع الوحي: {{ $item['revelationType'] }}</p>
                            <a href="/read/{{ $item['number'] }}" target="_blank" class="btn btn-primary">قراءة
                                السورة</a>
                        </div>
                    </div>
                </div> --}}



                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="/read/{{ $item['number'] }}" class="image">


                                @if ($item['revelationType'] == 'Meccan')
                                    <img class="pic-1" src="{{ asset('images/imgm2.jpeg') }}"
                                        alt="description of myimage">

                                    <img class="pic-2" src="{{ asset('images/imgm1.jpeg') }}"
                                        alt="description of myimage">
                                @else
                                    <img class="pic-1" src="{{ asset('images/img2.jpeg') }}"
                                        alt="description of myimage">

                                    <img class="pic-2" src="{{ asset('images/img1.jpeg') }}"
                                        alt="description of myimage">
                                @endif


                            </a>
                        </div>
                        <div class="product-content">
                            {{-- <ul class="rating">
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="fas fa-star"></li>
                                <li class="far fa-star"></li>
                            </ul> --}}
                            <h2 class="title">{{ $item['name'] }} | {{ $item['englishName'] }}</a></h3>
                                <h3 class="title">{{ $item['englishNameTranslation'] }}</a></h3>
                                <div class="price">
                                    عدد الآيات: {{ $item['numberOfAyahs'] }}
                                </div>
                                <ul class="product-links">
                                    <li><a href="/read/{{ $item['number'] }}">
                                         قراء ۃ السورۃ  |   Read Surah

                                        </a></li>
                                    {{-- <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#" data-tip="Compare"><i class="fa fa-random"></i></a></li>
                                <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li> --}}
                                </ul>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
