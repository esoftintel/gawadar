
<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('414324b70986f35ce2f2', {
      cluster: 'ap2',
      forceTLS: true
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });
  </script>
</head>
<body>
  <h1>Pusher Test</h1>
  <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
  </p>
  <form action="/sender" method="post">
   <input type="text" name="message">
   <input type ="submit"> 
   {{csrf_field()}}
</form>
</body>
</html>