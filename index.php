<!DOCTYPE html>
<html>

<head>
  <title>CUNNY - CUTE AND FUNNY</title>
  <meta charset="utf-8" />
  <meta name="Description" content="Find cute and funny anime girl pictures here!.">
  <meta name="keywords" content="Waifu, Anime Pics, Waifu Pics, Anime Picture, Anime Image, Anime Wallpaper">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="assets/css/main.css" />
  <link href="//bit.ly/ophellia" rel="icon">
  <meta name="robots" content="index, follow">
  <noscript>
    <link rel="stylesheet" href="assets/css/noscript.css" />
  </noscript>
</head>

<body class="is-preload">
  <!-- Wrapper -->
  <div id="wrapper">
    <!-- Header -->
    <header id="header">
      <h1>
        <a href="/"><strong>CUTE AND FUNNY</strong> by ELLIOTTOPHELLIA</a>
      </h1>
      <nav>
        <ul>
          <li><a href="https://kyoko.rei.my.id" class="solid">API</a></li>
          <li>
            <a href="#footer" class="solid">MORE</a>
          </li>
          <li><a href="https://rei.my.id" class="solid">DONATE</a></li>
        </ul>
      </nav>
    </header>

    <!-- Main -->
    <div id="main">
      <?php
      $queryString = @$_SERVER['QUERY_STRING'];
      $page = 'sfw';
      if (!empty($queryString)) {
        $queryValue = preg_replace('/^(\?)/', '', $queryString);
        $page = $queryValue;
      }
      $url = 'https://kyoko.rei.my.id/api/' . $page . '.php?r=12';
      $response = file_get_contents($url);
      $data = json_decode($response, true);

      if ($data['apiStatus'] === 'success') {
        $imageUrls = $data['apiResult']['url'];

        foreach ($imageUrls as $imageUrl) {
          echo '<article class="thumb">';
          echo '<a href="' . $imageUrl . '" class="image">';
          echo '<img src="' . $imageUrl . '" alt="">';
          echo '</a><a href="' . $imageUrl . '"><i><b>' . $imageUrl . '</b></i></a>';
          echo '</article>';
        }
      }
      ?>
    </div>

    <!-- Footer -->
    <footer id="footer" class="panel">
      <div class="inner split">
        <div>
          <section>
            <h2>SFW</h2>
            <button class="small"><a href="?">WAIFU</a></button> <button class="small"><a href="?sfwNeko">NEKO</a></button> <button class="small"><a href="?blush">BLUSH</a></button> <button class="small"><a href="?bonk">BONK</a></button> <button class="small"><a href="?hug">HUG</a></button> <button class="small"><a href="?kiss">KISS</a></button> <button class="small"><a href="?slap">SLAP</a></button> <button class="small"><a href="?smile">SMILE</a></button> <button class="small"><a href="?smug">SMUG</a></button> <button class="small"><a href="?wave">WAVE</a></button> <button class="small"><a href="?wink">WINK</a></button> <button class="small"><a href="?awoo">AWOO</a></button> <button class="small"><a href="?bite">BITE</a></button> <button class="small"><a href="?bully">BULLY</a></button> <button class="small"><a href="?cry">CRY</a></button> <button class="small"><a href="?cuddle">CUDDLE</a></button> <button class="small"><a href="?dance">DANCE</a></button> <button class="small"><a href="?glomp">GLOMP</a></button> <button class="small"><a href="?handhold">HANDHOLD</a></button> <button class="small"><a href="?happy">HAPPY</a></button> <button class="small"><a href="?highfive">HIGHFIVE</a></button> <button class="small"><a href="?kick">KICK</a></button> <button class="small"><a href="?kill">KILL</a></button> <button class="small"><a href="?lick">LICK</a></button> <button class="small"><a href="?nom">NOM</a></button> <button class="small"><a href="?pat">PAT</a></button> <button class="small"><a href="?poke">POKE</a></button> <button class="small"><a href="?yeet">YEET</a></button>
          </section>
        </div>
        <br />
        <div>
          <section>
            <h2>NSFW</h2>
            <button class="small"><a href="?nsfw">WAIFU</a></button> <button class="small"><a href="?nsfwNeko">NEKO</a></button> <button class="small"><a href="?trap">TRAP</a></button> <button class="small"><a href="?blowjob">BLOWJOB</a></button>
          </section>
        </div>
      </div>
    </footer>
  </div>

  <!-- Scripts -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery.poptrox.min.js"></script>
  <script src="assets/js/browser.min.js"></script>
  <script src="assets/js/breakpoints.min.js"></script>
  <script src="assets/js/util.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>