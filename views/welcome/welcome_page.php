<!doctype html>
<html>
	<head>
	  <title><?php echo @$this->title; ?></title>
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>public/images/beech_16.png">
    <style>
    * {
        padding: 0;
        margin: 0;
      }
      body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        position: relative;
        min-height: 100vh;
        font-family: Hack, monospace;
      }
      div {
        color: #727272;
        text-align: center;
      }
      label {
        color: #ccc;
        text-transform: uppercase;
        transition: all 1s ease-in-out;
        position: relative;
      }
      label::before {
        content: attr(data-item);
        transition: all 1s ease-in-out;
        color: #78b86d;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        width: 0;
        overflow: hidden;
      }
      label:hover::before {
        width: 100%;
      }
      footer {
        position: absolute;
        font-size: 12px;
        bottom: 0;
        width: 100%;
        height: 60px;
        line-height: 60px;
        font-size: 14px;
        background-color: #f1f1f1;
        color: #000000;
        text-align: center;
      }
      footer a {
        text-decoration: none;
        color: inherit;
        border-bottom: 1px solid;
      }
      footer a:hover {
        border-bottom: 1px transparent;
      }
    </style>
</head>
<body>

  <div class="flex-center position-ref full-height">
      <div class="content">
          <div class="title text-muted">
              <h1 style="font-weight: bold; padding: 10px; color: #ccc !important">Welcome to PHP <label data-item='beech'>beech</label> framework</h1>
              <div>
                <i>#Make it by yourself</i>
              </div>
              <img src='<?php echo BASE_URL; ?>public/images/beech_LTSx2.png' width='390' />
              <h3><a href="https://github.com/bombkiml/phpbeech#php-beech-framework-lts" target="_blank">Documentation</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="https://github.com/bombkiml/beech-cli#beech-command-line-interface-cli" target="_blank">Using with Beech CLI</a></h3>
          </div>
      </div>
  </div>

  <footer>
    <div class="footer-copyright text-center">&copy; Developed with ❤️</i> by
      <a href="https://github.com/bombkiml/phpbeech" class="white-text" target="_blank">bombkiml</a>. <a href="https://github.com/bombkiml" target="_blank">Check my other repo. </a>
    </div>
  </footer>
</body>
</html>
