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
    <style>
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


                {{-- blade templating => foreach loop --}}
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

</html>
