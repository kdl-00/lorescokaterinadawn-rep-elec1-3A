<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
</head>

<body>
    <?php

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
    $pangasinanWord = 'singko';
    } elseif ($age == 26) {
    $pangasinanWord = 'sais';
    } elseif ($age == 27) {
    $pangasinanWord = 'siyete';
    } elseif ($age == 28) {
    $pangasinanWord = 'ocho';
    } elseif ($age == 29) {
    $pangasinanWord = 'nueve';
    }

    if ($pangasinanWord != '') {
    $ageDisplay = $age . ' (Bainte ' . $pangasinanWord . ')';
    }

    if ($age == 30) {
    $ageDisplay = $age . ' (Trenta)';
    }
    }
    ?>

    <div class="container">

        <div class="header">
            <div class="photo-section">
                <div class="photo-frame">
                    <img src="<?php echo e(asset('images/profile.png')); ?>" alt="<?php echo e($name); ?>">
                </div>
            </div>
            <div class="info-section">
                <h1><?php echo e($name); ?></h1>
                <div class="info-item"><strong>Age:</strong> <?php echo e($ageDisplay); ?></div>
                <div class="info-item"><strong>Date and time of birth:</strong> <?php echo e($birthDate); ?>, <?php echo e($birthTime); ?></div>
                <div class="info-item"><strong>Place of birth:</strong> <?php echo e($birthPlace); ?></div>
                <div class="info-item"><strong>Place of residence:</strong> <?php echo e($residence); ?></div>
                <div class="info-item"><strong>Nationality:</strong> <?php echo e($nationality); ?></div>
                <div class="info-item"><strong>Religion:</strong> <?php echo e($religion); ?></div>
                <div class="info-item"><strong>Height:</strong> <?php echo e($height); ?></div>
                <div class="info-item"><strong>Weight:</strong> <?php echo e($weight); ?></div>
                <div class="info-item"><strong>Education:</strong> <?php echo e($education); ?></div>
                <div class="info-item"><strong>Occupation:</strong> <?php echo e($occupation); ?></div>
                <div class="info-item"><strong>Languages:</strong> <?php echo e($languages); ?></div>
            </div>
        </div>

        <div class="content">
            <div class="section">
                <h2>About Me</h2>
                <div class="section-content">
                    <p>I am currently pursuing a <?php echo e($education); ?>. I was born and raised in Pangasinan,
                        where I still reside with my family. As a <?php echo e(strtolower($occupation)); ?>, I am focused on building my skills in technology while
                        staying true to my values and faith. I enjoy learning new things and look forward to contributing to the
                        IT field in the future.</p>
                </div>
            </div>

            <div class="section">
                <h2>Family Background</h2>
                <div class="family-details">
                    <div class="family-item"><strong>Father's Name:</strong> <?php echo e($fatherName); ?></div>
                    <div class="family-item"><strong>Father's Profession:</strong> <?php echo e($fatherProfession); ?></div>
                    <div class="family-item"><strong>Mother's Name:</strong> <?php echo e($motherName); ?></div>
                    <div class="family-item"><strong>Mother's Profession:</strong> <?php echo e($motherProfession); ?></div>
                    <div class="family-item"><strong>No. of Brothers:</strong> <?php echo e($numBrothers); ?></div>
                    <div class="family-item"><strong>No. of Sisters:</strong> <?php echo e($numSisters); ?></div>
                    <div class="family-item"><strong>Family Type:</strong> <?php echo e($familyType); ?></div>
                    <div class="family-item"><strong>Social Class:</strong> <?php echo e($socialClass); ?></div>
                    <div class="family-item"><strong>Place of Residence:</strong> <?php echo e($familyResidence); ?></div>
                </div>
            </div>

            <div class="section">
                <h2>Expectations</h2>
                <div class="section-content">
                    <p>I am focused on completing my degree in <?php echo e($education); ?> and building a successful career in the tech industry.
                        I hope to gain practical experience and develop my skills further to become a competent IT professional.
                        My goal is to find stable employment where I can grow professionally while contributing meaningfully to my field
                        and supporting my family.</p>
                </div>
            </div>

            <div class="section">
                <h2>Contact Details</h2>
                <div class="contact-details">
                    <div class="contact-item"><strong>Phone Number:</strong> <?php echo e($phoneNumber); ?></div>
                    <div class="contact-item"><strong>Residence Address:</strong> <?php echo e($residenceAddress); ?></div>
                </div>
            </div>
        </div>
    </div>

</body>

</html><?php /**PATH C:\xampp\htdocs\WebSys2\assignment-3\resources\views/biodata.blade.php ENDPATH**/ ?>