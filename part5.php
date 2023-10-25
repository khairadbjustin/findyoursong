<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find Your Song By Justin Dani</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: whitesmoke ;
            /* Warna latar belakang */
        }

        .container {
            background-color: goldenrod;
            /* Warna latar belakang kotak */
            border-radius: 10px;
            /* Sudut kotak membulat */
            padding: 20px;
            text-align: center;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            /* Bayangan kotak */
        }

        .form-group {
            margin-bottom: 20px;
        }

        .song-details {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Find Your Song By Justin Dani</h2>
        <div class="form-group">
            <label for="genre">Pilih Genre Lagu:</label>
            <select name="genre" id="genre">
                <option value="happy">Happy</option>
                <option value="phonk">Phonk</option>
                <option value="sad">Sad</option>
                <option value="lofi">Lofi</option>
                <option value="classic">Classic</option>
                <option value="pop">Pop</option>
                <option value="kpop">K-POP</option>
                <option value="jazz">Jazz</option>
            </select>
        </div>
        <button type="button" id="cariLaguBtn">Cari Lagu</button>

        <div class="song-details" id="songDetails">
            <!-- Detail lagu akan ditampilkan di sini -->
        </div>
    </div>

    <script>
        // Daftar lagu berdasarkan genre
        const songs = {
            happy: {
                title: "Remaja - Hivi!",
                poster: "poster_remaja.jpeg",
                audio: "remaja.mp3"
            },
            phonk: {
                title: "LOVELY BASTARD - ZWE1HVNDXR",
                poster: "poster_lovelybastard.jpeg",
                audio: "lovelybastard.mp3"
            },
            sad: {
                title: "Close To You - Rihanna",
                poster: "poster_closetoyou.jpeg",
                audio: "closetoyou.mp3"
            },
            lofi: {
                title: "Midnight Stroll - a girl and a cat",
                poster: "poster_midnightstroll.jpeg",
                audio: "midnightstroll.mp3"
            },
            classic: {
                title: "Für Elise - Beethoven",
                poster: "poster_furelise.jpeg",
                audio: "furelise.mp3"
            },
            pop: {
                title: "Versace On The Floor - Bruno Mars",
                poster: "poster_versace.jpeg",
                audio: "versace.mp3"
            },
            kpop: {
                title: "Love Shot - Exo",
                poster: "poster_loveshot.jpeg",
                audio: "loveshot.mp3"
            },
            jazz: {
                title: "Take Five - Dave Brubeck",
                poster: "poster_takefive.jpeg",
                audio: "takefive.mp3"
            }
        };

        // Ambil elemen-elemen HTML yang diperlukan
        const genreDropdown = document.getElementById("genre");
        const cariLaguBtn = document.getElementById("cariLaguBtn");
        const songDetailsContainer = document.getElementById("songDetails");

        // Fungsi untuk menampilkan lagu berdasarkan genre yang dipilih
        function tampilkanLagu() {
            const genre = genreDropdown.value;
            const lagu = songs[genre];

            if (lagu) {
                const { title, poster, audio } = lagu;
                const songDetailsHTML = `
                    <h3>${title}</h3>
                    <img src="${poster}" alt="Poster Lagu">
                    <audio controls>
                        <source src="${audio}" type="audio/mpeg">
                        Browser Anda tidak mendukung tag audio.
                    </audio>
                `;
                songDetailsContainer.innerHTML = songDetailsHTML;
            } else {
                songDetailsContainer.innerHTML = "Genre tidak valid.";
            }
        }

        // Event listener untuk tombol "Cari Lagu Lain"
        cariLaguBtn.addEventListener("click", tampilkanLagu);
    </script>
</body>

</html>