<!DOCTYPE html>
<html>

<head>
    <title>mencoba</title>
    <style>
        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            }
            .button2:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
    </style>
</head>

<body>
    <h3>{{ $data['title'] }}</h3>
    <h4>{{ $data['body'] }}</h4>
    <br>
    <a href="http://localhost/spkSMA3/forgot/{{$data['id']}}" type="button" class="button button2">Ubah Password</a>
</body>

</html>
