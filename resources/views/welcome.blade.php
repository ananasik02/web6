<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap");
        * {
            box-sizing: border-box;
            margin: 0;
            font-family: "Roboto";
            font-size: large;
        }
        .grid-item {
            margin: 0;
            padding: 0;
        }
        label {
            color: rgb(243, 243, 243);
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .error{
            color: white;
            font-size: 14px;
        }
        input,
        select,
        textarea {
            color: aliceblue;
        }
        input[type="text"]::placeholder,
        input[type="date"]::placeholder,
        input[type="email"]::placeholder,
        textarea::placeholder {
            color: rgba(240, 248, 255, 0.603);
            font-family: "Roboto";
            font-style: italic;
        }
        .input-field {
            left: 0;
            bottom: 0;
            background-color: rgba(122, 111, 133, 0.692) /*rgba(248, 248, 248, 0.692)*/;
            width: 0;
            border: none;
            transition: 1.5s;
            box-sizing: border-box;
        }
        .input-field:focus {
            outline: none;
            border-bottom: solid 1px rgb(252, 252, 252);
        }
        .input-container {
            width: 90%;
            margin-bottom: 10%;
            background-color: rgba(122, 111, 133, 0.692);
            cursor: text;
        }
        .grid-container {
            display: flex;
            grid-template-columns: 35% 60%;
            column-gap: 5%;
            grid-template-areas: "form table";
            background: linear-gradient(#5a1a85, #3b1157);
            align-items: center;
            height: 100vh;
            justify-content: center;
        }
        .form {
            padding: 2.5%;
            border-radius: 10px;
            overflow: hidden;
            grid-area: form;
            background-color: rgba(0, 0, 0, 0.692);
        }
        input[type="submit"] {
            margin-right: 10%;
        }
        input[type="submit"]:hover {
            background-color: rgb(23, 209, 79);
        }
        input[type="checkbox"] {
            transition: 2s;
            background-color: rgb(14, 207, 72);
        }
        .table {
            grid-area: table;
            text-align: center;
        }
        .agreement {
            color: azure;
            transition: 0.5s;
        }
        label[for="isAgreed"] {
            display: inline;
        }
        .agreement:hover {
            color: #701ba8;
        }
        input,
        label {
            display: block;
        }
        input {
            margin-bottom: 5%;
        }
        input[type="checkbox"],
        .agreement {
            display: inline;
        }
        .form-btn {
            border: solid rgba(120, 124, 126, 0.863) 1px;
            background-color: rgba(87, 83, 83, 0.692);
            color: aliceblue;
            transition: 1s;
            border-radius: 5px;
        }
        .form-btn:hover {
            background-color: #5a1a85;
        }
        #start {
            display: inline;
        }
        #stopwatch {
            display: inline;
            float: right;
            transition: 0.5s;
            margin-right: 10%;
            padding: 1%;
        }
        input[type="password"],
        input[type="email"],
        input[type="text"] {
            width: 90%;
        }
        textarea {
            width: 90%;
            resize: none;
            border: none;
            background: rgba(62, 42, 70, 0.692);
        }
        input[type="submit"] {
            float: right;
        }
        .checkbox-container {
            margin-bottom: 5%;
            margin-top: 5%;
            width: 75%;
        }
        @media screen and (max-width: 850px) {
            textarea {
                margin-left: 5%;
            }
            .grid-container {
                grid-template-columns: none;
                grid-template-areas:
      "form"
      "table";
                justify-content: center;
            }
            .grid-item {
                margin-bottom: 5%;
            }
            .table {
                margin-left: auto;
                margin-right: auto;
            }
            label {
                text-align: center;
            }
            .input-container {
                margin-left: auto;
                margin-right: auto;
            }
            .cell {
                width: 5em;
                height: 5em;
            }
            .checkbox-container {
                width: 50%;
            }
        }
        table {
            border-spacing: 0;
            border-width: 10px;
            border-style: ridge;
            border-color: rgb(80, 45, 112);
        }
        .black-cell {
            background-color: rgba(75, 58, 74, 0.836);
            color: rgb(222, 231, 235);
        }
        .white-cell {
            background-color: rgb(222, 231, 235);
            color: rgb(43, 27, 41);
        }
        .black-cell,
        .white-cell {
            font-weight: 500;
        }
        .cell {
            border: solid black 1px;
            width: 4em;
            height: 4em;
            vertical-align: top;
            text-align: left;
            background-position: center center;
            background-repeat: no-repeat;
            background-size: 90%;
        }
        .letter {
            float: right;
            margin-top: 55%;
            margin-right: 2px;
        }
        .wk {
            background-image: url("https://images.chesscomfiles.com/chess-themes/pieces/neo/150/wk.png");
        }
        .bk {
            background-image: url("https://images.chesscomfiles.com/chess-themes/pieces/neo/150/bk.png");
        }
        .wq {
            background-image: url("https://images.chesscomfiles.com/chess-themes/pieces/neo/150/wq.png");
        }
        .bq {
            background-image: url("https://images.chesscomfiles.com/chess-themes/pieces/neo/150/bq.png");
        }
        .wb {
            background-image: url("https://images.chesscomfiles.com/chess-themes/pieces/neo/150/wb.png");
        }
        .bb {
            background-image: url("https://images.chesscomfiles.com/chess-themes/pieces/neo/150/bb.png");
        }
        .wr {
            background-image: url(./img/whi@import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400&display=swap");
        }
    </style>
    <title>Grid</title>
</head>
<body>
<div class="grid-container">
    <div class="grid-item form-container">
        <form class="form" id="user-signup" method="post" action="{{route('login')}}">
            @csrf
            <label for="username">Username:</label>
            <input
                class="input-field"
                id="username"
                name="username"
                type="text"
                required
            />
            @error('username')
            <p class="error">{{$message}}</p>
            @enderror

            <label for="email">E-mail:</label>
            <input
                class="input-field"
                id="email"
                type="text"
                name="email"
                required
            />
            @error('email')
            <p class="error">{{$message}}</p>
            @enderror

            <label for="password">Password:</label>
            <input
                class="input-field"
                id="password"
                type="password"
                name="password"
                required
            />
            @error('password')
            <p class="error">{{$message}}</p>
            @enderror

            <label for="confirm-pass">Confirm password:</label>
            <input
                class="input-field"
                id="confirm-pass"
                type="password"
                name="password_confirmation"
                required
            />
            <label for="comment">Leave a comment below:</label>
            <textarea
                name="comment"
                id="comment"
                cols="26"
                rows="5"
                placeholder="I like..."
            ></textarea>

            <div class="checkbox-container">
                <input id="isAgreed" name="isAgreed" type="checkbox" required />
                <label for="isAgreed"
                >I agree with the
                    <a
                        class="agreement"
                        href="https://www.chess.com/legal/user-agreement"
                        target="_blank"
                    >Terms of Service</a
                    >
                    and
                    <a
                        class="agreement"
                        href="https://www.chess.com/legal/privacy"
                        target="_blank"
                    >Privacy Policy</a
                    ></label
                >
            </div>

            <button
                id="start"
                class="form-btn"
                type="submit"
                name="start"
                value="Start"
                style="width: 90%; margin-bottom: 20px"
            >
                Start
            </button>
            <input class="form-btn" style="width: 90%;" type="submit" name="submit" value="Sign Up" />
        </form>
    </div>
    <div class="grid-item table">
        @if ($successMessage ?? '')
            <p style="color: white; font-size: 24px">
                <?php echo "<script type='text/javascript'>alert('$successMessage');</script>";?>
            </p>
        @endif

        <table id="board">
            <tbody>
            <tr>
                <td class="cell white-cell br">8</td>
                <td class="cell black-cell"></td>
                <td class="cell white-cell bb"></td>
                <td class="cell black-cell"></td>
                <td class="cell white-cell br"></td>
                <td class="cell black-cell bq"></td>
                <td class="cell white-cell bk"></td>
                <td class="cell black-cell"></td>
            </tr>
            <tr>
                <td class="cell black-cell">7</td>
                <td class="cell white-cell"></td>
                <td class="cell black-cell"></td>
                <td class="cell white-cell"></td>
                <td class="cell black-cell"></td>
                <td class="cell white-cell bp"></td>
                <td class="cell black-cell"></td>
                <td class="cell white-cell"></td>
            </tr>
            <tr>
                <td class="cell white-cell">6</td>
                <td class="cell black-cell"></td>
                <td class="cell white-cell"></td>
                <td class="cell black-cell"></td>
                <td class="cell white-cell"></td>
                <td class="cell black-cell wp"></td>
                <td class="cell white-cell wq"></td>
                <td class="cell black-cell"></td>
            </tr>
            <tr>
                <td class="cell black-cell bp">5</td>
                <td class="cell white-cell bp"></td>
                <td class="cell black-cell bp"></td>
                <td class="cell white-cell"></td>
                <td class="cell black-cell wb"></td>
                <td class="cell white-cell"></td>
                <td class="cell black-cell"></td>
                <td class="cell white-cell"></td>
            </tr>
            <tr>
                <td class="cell white-cell">4</td>
                <td class="cell black-cell"></td>
                <td class="cell white-cell"></td>
                <td class="cell black-cell"></td>
                <td class="cell white-cell"></td>
                <td class="cell black-cell"></td>
                <td class="cell white-cell"></td>
                <td class="cell black-cell"></td>
            </tr>
            <tr>
                <td class="cell black-cell">3</td>
                <td class="cell white-cell wp"></td>
                <td class="cell black-cell"></td>
                <td class="cell white-cell wp"></td>
                <td class="cell black-cell"></td>
                <td class="cell white-cell"></td>
                <td class="cell black-cell"></td>
                <td class="cell white-cell wr"></td>
            </tr>
            <tr>
                <td class="cell white-cell wp">2</td>
                <td class="cell black-cell"></td>
                <td class="cell white-cell"></td>
                <td class="cell black-cell"></td>
                <td class="cell white-cell"></td>
                <td class="cell black-cell"></td>
                <td class="cell white-cell wp"></td>
                <td class="cell black-cell wp"></td>
            </tr>
            <tr>
                <td class="cell black-cell">1 <span class="letter">a</span></td>
                <td class="cell white-cell"><span class="letter">b</span></td>
                <td class="cell black-cell"><span class="letter">c</span></td>
                <td class="cell white-cell"><span class="letter">d</span></td>
                <td class="cell black-cell"><span class="letter">e</span></td>
                <td class="cell white-cell wr"><span class="letter">f</span></td>
                <td class="cell black-cell wk"><span class="letter">g</span></td>
                <td class="cell white-cell"><span class="letter">h</span></td>
            </tr>
            </tbody>
        </table>
    </div>
    <canvas class="grid-item" id="ctx"></canvas>
</div>
</body>
</html>
