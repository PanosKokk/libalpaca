<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>ALPaCA</title>
  <meta name="description" content="">

  <link rel="stylesheet" href="main.css">
</head>


<body>

  <div class="page-content">
    <div class="wrapper">
      <div class="post">

        <header class="post-header">
          <h1 class="post-title">libalpaca</h1>
          <h5 class="post-description">Dynamic PHP page <a href="index.html">[load static]</a></h5>
        </header>

        <img src="alpacas-in-a-field.jpg" width="700"></img>

        <article class="post-content ALPaCA clearfix">
          <p>This site demonstrates the use of libalpaca. If served on a
            libalpaca-enabled webserver (currently only nginx with ngx_http_alpaca_module), the content will be padded.
          </p>

          <p>Website Fingerprinting attacks allow an adversary to predict the websites
            visited by a victim via an encrypted tunnel (e.g., Tor).</p>

          <p>ALPaCA is an application-layer server-side Website Fingerprinting defence.
            This means it runs as a webserver module (e.g., Apache or Nginx), and it
            operates by inserting padding to the content of the served web pages (e.g.,
            pictures, HTML or CSS files) to prevent fingerprinting.</p>

          <p>It was proposed in <a href="#cherubin2017website">(Cherubin, Hayes, &amp; Juarez, 2017)</a>, together with
            LLaMA, a
            client-side defence.</p>

          <p>We are currently developing ALPaCA as an open source library,
            <a href="https://github.com/camelids/libalpaca">libalpaca</a>, which in the future will
            be used by the respective Apache or Nginx module for deployment on websites
            or .onion sites.</p>

          <h3 id="references">References</h3>

          <ol class="bibliography">
            <li>

              <div id="cherubin2017website">

                <span class="title">Website Fingerprinting Defenses at the Application Layer</span>
                <span class="author">




                  <em>Cherubin, Giovanni</em>,








                  Hayes, Jamie,









                  and Juarez, Marc





                </span>

                <span class="periodical">

                  <em>Proceedings on Privacy Enhancing Technologies</em>



                  2017

                  <!-- Used for talks -->

                  <!-- Awards -->

                </span>


                <span class="links">

                  [<a class="abstract">Abs</a>]



                  [<a
                    href="https://www.degruyter.com/downloadpdf/j/popets.2017.2017.issue-2/popets-2017-0023/popets-2017-0023.pdf"
                    target="_blank">Paper</a>]







                  [<a href="https://github.com/camelids" target="_blank">Code</a>]


                </span>

                <!-- Hidden abstract block -->

                <span class="abstract hidden">
                  <p>We propose two application-layer Website Fingerprinting defences:
                    one server-side (ALPaCA), and one client-side (LLaMA).
                    Both are easy to deploy, and indeed we are currently implementing
                    ALPaCA as an Apache and Nginx module
                    (https://github.com/camelids/libalpaca).</p>
                </span>

              </div>
            </li>
          </ol>

        </article>
      </div>

    </div>
  </div>
</body>

</html>