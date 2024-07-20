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
        h1,
        p,
        td,
        option,
        select, th
        {
            font-family: 'Amiri Quran', serif;
            text-align: center;
        }


    </style>

</head>

<body>

    @php

        $languages = [
            'Arabic',
            'Amharic',
            'Azerbaijani',
            'Berber',
            'Bengali',
            'Czech',
            'German',
            'Dhivehi',
            'English',
            'Spanish',
            'Persian',
            'French',
            'Hausa',
            'Hindi',
            'Indonesian',
            'Italian',
            'Japanese',
            'Korean',
            'Kurdish',
            'Malayalam',
            'Dutch',
            'Norwegian',
            'Polish',
            'Pashto',
            'Portuguese',
            'Romanian',
            'Russian',
            'Sindhi',
            'Somali',
            'Albanian',
            'Swedish',
            'Swahili',
            'Tamil',
            'Tajik',
            'Thai',
            'Turkish',
            'Tatar',
            'Uyghur',
            'Urdu',
            'Uzbek',
        ];
    @endphp

    <div class="container">
        <select class="form-select" aria-label="Default select example" id="languageSelect">
            @foreach ($lang as $index => $language)
                <option value="{{ $language }}">{{ $languages[$index] }}</option>
            @endforeach
        </select>
        <br>
        <select class="form-select" aria-label="Default select example" id="languageData">
        </select>
    </div>
    <div class="container">
        <table class="table table-striped table-hover mt-4">
            <thead>
                <tr>
                    <th scope="col">Audio</th>
                    <th scope="col">Translation/Tafseer</th>
                    <th scope="col">Surah Name</th>
                    <th scope="col">#</th>

                </tr>
            </thead>
            <tbody id="ayahTableBody">
                <!-- Ayah texts will be dynamically injected here -->
                @foreach ($collection as $index => $item)
                    <tr>
                        <td>
                            <div id="languageDataaudio_{{ $index }}"></div>
                        </td>
                        <td>
                            <div id="languageData1_{{ $index }}"></div>
                        </td>



                        <td>{{ $item['text'] }}</td>
                        <td>{{ $index + 1 }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const languageSelect = document.getElementById('languageSelect');
            const languageData = document.getElementById('languageData');
            const ayahTableBody = document.getElementById('ayahTableBody');

            languageSelect.addEventListener('change', function() {
                const selectedLanguage = languageSelect.value;
                fetchLanguageData(selectedLanguage);
            });

            // Fetch data for the default selected language on page load
            fetchLanguageData(languageSelect.value);

            function fetchLanguageData(languageCode) {
                fetch(`https://api.alquran.cloud/v1/edition/language/${languageCode}`)
                    .then(response => response.json())
                    .then(data => {
                        const editions = data.data.map(edition =>
                            `<option value="${edition.identifier}">${edition.englishName} | ${edition.name}</option>`
                        ).join('');
                        languageData.innerHTML = editions ||
                            '<option>No data available for this language.</option>';

                        // Automatically fetch data for the first edition
                        if (data.data.length > 0) {
                            fetchSurahData(data.data[0].identifier);
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching language data:', error);
                        languageData.innerHTML = '<option>Failed to load language data.</option>';
                    });

                languageData.addEventListener('change', function() {
                    fetchSurahData(languageData.value);
                });
            }

            function fetchSurahData(editionIdentifier) {
                const surahNumber = {{ $snum }};
                fetch(`https://api.alquran.cloud/v1/surah/${surahNumber}/${editionIdentifier}`)
                    .then(response => response.json())
                    .then(data => {
                        data.data.ayahs.forEach((ayah, index) => {
                            const audioElement = ayah.audio ?
                                `<audio controls><source src="${ayah.audio}" type="audio/mp3"></audio>` :
                                '<p>No audio available</p>';
                            const translationElement = ayah.text ?
                                `<p>${ayah.text}</p>` :
                                '<p>No translation available</p>';
                            document.getElementById(`languageData1_${index}`).innerHTML =
                                translationElement;
                            document.getElementById(`languageDataaudio_${index}`).innerHTML =
                                audioElement;
                        });
                    })
                    .catch(error => {
                        console.error('Error fetching Surah data:', error);
                        // Show error message or handle error condition
                    });
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html> --}}

<!doctype html>
<html lang="en" dir="rtl">

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
        .card-body,
        p,
        h5,
        option,
        select
        {
        font-family: 'Amiri Quran', serif;
        text-align: center;
        }

        .card {
            border: none;
            background-repeat: no-repeat;
         background-image:url({{asset('images/b11.jpg') }});


        }
    </style>
</head>

<body>

    @php
        $languages = [
            'Arabic',
            'Amharic',
            'Azerbaijani',
            'Berber',
            'Bengali',
            'Czech',
            'German',
            'Dhivehi',
            'English',
            'Spanish',
            'Persian',
            'French',
            'Hausa',
            'Hindi',
            'Indonesian',
            'Italian',
            'Japanese',
            'Korean',
            'Kurdish',
            'Malayalam',
            'Dutch',
            'Norwegian',
            'Polish',
            'Pashto',
            'Portuguese',
            'Romanian',
            'Russian',
            'Sindhi',
            'Somali',
            'Albanian',
            'Swedish',
            'Swahili',
            'Tamil',
            'Tajik',
            'Thai',
            'Turkish',
            'Tatar',
            'Uyghur',
            'Urdu',
            'Uzbek',
        ];
    @endphp

    <div class="container">
        <select class="form-select" aria-label="Default select example" id="languageSelect">
            @foreach ($lang as $index => $language)
                <option value="{{ $language }}">{{ $languages[$index] }}</option>
            @endforeach
        </select>
        <br>
        <select class="form-select" aria-label="Default select example" id="languageData">
        </select>
    </div>
    <div class="container mt-4">
        <div class="row" id="ayahCardsContainer">
            <!-- Ayah cards will be dynamically injected here -->
            @foreach ($collection as $index => $item)
                <div class="col-md-12 mb-4 col-sm-12">
                    <div class="card">
                        <div class="card-body text-end">
                            <p class="card-text"> Ayah No {{ $index + 1 }} | آیت نمبر {{ $index + 1 }}</p>
                            <hr>
                            <h5 class="card-title">{{ $item['text'] }}</h5>
                            <br>

                            <div id="languageDataaudio_{{ $index }}"></div>
                            <div id="languageData1_{{ $index }}"></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const languageSelect = document.getElementById('languageSelect');
            const languageData = document.getElementById('languageData');
            const ayahCardsContainer = document.getElementById('ayahCardsContainer');

            languageSelect.addEventListener('change', function() {
                const selectedLanguage = languageSelect.value;
                fetchLanguageData(selectedLanguage);
            });

            // Fetch data for the default selected language on page load
            fetchLanguageData(languageSelect.value);

            function fetchLanguageData(languageCode) {
                fetch(`https://api.alquran.cloud/v1/edition/language/${languageCode}`)
                    .then(response => response.json())
                    .then(data => {
                        const editions = data.data.map(edition =>
                            `<option value="${edition.identifier}">${edition.englishName} | ${edition.name}</option>`
                        ).join('');
                        languageData.innerHTML = editions ||
                            '<option>No data available for this language.</option>';

                        // Automatically fetch data for the first edition
                        if (data.data.length > 0) {
                            fetchSurahData(data.data[0].identifier);
                        }
                    })
                    .catch(error => {
                        console.error('Error fetching language data:', error);
                        languageData.innerHTML = '<option>Failed to load language data.</option>';
                    });

                languageData.addEventListener('change', function() {
                    fetchSurahData(languageData.value);
                });
            }

            function fetchSurahData(editionIdentifier) {
                const surahNumber = {{ $snum }};
                fetch(`https://api.alquran.cloud/v1/surah/${surahNumber}/${editionIdentifier}`)
                    .then(response => response.json())
                    .then(data => {
                        data.data.ayahs.forEach((ayah, index) => {
                            const audioElement = ayah.audio ?
                                `<center><audio controls><source src="${ayah.audio}" type="audio/mp3"></audio></center>` :
                                '<p>No Audio</p>';
                            const translationElement = ayah.text ?
                                `<p>${ayah.text}</p>` :
                                '<p>No translation available</p>';

                            // document.getElementById(`languageDataaudio_${index}`).innerHTML =
                            //      audioElement;
                            // document.getElementById(`languageData1_${index}`).innerHTML =
                            // translationElement;
                            if (audioElement != '<p>No Audio</p>') {

                                document.getElementById(`languageData1_${index}`).innerHTML =
                                    " ";
                                document.getElementById(`languageDataaudio_${index}`).innerHTML =
                                    audioElement;
                            } else {
                                document.getElementById(`languageData1_${index}`).innerHTML =
                                    translationElement;
                            }

                        });
                    })
                    .catch(error => {
                        console.error('Error fetching Surah data:', error);
                        // Show error message or handle error condition
                    });
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
