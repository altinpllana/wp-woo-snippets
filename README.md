<h1 align="center">⚡ wp-woo-snippets</h1>

<p align="center">
  Battle-tested WordPress &amp; WooCommerce snippets for <b>performance</b>, <b>security</b> and <b>conversions</b>.<br/>
  Pulled from real client builds at <a href="https://bombstart.tech">Bombstart</a>.
</p>

<p align="center">
  <img src="https://img.shields.io/badge/WordPress-6.x-21759b?style=for-the-badge&logo=wordpress&logoColor=white&labelColor=0d1117" />
  <img src="https://img.shields.io/badge/WooCommerce-9.x-96588a?style=for-the-badge&logo=woocommerce&logoColor=white&labelColor=0d1117" />
  <img src="https://img.shields.io/badge/PHP-8.1+-777bb4?style=for-the-badge&logo=php&logoColor=white&labelColor=0d1117" />
  <img src="https://img.shields.io/badge/license-MIT-00ff9c?style=for-the-badge&labelColor=0d1117" />
</p>

## 📦 Snippets

| Area | Snippet | What it does |
|---|---|---|
| 🚀 Performance | [`disable-emojis.php`](performance/disable-emojis.php) | Removes emoji JS/CSS from every page |
| 🚀 Performance | [`woo-disable-cart-fragments.php`](performance/woo-disable-cart-fragments.php) | Kills cart-fragments AJAX where it isn't needed |
| 🚀 Performance | [`elementor-disable-google-fonts.php`](performance/elementor-disable-google-fonts.php) | Stops Elementor pulling fonts from Google's CDN |
| 🚀 Performance | [`preload-lcp-image.php`](performance/preload-lcp-image.php) | Preloads the featured image for a faster LCP |
| 🚀 Performance | [`limit-revisions-heartbeat.php`](performance/limit-revisions-heartbeat.php) | Slows Heartbeat and caps revisions |
| 🚀 Performance | [`cleanup-wp-head.php`](performance/cleanup-wp-head.php) | Strips noisy tags from `<head>` |
| 🔐 Security | [`security-headers.php`](security/security-headers.php) | Adds baseline HTTP security headers |
| 🔐 Security | [`disable-xmlrpc.php`](security/disable-xmlrpc.php) | Disables XML-RPC and the pingback header |
| 🛒 WooCommerce | [`woo-free-shipping-progress.php`](woocommerce/woo-free-shipping-progress.php) | "Add X more for free shipping" notice |
| 🛒 WooCommerce | [`woo-hide-out-of-stock-variations.php`](woocommerce/woo-hide-out-of-stock-variations.php) | Hides out-of-stock variations |
| 🛒 WooCommerce | [`woo-min-order-amount.php`](woocommerce/woo-min-order-amount.php) | Enforces a minimum order subtotal |

## 🛠️ Usage

1. Pick a snippet.
2. Drop it into `wp-content/mu-plugins/` (loads automatically) **or** paste into a child theme's `functions.php` / a snippets plugin.
3. Test on staging first, then ship.

## 🤝 Contributing

PRs welcome — keep snippets small, documented, and WordPress Coding Standards-friendly.

## 📄 License

MIT © [Altin Pllana](https://github.com/altinpllana)
