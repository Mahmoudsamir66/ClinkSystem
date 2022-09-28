<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax</title>
</head>
<body>


<button type="button" onclick="f2()">click me</button>
<p id="mahmoud"></p>
<script>
   // function f() {
  //       var request = new XMLHttpRequest();
  //       request.onreadystatechange=function () {
  //           console.log(this.readyState)
  //           if(this.readyState === 4 && this.status === 200){
  //               console.log(this.responseText);
  //               console.log(request);
  //           }
  //       };
  // request.open(
  //   "get",
  //    "https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js",
  //     true
  // );
  // // request.setRequestHeader(
  // //     "Content-Type",
  // //     "application/x-www-from-urlencoded"
  // // );
  //
  //       request.send();
  //   }

function f2() {
  var myrequest=  new XMLHttpRequest();
  myrequest.onreadystatechange=function () {
     // document.getElementById('mahmoud').innerHTML=myrequest.responseText;

      if(myrequest.readyState === 4 && myrequest.status === 200){
         // document.getElementById('mahmoud').innerHTML=myrequest.responseText;
      console.log(myrequest.readyState);
      }
  }
  myrequest.open('get','mahmoud.html',true);
  myrequest.send();
}
</script>
</body>
</html>
