<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="robots" content="noindex,nofollow">
  <title>Coming soon?</title>
  <meta name="description" content="It's only temporary, we hope.">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <!--<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">-->
  <!--<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script>
    var hostname = window.location.hostname;

    var json = (function() {
        var json = null;
        $.ajax({
            'async': false,
            'global': false,
            'url': "sites.json",
            'dataType': "json",
            'success': function (data) {
                json = data;
            }
        });
        return json;
    })();

    if(json !== null) {
      for(i=0; i < json.length; i++) {
        if(json[i]['hostname'] === hostname) {
          var analytics = json[i]['analytics'];
          var meta = json[i]['meta'];
          console.log(analytics);
          console.log(meta);

          if(!meta) {
            document.write('<meta name="google-site-verification" content="' + meta + '" />');
          }

          if(!analytics) {
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', analytics, hostname);
            ga('send', 'pageview');
          }

        } else {
          console.log('No site matches found, no tracking/meta data will be inserted.')
        }
      }
    } else {
      console.log('You must set your sites.json file.')
    }
  </script>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    html,body { height: 100%; font-size: 16px; }
    #placeholder {
      overflow: hidden;
      position: relative;
      width: 100%;
      height: 100%;
      -webkit-transition: all .3s ease-in-out;
      -moz-transition: all .3s ease-in-out;
      -o-transition: all .3s ease-in-out;
      transition: all .3s ease-in-out;
      color: #fff;
      background: #405d8c;
      background: -moz-radial-gradient(center, ellipse cover, #405d8c 0%, #293949 100%);
      background: -webkit-gradient(radial, center center, 0px, center center, 100%, color-stop(0%,#405d8c), color-stop(100%,#293949));
      background: -webkit-radial-gradient(center, ellipse cover, #405d8c 0%,#293949 100%);
    }
    #placeholder h1 {
      margin-top: 100px;
      font-size: 6em;
      text-align:center;
    }
    #placeholder a {
      display: block;
      width: 100%;
      color: white;
      text-align:center;
      text-decoration: none;
    }
    #placeholder a:hover {
      color: #dedede;
      text-decoration: none;
    }
    a,p,h1 {
      font-family: 'Open Sans', sans-serif;
    }
    @media screen and (max-width: 767px) {
      #placeholder h1 {
        font-size: 3em;
      }
    }
  </style>
</head>
<body>
  <section id="placeholder">
    <h1>Soon. I hope.</h1>
    <a href="http://patrickshampine.com">(¯\_(ツ)_/¯)</a>
  </section>
</body>
</html>
