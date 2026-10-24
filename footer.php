<?php
if (!isset($profile)) {
    http_response_code(404);
    exit;
}
?>
  <footer class="site-footer"><div class="container footer-inner"><p>© <span id="current-year"><?= portfolio_e(date('Y')) ?></span> <?= portfolio_e($profile['name']) ?></p><p>Thoughtful support. Organized operations.</p><a href="#home">Back to top</a></div></footer>
  <div class="toast" id="toast" role="status" aria-live="polite" aria-atomic="true"></div>
</body>
</html>
