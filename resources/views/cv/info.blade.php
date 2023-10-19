<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Information</title>
</head>
<body>
    <form action="{{route('cv.store')}}" method="post">
        @csrf
        name:<input type="text" name="name" id=""> <br>
        birthday:<input type="date" name="birthday" id=""> <br>
        phone:<input type="text" name="phone" id=""> <br>
        address:<input type="text" name="address" id=""> <br>
        eduction:<input type="text" name="eduction" id=""> <br>
        Experience <br>
        place:<input type="text" name="place" id=""> <br>
        start_day:<input type="date" name="start_day" id=""> <br>
        end_day:<input type="date" name="end_day" id=""> <br>
        courses:<input type="text" name="courses" id=""> <br>
        language:<input type="text" name="language" id=""> <br>
        marital_status:<input type="text" name="marital_status" id=""> <br>
        military_situation:<input type="text" name="military_situation" id=""> <br>
        nationality:<input type="text" name="nationality" id=""> <br>
        image:<input type="file" name="image" id=""> <br>
        communication:<input type="text" name="communication" id=""> <br>
        <input type="submit" value="go">
    </form>
</body>
</html>
