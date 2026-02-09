<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    @php

    $name = 'Katerina Dawn P. Loresco';
    $age = 22;
    $birthDate = '08/07/2003';
    $birthTime = '00:03:18 AM';
    $birthPlace = 'Dagupan City, Pangasinan';
    $residence = 'Sta. Barbara, Pangasinan';
    $nationality = 'Filipino';
    $religion = 'Roman Catholic';
    $height = '5\' 1"';
    $weight = '82kg';
    $education = 'Bachelor of Science in Information Technology';
    $occupation = 'Student';
    $languages = 'Filipino, English';

    $fatherName = 'Francisco L. Lorezco, Jr.';
    $fatherProfession = 'House Husband';
    $motherName = 'Ma. Verina P. Loresco';
    $motherProfession = 'Government Employee';
    $numBrothers = 2;
    $numSisters = 0;
    $familyType = 'Nuclear';
    $socialClass = 'Lower-Middle';
    $familyResidence = 'Sta. Barbara, Pangasinan';

    $phoneNumber = '0961 754 6693';
    $residenceAddress = 'Tuliao, Sta. Barbara, Pangasinan';

    $ageDisplay = $age;

    if ($age == 21) {
    $ageDisplay = $age . ' (Dalawampu\'t isa)';
    } elseif ($age == 22) {
    $ageDisplay = $age . ' (Duapulo ket dua)';
    } elseif ($age == 23) {
    $ageDisplay = $age . ' (Duapulo ket tallo)';
    } elseif ($age > 24) {
    $pangasinanWord = '';

    if ($age == 25) {
    $pangasinanWord = 'lima';
    } elseif ($age == 26) {
    $pangasinanWord = 'anem';
    } elseif ($age == 27) {
    $pangasinanWord = 'pito';
    } elseif ($age == 28) {
    $pangasinanWord = 'walo';
    } elseif ($age == 29) {
    $pangasinanWord = 'siyam';
    }

    if ($pangasinanWord != '') {
    $ageDisplay = $age . ' (Duamplo tan ' . $pangasinanWord . ')';
    }

    elseif ($age == 30) {
    $ageDisplay = $age . ' Trenta';
    }

    }
    @endphp

    <div class="container">

        <div class="header">
            <div class="photo-section">
                <div class="photo-frame">
                    <img src="{{ asset('images/profile.png') }}" alt="{{ $name }}">
                </div>
            </div>
            <div class="info-section">
                <h1>{{ $name }}</h1>
                <div class="info-item"><strong>Age:</strong> {{ $ageDisplay }}</div>
                <div class="info-item"><strong>Date and time of birth:</strong> {{ $birthDate }}, {{ $birthTime }}</div>
                <div class="info-item"><strong>Place of birth:</strong> {{ $birthPlace }}</div>
                <div class="info-item"><strong>Place of residence:</strong> {{ $residence }}</div>
                <div class="info-item"><strong>Nationality:</strong> {{ $nationality }}</div>
                <div class="info-item"><strong>Religion:</strong> {{ $religion }}</div>
                <div class="info-item"><strong>Height:</strong> {{ $height }}</div>
                <div class="info-item"><strong>Weight:</strong> {{ $weight }}</div>
                <div class="info-item"><strong>Education:</strong> {{ $education }}</div>
                <div class="info-item"><strong>Occupation:</strong> {{ $occupation }}</div>
                <div class="info-item"><strong>Languages:</strong> {{ $languages }}</div>
            </div>
        </div>

        <div class="content">
            <div class="section">
                <h2>About Me</h2>
                <div class="section-content">
                    <p>I am currently pursuing a {{ $education }}. I was born and raised in Pangasinan,
                        where I still reside with my family. As a {{ strtolower($occupation) }}, I am focused on building my skills in technology while
                        staying true to my values and faith. I enjoy learning new things and look forward to contributing to the
                        IT field in the future.</p>
                </div>
            </div>

            <div class="section">
                <h2>Family Background</h2>
                <div class="family-details">
                    <div class="family-item"><strong>Father's Name:</strong> {{ $fatherName }}</div>
                    <div class="family-item"><strong>Father's Profession:</strong> {{ $fatherProfession }}</div>
                    <div class="family-item"><strong>Mother's Name:</strong> {{ $motherName }}</div>
                    <div class="family-item"><strong>Mother's Profession:</strong> {{ $motherProfession }}</div>
                    <div class="family-item"><strong>No. of Brothers:</strong> {{ $numBrothers }}</div>
                    <div class="family-item"><strong>No. of Sisters:</strong> {{ $numSisters }}</div>
                    <div class="family-item"><strong>Family Type:</strong> {{ $familyType }}</div>
                    <div class="family-item"><strong>Social Class:</strong> {{ $socialClass }}</div>
                    <div class="family-item"><strong>Place of Residence:</strong> {{ $familyResidence }}</div>
                </div>
            </div>

            <div class="section">
                <h2>Expectations</h2>
                <div class="section-content">
                    <p>I am focused on completing my degree in {{ $education }} and building a successful career in the tech industry.
                        I hope to gain practical experience and develop my skills further to become a competent IT professional.
                        My goal is to find stable employment where I can grow professionally while contributing meaningfully to my field
                        and supporting my family.</p>
                </div>
            </div>

            <div class="section">
                <h2>Contact Details</h2>
                <div class="contact-details">
                    <div class="contact-item"><strong>Phone Number:</strong> {{ $phoneNumber }}</div>
                    <div class="contact-item"><strong>Residence Address:</strong> {{ $residenceAddress }}</div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>