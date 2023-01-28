<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form action="/create" method="post">
    @csrf
    <p>氏名</p> 
    <input type="text" name="name"/>
    <p>メールアドレス</p> 
    <input type="text" name="email"/>
    <div><button type="submit">送信する</button></div>
  </body>
</html>