<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <ul class="list-group">
  <li class="list-group-item">Name: {{ $request->full_name }}</li>
  <li class="list-group-item">Phone Email: {{ $request->email }}</li>
  <li class="list-group-item">Phone Subject: {{ $request->subject }}</li>
  <li class="list-group-item">Message: {{ $request->message }}</li>

</ul>
    </div>
</body>
</html>
