<head>
    <style>
        body {
            padding: 20px;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        * {
            box-sizing: border-box;
        }

        form {
            display: flex;
            flex-direction: column;

        }

        input {
            width: 320px;
            padding: 8px;
            border: 1px solid #e1e3e9;
            border-radius: 6px;
        }

        input:active,
        input:focus {
            outline: none;
        }

        label {
            margin: 12px 0 8px 0;
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: space-around;
            width: 100%;
        }

        .submit-button {
            padding: 10px;
            border-radius: 8px;
            background-color: #769656;
            margin-top: 16px;
            color: #fff;
            transition: transform 0.3s ease-in-out;
            cursor: pointer;
            border: none;
        }

        .submit-button:hover {
            transform: scale(1.05);
        }

        .links {
            margin-top: 16px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        table {
            border-collapse: collapse;
            background: #eeeed2;
        }

        td {
            width: 100px; height: 100px;
            position: relative;
            padding: 0;
        }

        tr:nth-child(odd) td:nth-child(even), tr:nth-child(even) td:nth-child(odd) {
            background: #769656;
        }

        img{
            width: 100%;
            height: auto;
            object-fit: cover;
        }

        a{
            font-size: 16px;
            color: #779952;
            text-decoration: none;
            transition: opacity 0.3s ease-in-out;
        }

        a:hover {
            opacity: 0.8;
        }

        .coordinate-dark{
            font-size: 20px;
            font-weight: 600;
            color: #779952;
        }

        .coordinate-light{
            font-size: 20px;
            font-weight: 600;
            color: #eeeed2;
        }

        .numbers{
            display: block;
            position: absolute;
            top: 4px;
            left: 4px;
        }

        .symbol{
            display: block;
            position: absolute;
            right: 4px;
            bottom: 4px;
        }

        input.invalid{
            border-color: #900;
            background-color: #FDD;
        }

        input:focus.invalid {
            outline: none;
        }

        .error {
            margin: 12px 0 8px 0;
            color : #900;
            border-radius: 0 0 5px 5px;
        }


    </style>
</head>
<div class="container">
    <div class="left-part">
        @if ($successMessage ?? '')
            <?php echo "<script type='text/javascript'>alert('$successMessage');</script>";?>
        @endif

        <form novalidate method="post" action="{{route('login')}}">
            @csrf
            <label for="fname">First name</label>
            <input placeholder="First name" type="text" id="fname" name="first_name">
            @error('first_name')
            <span class="error" aria-live="polite">{{$message}}</span>
            @enderror

            <label for="lname">Last name</label>
            <input placeholder="Last name" type="text" id="lname" name="last_name">
            @error('last_name')
            <span class="error" aria-live="polite">{{$message}}</span>
            @enderror

            <label for="email">Email:</label>
            <input type="email" id="mail" name="email">
            @error('email')
            <span class="error" aria-live="polite">{{$message}}</span>
            @enderror

            <button style="padding: 10px; border-radius: 8px; background-color: #769656;
            margin-top: 16px; color: #fff; transition: transform 0.3s ease-in-out; cursor: pointer; border: none;" type="submit" value="Submit">Submit</button>
        </form>
        <div class="links">
            <a target="_blank" rel="noreferrer" href="https://scu.org.ua/pravyla-gry-v-shahy/">Rules!</a>
            <a target="_blank" rel="noreferrer" href="https://www.chess.com/puzzles/problem/33508">Play here!</a>
        </div>
    </div>

    <div class="right-part">
        <button  class="submit-button" id="button" onclick="startTimer(600, document.querySelector('#time'))">Start</button>
        <div id="time"></div>
        <table>
            <tr>
                <td>
                    <span class="coordinate-dark numbers">1</span>
                </td>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>

            <tr>
                <td>
                    <span class="coordinate-light numbers">2</span>
                </td>
                <td></td>
                <td>
                    <img src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/wq.png">
                </td>
                <td></td><td></td><td></td><td></td><td></td>
            </tr>

            <tr>
                <td>
                    <span class="coordinate-dark numbers">3</span>
                    <img src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/wp.png">
                </td>
                <td></td><td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>

            <tr>
                <td>
                    <span class="coordinate-light numbers">4</span>
                </td>
                <td>
                    <img src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/wp.png">
                </td>
                <td></td><td></td><td></td><td></td><td></td>
                <td>
                    <img src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/bp.png">
                </td>
            </tr>

            <tr>
                <td>
                    <span class="coordinate-dark numbers">5</span>
                </td>
                <td>
                    <img src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/bp.png">
                </td>
                <td></td>
                <td>
                    <img src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/bp.png">
                </td>
                <td></td>
                <td>
                    <img src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/wp.png">
                </td>
                <td></td>
                <td></td>
            </tr>

            <tr>
                <td>
                    <span class="coordinate-light numbers">6</span>
                </td>
                <td>
                    <img src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/wk.png">
                </td>
                <td>
                    <img src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/bp.png">
                </td>
                <td>
                    <img src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/bq.png">
                </td>
                <td>
                    <img src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/wp.png">
                </td>
                <td></td><td></td><td></td>
            </tr>

            <tr>
                <td>
                    <span class="coordinate-dark numbers">7</span>
                </td>
                <td>
                    <img src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/bp.png">
                </td>
                <td></td><td></td><td></td><td></td><td></td><td></td>
            </tr>

            <tr>
                <td>
                    <span class="coordinate-light numbers">8</span>
                    <img src="https://images.chesscomfiles.com/chess-themes/pieces/neo/150/bk.png">
                    <span class="coordinate-light symbol">h</span>
                </td>
                <td>
                    <span class="coordinate-dark symbol">g</span>
                </td>
                <td>
                    <span class="coordinate-light symbol">f</span>
                </td>
                <td>
                    <span class="coordinate-dark symbol">e</span>
                </td>
                <td>
                    <span class="coordinate-light symbol">d</span>
                </td>
                <td>
                    <span class="coordinate-dark symbol">c</span>
                </td>
                <td>
                    <span class="coordinate-light symbol">b</span>
                </td>
                <td>
                    <span class="coordinate-dark symbol">a</span>
                </td>
            </tr>

        </table>
    </div>
</div>
<script>
    function startTimer(duration, display) {
        var timer = duration, minutes, seconds;
        setInterval(function () {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds;

            if (--timer < 0) {
                timer = duration;
            }
        }, 1000);
    }

</script>
