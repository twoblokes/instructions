<?php 

  include '../includes/header.php';

  // Edit these variables per project
  $clientName        = 'Test Client';
  $clientsite        = 'http://testclient.com';

?>
  
    <title><?php echo $clientName; ?> | Client Instructions | Two Blokes</title>

  </head>

  <body>

    <header class="main-header">
      <h1 class="client-name"><?php echo $clientName; ?></h1>
      <h1 class="client-name-again"><?php echo $clientName; ?></h1>
    </header>

    <?php include '../includes/sidebar.php'; ?>

    <section>
      <header>
        <h2>Login</h2>
      </header>
      <main>
        <ul>
          <li>Go to this url - <a href="<?php echo $clientsite ?>/wp-admin"><?php echo $clientsite ?>/wp-admin</a></li>
          <li>Username: <strong><?php echo $clientName ?></strong></li>
          <li>Password: <strong>password</strong></li>
        </ul>
        <p><span class="alert">Super important:</span> Change password as soon as you log in.</p>
      </main>
    </section>

    <section>
      <header>
        <h2>Add Post</h2>
      </header>
      <main>
        <p>Sentance here, something you may need to say before or after a list. Say before or after a list.</p>
        <ul>
          <li>Login, click '<strong>Posts</strong>' in the left menu.</li>
          <li>Click '<strong>Add New</strong>' at the top.</li>
          <li><span class="alert">Here is a text alert. Something important to tell the user? Use span class 'alert'.</span></li>
        </ul>
      </main>
    </section>

    <section>
      <header>
        <h2>Edit Post</h2>
      </header>
      <main>
        <p>Sentance here, something you may need to say before or after a list. Say before or after a list.</p>
        <ul>
          <li>Login, click '<strong>Posts</strong>' in the left menu.</li>
          <li>Click '<strong>Add New</strong>' at the top.</li>
        </ul>
      </main>
    </section>

    <section>
      <header>
        <h2>Outro</h2>
      </header>
      <p>Just a text card will work nicely too bro. Just a text card will work nicely too bro. Just a text card will work nicely too bro. Just a text card will work nicely too bro. Just a text card will work nicely too bro. Just a text card will work nicely too bro. Just a text card will work nicely too bro. </p>
    </section>

<?php include '../includes/footer.php'; ?>