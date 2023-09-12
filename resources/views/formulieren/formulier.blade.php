<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulier</title>
</head>

<body>
    <form method="post">
        @csrf

        <div>
            <label for="naam">Naam:</label>
            <input type="text" name="naam" id="naam" value="{{ old('naam') }}">
            @error('naam')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label for="email">E-mailadres:</label>
            <input type="text" name="email" id="email" value="{{ old('email') }}">
            @error('email')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <label>
                <input type="checkbox" name="voorwaarden" id="voorwaarden">
                Je moet de voorwaarden accepteren
            </label>
            @error('voorwaarden')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <input type="submit" value="Verzenden">
        </div>
    </form>
</body>

</html>
