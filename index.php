<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (isset($_GET['action']) && $_GET['action'] == "add") {
	$id = intval($_GET['id']);
	if (isset($_SESSION['cart'][$id])) {
		$_SESSION['cart'][$id]['quantity']++;
	} else {
		$sql_p = "SELECT * FROM products WHERE id={$id}";
		$query_p = mysqli_query($con, $sql_p);
		if (mysqli_num_rows($query_p) != 0) {
			$row_p = mysqli_fetch_array($query_p);
			$_SESSION['cart'][$row_p['id']] = array("quantity" => 1, "price" => $row_p['productPrice']);

		} else {
			$message = "Product ID is invalid";
		}
	}
	echo "<script>alert('Product has been added to the cart')</script>";
	echo "<script type='text/javascript'> document.location ='my-cart.php'; </script>";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	

	<script>(function (html) { html.className = html.className.replace(/\bno-js\b/, 'js') })(document.documentElement);</script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<!-- This site is optimized with the Yoast SEO Premium plugin v20.9 (Yoast SEO v20.9) - https://yoast.com/wordpress/plugins/seo/ -->
	<meta property="og:locale" content="vi_VN" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Trang chủ" />
	<meta property="og:url" content="https://phiphiperformance.vn/" />
	<meta property="og:site_name" content="Tiến Đạt Workshop - Nâng Cấp Xe Hơi Chuyên Nghiệp" />
	<meta property="article:modified_time" content="2023-07-09T20:25:12+00:00" />
	<meta property="og:image:width" content="1280" />
	<meta property="og:image:height" content="444" />
	<meta property="og:image:type" content="image/jpeg" />
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:label1" content="Ước tính thời gian đọc" />
	<meta name="twitter:data1" content="2 phút" />
	


	<!-- Search Engine Optimization by Rank Math - https://rankmath.com/ -->

	
	<link rel='dns-prefetch' href='//use.fontawesome.com' />
	<link rel='dns-prefetch' href='//maxcdn.bootstrapcdn.com' />
	<link rel='dns-prefetch' href='//fonts.googleapis.com' />
	<link rel="alternate" type="application/rss+xml"
		title="Dòng thông tin Tiến Đạt Workshop - Nâng Cấp Xe Hơi Chuyên Nghiệp &raquo;"
		href="https://phiphiperformance.vn/feed/" />
	<link rel="alternate" type="application/rss+xml"
		title="Dòng phản hồi Tiến Đạt Workshop - Nâng Cấp Xe Hơi Chuyên Nghiệp &raquo;"
		 />
	<script type="text/javascript">
		window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/phiphiperformance.vn\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.1.3" } };
		/*! This file is auto-generated */
		!function (e, a, t) { var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d"); function s(e, t) { var a = String.fromCharCode, e = (p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0), i.toDataURL()); return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL() } function c(e) { var t = a.createElement("script"); t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t) } for (o = Array("flag", "emoji"), t.supports = { everything: !0, everythingExceptFlag: !0 }, r = 0; r < o.length; r++)t.supports[o[r]] = function (e) { if (p && p.fillText) switch (p.textBaseline = "top", p.font = "600 32px Arial", e) { case "flag": return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]); case "emoji": return !s([129777, 127995, 8205, 129778, 127999], [129777, 127995, 8203, 129778, 127999]) }return !1 }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]); t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () { t.DOMReady = !0 }, t.supports.everything || (n = function () { t.readyCallback() }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () { "complete" === a.readyState && t.readyCallback() })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji))) }(window, document, window._wpemojiSettings);
	</script>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<link rel='stylesheet' id='classic-theme-styles-css'
		href='https://phiphiperformance.vn/wp-includes/css/classic-themes.min.css?ver=1' type='text/css' media='all' />
	<link rel='stylesheet' id='contact-form-7-css'
		href='https://phiphiperformance.vn/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.7.7'
		type='text/css' media='all' />
	<link rel='stylesheet' id='kk-star-ratings-css'
		href='https://phiphiperformance.vn/wp-content/plugins/kk-star-ratings/src/core/public/css/kk-star-ratings.min.css?ver=5.4.3'
		type='text/css' media='all' />
	<link rel='stylesheet' id='product_category_dropdowns-css'
		href='https://phiphiperformance.vn/wp-content/plugins/product-category-dropdowns/view/frontend/web/main.css?ver=6.1.3'
		type='text/css' media='all' />
	<link rel='stylesheet' id='twenty20-style-css'
		href='https://phiphiperformance.vn/wp-content/plugins/twenty20/assets/css/twenty20.css?ver=1.6.1'
		type='text/css' media='all' />
	<style id='woocommerce-inline-inline-css' type='text/css'>
		.woocommerce form .form-row .required {
			visibility: visible;
		}
	</style>
	<link rel='stylesheet' id='jquery.contactus.css-css'
		href='https://phiphiperformance.vn/wp-content/plugins/ar-contactus/res/css/jquery.contactus.min.css?ver=2.0.4'
		type='text/css' media='all' />
	<link rel='stylesheet' id='contactus.generated.mobile.css-css'
		href='https://phiphiperformance.vn/wp-content/plugins/ar-contactus/res/css/generated-mobile.css?ver=1688518644'
		type='text/css' media='all' />
	<link rel='stylesheet' id='contactus.fa.css-css'
		href='https://use.fontawesome.com/releases/v5.8.1/css/all.css?ver=2.0.4' type='text/css' media='all' />
	<link rel='stylesheet' id='yith-wcbr-css'
		href='https://phiphiperformance.vn/wp-content/plugins/yith-woocommerce-brands-add-on-premium/assets/css/yith-wcbr.css?ver=6.1.3'
		type='text/css' media='all' />
	<link rel='stylesheet' id='jquery-swiper-css'
		href='https://phiphiperformance.vn/wp-content/plugins/yith-woocommerce-brands-add-on-premium/assets/css/swiper.css?ver=4.2.2'
		type='text/css' media='all' />
	<link rel='stylesheet' id='select2-css'
		href='https://phiphiperformance.vn/wp-content/plugins/woocommerce/assets/css/select2.css?ver=7.7.2'
		type='text/css' media='all' />
	<link rel='stylesheet' id='yith-wcbr-shortcode-css'
		href='https://phiphiperformance.vn/wp-content/plugins/yith-woocommerce-brands-add-on-premium/assets/css/yith-wcbr-shortcode.css?ver=6.1.3'
		type='text/css' media='all' />
	<link rel='stylesheet' id='yith_wccl_frontend-css'
		href='https://phiphiperformance.vn/wp-content/plugins/yith-woocommerce-color-label-variations-premium/assets/css/yith-wccl.css?ver=1.10.2'
		type='text/css' media='all' />
	<style id='yith_wccl_frontend-inline-css' type='text/css'>
		.select_option .yith_wccl_tooltip>span {
			background: #2699d9;
			color: #ffffff;
		}

		.select_option .yith_wccl_tooltip.bottom span:after {
			border-bottom-color: #2699d9;
		}

		.select_option .yith_wccl_tooltip.top span:after {
			border-top-color: #2699d9;
		}
	</style>
	<link rel='stylesheet' id='dashicons-css'
		href='https://phiphiperformance.vn/wp-includes/css/dashicons.min.css?ver=6.1.3' type='text/css' media='all' />
	<style id='dashicons-inline-css' type='text/css'>
		[data-font="Dashicons"]:before {
			font-family: 'Dashicons' !important;
			content: attr(data-icon) !important;
			speak: none !important;
			font-weight: normal !important;
			font-variant: normal !important;
			text-transform: none !important;
			line-height: 1 !important;
			font-style: normal !important;
			-webkit-font-smoothing: antialiased !important;
			-moz-osx-font-smoothing: grayscale !important;
		}
	</style>
	<link rel='stylesheet' id='flatsome-ionicons-css'
		href='//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?ver=6.1.3' type='text/css'
		media='all' />
	<link rel='stylesheet' id='flatsome-main-css'
		href='https://phiphiperformance.vn/wp-content/themes/flatsome/assets/css/flatsome.css?ver=3.14.2'
		type='text/css' media='all' />
	<style id='flatsome-main-inline-css' type='text/css'>
		@font-face {
			font-family: "fl-icons";
			font-display: block;
			src: url(https://phiphiperformance.vn/wp-content/themes/flatsome/assets/css/icons/fl-icons.eot?v=3.14.2);
			src:
				url(https://phiphiperformance.vn/wp-content/themes/flatsome/assets/css/icons/fl-icons.eot#iefix?v=3.14.2) format("embedded-opentype"),
				url(https://phiphiperformance.vn/wp-content/themes/flatsome/assets/css/icons/fl-icons.woff2?v=3.14.2) format("woff2"),
				url(https://phiphiperformance.vn/wp-content/themes/flatsome/assets/css/icons/fl-icons.ttf?v=3.14.2) format("truetype"),
				url(https://phiphiperformance.vn/wp-content/themes/flatsome/assets/css/icons/fl-icons.woff?v=3.14.2) format("woff"),
				url(https://phiphiperformance.vn/wp-content/themes/flatsome/assets/css/icons/fl-icons.svg?v=3.14.2#fl-icons) format("svg");
		}
	</style>
	<link rel='stylesheet' id='flatsome-shop-css'
		href='https://phiphiperformance.vn/wp-content/themes/flatsome/assets/css/flatsome-shop.css?ver=3.14.2'
		type='text/css' media='all' />
	<link rel='stylesheet' id='flatsome-style-css'
		href='https://phiphiperformance.vn/wp-content/themes/khoweb/style.css?ver=3.0' type='text/css' media='all' />
	<link rel='stylesheet' id='flatsome-googlefonts-css'
		href='//fonts.googleapis.com/css?family=Open+Sans%3Aregular%2C700%2Cregular%7CRoboto%3Aregular%2Cregular%7CDM+Sans%3Aregular%2Cregular&#038;display=swap&#038;ver=3.9'
		type='text/css' media='all' />
	<link rel='stylesheet' id='prdctfltr-css'
		href='https://phiphiperformance.vn/wp-content/plugins/prdctfltr/includes/css/style.min.css?ver=7.2.8'
		type='text/css' media='all' />
	<script type="text/template" id="tmpl-variation-template">
	<div class="woocommerce-variation-description">{{{ data.variation.variation_description }}}</div>
	<div class="woocommerce-variation-price">{{{ data.variation.price_html }}}</div>
	<div class="woocommerce-variation-availability">{{{ data.variation.availability_html }}}</div>
</script>
	<script type="text/template" id="tmpl-unavailable-variation-template">
	<p>Rất tiếc, sản phẩm này hiện không tồn tại. Hãy chọn một phương thức kết hợp khác.</p>
</script>
	<script type='text/javascript' src='https://phiphiperformance.vn/wp-includes/js/jquery/jquery.min.js?ver=3.6.1'
		id='jquery-core-js'></script>
	<script type='text/javascript'
		src='https://phiphiperformance.vn/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2'
		id='jquery-migrate-js'></script>
	<script type='text/javascript' src='https://phiphiperformance.vn/wp-includes/js/jquery/ui/core.min.js?ver=1.13.2'
		id='jquery-ui-core-js'></script>
	<script type='text/javascript'
		src='https://phiphiperformance.vn/wp-content/plugins/product-category-dropdowns/view/frontend/web/main.js?ver=6.1.3'
		id='product_category_dropdowns-js'></script>
	<script type='text/javascript' id='jquery.contactus-js-extra'>
		/* <![CDATA[ */
		var arCUVars = { "url": "https:\/\/phiphiperformance.vn\/wp-admin\/admin-ajax.php", "version": "2.0.4", "_wpnonce": "<input type=\"hidden\" id=\"_wpnonce\" name=\"_wpnonce\" value=\"7844c43695\" \/><input type=\"hidden\" name=\"_wp_http_referer\" value=\"\/\" \/>" };
/* ]]> */
	</script>
	<script type='text/javascript'
		src='https://phiphiperformance.vn/wp-content/plugins/ar-contactus/res/js/jquery.contactus.min.js?ver=2.0.4'
		id='jquery.contactus-js'></script>
	<script type='text/javascript'
		src='https://phiphiperformance.vn/wp-content/plugins/ar-contactus/res/js/scripts.js?ver=2.0.4'
		id='jquery.contactus.scripts-js'></script>
	<link rel="https://api.w.org/" href="https://phiphiperformance.vn/wp-json/" />
	<link rel="alternate" type="application/json" href="https://phiphiperformance.vn/wp-json/wp/v2/pages/2560" />
	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://phiphiperformance.vn/xmlrpc.php?rsd" />
	<link rel="wlwmanifest" type="application/wlwmanifest+xml"
		href="https://phiphiperformance.vn/wp-includes/wlwmanifest.xml" />
	<meta name="generator" content="WordPress 6.1.3" />
	<link rel='shortlink' href='' />
	<link rel="alternate" type="application/json+oembed"
		href="https://phiphiperformance.vn/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fphiphiperformance.vn%2F" />
	<link rel="alternate" type="text/xml+oembed"
		href="https://phiphiperformance.vn/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fphiphiperformance.vn%2F&#038;format=xml" />
	<!--[if IE]><link rel="stylesheet" type="text/css" href="https://phiphiperformance.vn/wp-content/themes/flatsome/assets/css/ie-fallback.css"><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js"></script><script>var head = document.getElementsByTagName('head')[0],style = document.createElement('style');style.type = 'text/css';style.styleSheet.cssText = ':before,:after{content:none !important';head.appendChild(style);setTimeout(function(){head.removeChild(style);}, 0);</script><script src="https://phiphiperformance.vn/wp-content/themes/flatsome/assets/libs/ie-flexibility.js"></script><![endif]--><!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-WRJXWL24G3"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'G-WRJXWL24G3');
	</script> <noscript>
		<style>
			.woocommerce-product-gallery {
				opacity: 1 !important;
			}
		</style>
	</noscript>
	<link rel="icon"
		href="assets/images/sunnyPlant.png"
		sizes="32x32" />
	<link rel="icon"
		href="assets/images/sunnyPlant.png"
		sizes="192x192" />
	<link rel="apple-touch-icon"
		href="https://phiphiperformance.vn/wp-content/uploads/2022/04/cropped-logo-phiphiperfomance-180x180.jpg" />
	<meta name="msapplication-TileImage"
		content="https://phiphiperformance.vn/wp-content/uploads/2022/04/cropped-logo-phiphiperfomance-270x270.jpg" />
	<meta name="generator" content="Product Filter for WooCommerce" />
	<style id="custom-css" type="text/css">
		:root {
			--primary-color: #0b2154;
		}

		.full-width .ubermenu-nav,
		.container,
		.row {
			max-width: 100%
		}

		.row.row-collapse {
			max-width: 100%
		}

		.row.row-small {
			max-width: 100%
		}

		.row.row-large {
			max-width: 100%
		}

		.header-main {
			height: 120px
		}

		#logo img {
			max-height: 120px
		}

		#logo {
			width: 218px;
		}

		.header-bottom {
			min-height: 45px
		}

		.header-top {
			min-height: 34px
		}

		.transparent .header-main {
			height: 150px
		}

		.transparent #logo img {
			max-height: 150px
		}

		.has-transparent+.page-title:first-of-type,
		.has-transparent+#main>.page-title,
		.has-transparent+#main>div>.page-title,
		.has-transparent+#main .page-header-wrapper:first-of-type .page-title {
			padding-top: 230px;
		}

		.header.show-on-scroll,
		.stuck .header-main {
			height: 50px !important
		}

		.stuck #logo img {
			max-height: 50px !important
		}

		.search-form {
			width: 80%;
		}

		.header-bg-color,
		.header-wrapper {
			background-color: rgba(255, 255, 255, 0)
		}

		.header-bottom {
			background-color: #000000
		}

		.header-main .nav>li>a {
			line-height: 60px
		}

		.stuck .header-main .nav>li>a {
			line-height: 30px
		}

		.header-bottom-nav>li>a {
			line-height: 45px
		}

		@media (max-width: 549px) {
			.header-main {
				height: 70px
			}

			#logo img {
				max-height: 70px
			}
		}

		.nav-dropdown {
			font-size: 100%
		}

		.header-top {
			background-color: #0b2154 !important;
		}

		/* Color */
		.accordion-title.active,
		.has-icon-bg .icon .icon-inner,
		.logo a,
		.primary.is-underline,
		.primary.is-link,
		.badge-outline .badge-inner,
		.nav-outline>li.active>a,
		.nav-outline>li.active>a,
		.cart-icon strong,
		[data-color='primary'],
		.is-outline.primary {
			color: #0b2154;
		}

		/* Color !important */
		[data-text-color="primary"] {
			color: #0b2154 !important;
		}

		/* Background Color */
		[data-text-bg="primary"] {
			background-color: #0b2154;
		}

		/* Background */
		.scroll-to-bullets a,
		.featured-title,
		.label-new.menu-item>a:after,
		.nav-pagination>li>.current,
		.nav-pagination>li>span:hover,
		.nav-pagination>li>a:hover,
		.has-hover:hover .badge-outline .badge-inner,
		button[type="submit"],
		.button.wc-forward:not(.checkout):not(.checkout-button),
		.button.submit-button,
		.button.primary:not(.is-outline),
		.featured-table .title,
		.is-outline:hover,
		.has-icon:hover .icon-label,
		.nav-dropdown-bold .nav-column li>a:hover,
		.nav-dropdown.nav-dropdown-bold>li>a:hover,
		.nav-dropdown-bold.dark .nav-column li>a:hover,
		.nav-dropdown.nav-dropdown-bold.dark>li>a:hover,
		.is-outline:hover,
		.tagcloud a:hover,
		.grid-tools a,
		input[type='submit']:not(.is-form),
		.box-badge:hover .box-text,
		input.button.alt,
		.nav-box>li>a:hover,
		.nav-box>li.active>a,
		.nav-pills>li.active>a,
		.current-dropdown .cart-icon strong,
		.cart-icon:hover strong,
		.nav-line-bottom>li>a:before,
		.nav-line-grow>li>a:before,
		.nav-line>li>a:before,
		.banner,
		.header-top,
		.slider-nav-circle .flickity-prev-next-button:hover svg,
		.slider-nav-circle .flickity-prev-next-button:hover .arrow,
		.primary.is-outline:hover,
		.button.primary:not(.is-outline),
		input[type='submit'].primary,
		input[type='submit'].primary,
		input[type='reset'].button,
		input[type='button'].primary,
		.badge-inner {
			background-color: #0b2154;
		}

		/* Border */
		.nav-vertical.nav-tabs>li.active>a,
		.scroll-to-bullets a.active,
		.nav-pagination>li>.current,
		.nav-pagination>li>span:hover,
		.nav-pagination>li>a:hover,
		.has-hover:hover .badge-outline .badge-inner,
		.accordion-title.active,
		.featured-table,
		.is-outline:hover,
		.tagcloud a:hover,
		blockquote,
		.has-border,
		.cart-icon strong:after,
		.cart-icon strong,
		.blockUI:before,
		.processing:before,
		.loading-spin,
		.slider-nav-circle .flickity-prev-next-button:hover svg,
		.slider-nav-circle .flickity-prev-next-button:hover .arrow,
		.primary.is-outline:hover {
			border-color: #0b2154
		}

		.nav-tabs>li.active>a {
			border-top-color: #0b2154
		}

		.widget_shopping_cart_content .blockUI.blockOverlay:before {
			border-left-color: #0b2154
		}

		.woocommerce-checkout-review-order .blockUI.blockOverlay:before {
			border-left-color: #0b2154
		}

		/* Fill */
		.slider .flickity-prev-next-button:hover svg,
		.slider .flickity-prev-next-button:hover .arrow {
			fill: #0b2154;
		}

		/* Background Color */
		[data-icon-label]:after,
		.secondary.is-underline:hover,
		.secondary.is-outline:hover,
		.icon-label,
		.button.secondary:not(.is-outline),
		.button.alt:not(.is-outline),
		.badge-inner.on-sale,
		.button.checkout,
		.single_add_to_cart_button,
		.current .breadcrumb-step {
			background-color: #d81324;
		}

		[data-text-bg="secondary"] {
			background-color: #d81324;
		}

		/* Color */
		.secondary.is-underline,
		.secondary.is-link,
		.secondary.is-outline,
		.stars a.active,
		.star-rating:before,
		.woocommerce-page .star-rating:before,
		.star-rating span:before,
		.color-secondary {
			color: #d81324
		}

		/* Color !important */
		[data-text-color="secondary"] {
			color: #d81324 !important;
		}

		/* Border */
		.secondary.is-outline:hover {
			border-color: #d81324
		}

		body {
			font-size: 100%;
		}

		@media screen and (max-width: 549px) {
			body {
				font-size: 100%;
			}
		}

		body {
			font-family: "Open Sans", sans-serif
		}

		body {
			font-weight: 0
		}

		body {
			color: #333333
		}

		.nav>li>a {
			font-family: "Roboto", sans-serif;
		}

		.mobile-sidebar-levels-2 .nav>li>ul>li>a {
			font-family: "Roboto", sans-serif;
		}

		.nav>li>a {
			font-weight: 0;
		}

		.mobile-sidebar-levels-2 .nav>li>ul>li>a {
			font-weight: 0;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		.heading-font,
		.off-canvas-center .nav-sidebar.nav-vertical>li>a {
			font-family: "Open Sans", sans-serif;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		.heading-font,
		.banner h1,
		.banner h2 {
			font-weight: 700;
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6,
		.heading-font {
			color: #0b2154;
		}

		.alt-font {
			font-family: "DM Sans", sans-serif;
		}

		.alt-font {
			font-weight: 0 !important;
		}

		.header:not(.transparent) .header-nav-main.nav>li>a {
			color: #000000;
		}

		.header:not(.transparent) .header-nav-main.nav>li>a:hover,
		.header:not(.transparent) .header-nav-main.nav>li.active>a,
		.header:not(.transparent) .header-nav-main.nav>li.current>a,
		.header:not(.transparent) .header-nav-main.nav>li>a.active,
		.header:not(.transparent) .header-nav-main.nav>li>a.current {
			color: #d81324;
		}

		.header-nav-main.nav-line-bottom>li>a:before,
		.header-nav-main.nav-line-grow>li>a:before,
		.header-nav-main.nav-line>li>a:before,
		.header-nav-main.nav-box>li>a:hover,
		.header-nav-main.nav-box>li.active>a,
		.header-nav-main.nav-pills>li>a:hover,
		.header-nav-main.nav-pills>li.active>a {
			color: #FFF !important;
			background-color: #d81324;
		}

		.header:not(.transparent) .header-bottom-nav.nav>li>a {
			color: #ffffff;
		}

		.header:not(.transparent) .header-bottom-nav.nav>li>a:hover,
		.header:not(.transparent) .header-bottom-nav.nav>li.active>a,
		.header:not(.transparent) .header-bottom-nav.nav>li.current>a,
		.header:not(.transparent) .header-bottom-nav.nav>li>a.active,
		.header:not(.transparent) .header-bottom-nav.nav>li>a.current {
			color: #cc2c12;
		}

		.header-bottom-nav.nav-line-bottom>li>a:before,
		.header-bottom-nav.nav-line-grow>li>a:before,
		.header-bottom-nav.nav-line>li>a:before,
		.header-bottom-nav.nav-box>li>a:hover,
		.header-bottom-nav.nav-box>li.active>a,
		.header-bottom-nav.nav-pills>li>a:hover,
		.header-bottom-nav.nav-pills>li.active>a {
			color: #FFF !important;
			background-color: #cc2c12;
		}

		a {
			color: #0b2154;
		}

		a:hover {
			color: #b20000;
		}

		.tagcloud a:hover {
			border-color: #b20000;
			background-color: #b20000;
		}

		.widget a {
			color: #0b2154;
		}

		.widget a:hover {
			color: #b20000;
		}

		.widget .tagcloud a:hover {
			border-color: #b20000;
			background-color: #b20000;
		}

		.is-divider {
			background-color: #2e67b1;
		}

		.shop-page-title.featured-title .title-overlay {
			background-color: #f2f2f2;
		}

		.current .breadcrumb-step,
		[data-icon-label]:after,
		.button#place_order,
		.button.checkout,
		.checkout-button,
		.single_add_to_cart_button.button {
			background-color: #dd3333 !important
		}

		.badge-inner.on-sale {
			background-color: #dd3333
		}

		.badge-inner.new-bubble-auto {
			background-color: #0b2154
		}

		.badge-inner.new-bubble {
			background-color: #2e67b1
		}

		.price del,
		.product_list_widget del,
		del .woocommerce-Price-amount {
			color: #dd3333;
		}

		ins .woocommerce-Price-amount {
			color: #000000;
		}

		@media screen and (min-width: 550px) {
			.products .box-vertical .box-image {
				min-width: 400px !important;
				width: 400px !important;
			}
		}

		.header-main .social-icons,
		.header-main .cart-icon strong,
		.header-main .menu-title,
		.header-main .header-button>.button.is-outline,
		.header-main .nav>li>a>i:not(.icon-angle-down) {
			color: #d81324 !important;
		}

		.header-main .header-button>.button.is-outline,
		.header-main .cart-icon strong:after,
		.header-main .cart-icon strong {
			border-color: #d81324 !important;
		}

		.header-main .header-button>.button:not(.is-outline) {
			background-color: #d81324 !important;
		}

		.header-main .current-dropdown .cart-icon strong,
		.header-main .header-button>.button:hover,
		.header-main .header-button>.button:hover i,
		.header-main .header-button>.button:hover span {
			color: #FFF !important;
		}

		.header-main .menu-title:hover,
		.header-main .social-icons a:hover,
		.header-main .header-button>.button.is-outline:hover,
		.header-main .nav>li>a:hover>i:not(.icon-angle-down) {
			color: #d81324 !important;
		}

		.header-main .current-dropdown .cart-icon strong,
		.header-main .header-button>.button:hover {
			background-color: #d81324 !important;
		}

		.header-main .current-dropdown .cart-icon strong:after,
		.header-main .current-dropdown .cart-icon strong,
		.header-main .header-button>.button:hover {
			border-color: #d81324 !important;
		}

		.absolute-footer,
		html {
			background-color: #000000
		}

		/* Custom CSS */
		.woocommerce-product-attributes-item__label {
			white-space: nowrap;
		}

		.select_option {
			border: 2px solid #d6d3d3;
		}

		.select_box:not(.on_ptab) .select_option:hover,
		.select_option.selected {
			border: 2px solid #2699d9;
		}

		.select_option .yith_wccl_value {
			min-width: 30px;
			height: 30px;
			line-height: 26px;
		}

		.megamenu>.sub-menu {
			width: 900px;
		}

		.megamenu>.sub-menu .prdctfltr_sc {
			margin-bottom: 0 !important;
		}

		.header-search-form-wrapper .search-field,
		.header-search-form-wrapper .searchform .button.icon {
			height: 45px;
		}

		.header-search-form-wrapper .searchform .button.icon {
			width: 50px;
		}

		.search-form-categories .search_categories {
			width: 65px;
			height: 45px;
		}

		.prdctfltr_wc_regular .prdctfltr_terms_customized_select.prdctfltr_filter .prdctfltr_regular_title,
		.prdctfltr_wc_regular .prdctfltr_terms_customized_select.prdctfltr_filter .prdctfltr_regular_title {
			padding: 5px 10px;
		}

		.header-button-2 .button {
			line-height: 45px;
		}

		.section.home-category .banner-layers a.fill {
			z-index: 9;
		}

		.product-tabs>li>a {
			font-size: 120%;
			text-transform: capitalize;
		}

		.page-id-3778 .my-breadcrumbs {
			display: none;
		}

		ul.list-bai-viet {
			list-style: none outside none;
		}

		/*css filter*/
		#bymodel .prdctfltr_woocommerce .prdctfltr_filter .prdctfltr_search_terms .prdctfltr_search_terms_input {
			width: 98% !important;
		}

		#bymodel .prdctfltr_woocommerce_ordering .prdctfltr_regular_title {
			font-size: 25px;
			text-align: center;
		}

		#bymodel .prdctfltr_woocommerce.pf_default .prdctfltr_woocommerce_filter_submit {
			margin-right: 0;
			background-color: #2699d9;
			width: 100%;
		}

		/* Custom CSS Tablet */
		@media (max-width: 849px) {
			.video-container {
				position: relative;
				padding-bottom: 56.25%;
			}

			.video-container iframe {
				position: absolute;
				top: 0;
				left: 0;
				width: 100%;
				height: 100%;
			}

			.video {
				aspect-ratio: 16 / 9;
				width: 100%;
			}

			iframe {
				height: 100%;
			}

			#bymodel .prdctfltr_woocommerce_ordering .prdctfltr_regular_title {
				font-size: 19px;
			}

			#bymodel .prdctfltr_wc.prdctfltr_wc_regular.prdctfltr_woocommerce.pf_mod_row .prdctfltr_filter_inner {
				margin: 0;
			}
		}

		/* Custom CSS Mobile */
		@media (max-width: 549px) {
			.bf-hotline {
				position: fixed;
				bottom: 0;
				right: 0;
				z-index: 999;
				background-color: #fff;
				border-top: 1px solid #333;
				padding-top: 10px;
				padding-bottom: 10px;
			}

			.bf-hotline .icon-box-center .icon-box-img {
				margin-bottom: 0;
			}

			#timnhanh .prdctfltr_woocommerce_filter_submit {
				width: 100%;
			}

			.section.project h2 {
				transform: rotate(-90deg);
				left: -44%;
				position: absolute;
				color: #fff;
				text-transform: capitalize;
				font-size: 28px;
				top: -45%;
			}

			.archive .post-item.featured .image {
				width: 100%;
				float: left;
				padding-right: 0;
			}

			.archive .post-item.featured .box-text-post {
				width: 100%;
			}

			.my-breadcrumbs {
				padding: 30px 0;
			}

			.searchform-wrapper .search-field,
			.searchform-wrapper .searchform .button.icon {
				height: 45px;
				font-size: 14px;
			}

			.searchform-wrapper .searchform .button.icon {
				width: 50px;
			}

			.search-form-categories .search_categories {
				font-size: 14px;
			}
		}

		.label-new.menu-item>a:after {
			content: "New";
		}

		.label-hot.menu-item>a:after {
			content: "Hot";
		}

		.label-sale.menu-item>a:after {
			content: "Sale";
		}

		.label-popular.menu-item>a:after {
			content: "Popular";
		}
	</style>
	<style type="text/css" id="wp-custom-css">
		.header-bottom-nav>li>a {
			font-size: 14px;
		}

		.archive .post-item.featured .image img {
			width: 100%;
		}

		.prdctfltr_woocommerce_ordering .prdctfltr_regular_title {
			height: 50px;
			line-height: 30px;
			font-size: 14px;
			padding: 10px 15px !important;
		}

		.prdctfltr_filter label {
			margin: 0px;
			padding: 10px 0px;
		}

		.h-chat {
			position: fixed;
			width: 60px !important;
			bottom: 90px;
			right: 25px;
			left: auto;
			text-align: right;
			z-index: 9999;
		}

		.h-chat.img .img-inner {
			overflow: inherit;
		}

		.h-chat img {
			width: 60px;
			height: auto;
			animation: swing 1s ease infinite;
		}

		@media screen and (max-width: 767px) {
			.prdctfltr_wc.prdctfltr_wc_regular.prdctfltr_woocommerce.pf_select .prdctfltr_woocommerce_ordering {
				margin: 0 0px !important;
			}

			.prdctfltr_wc.prdctfltr_wc_regular.prdctfltr_woocommerce.pf_select .prdctfltr_woocommerce_ordering .prdctfltr_filter {
				padding: 0px !important;
				padding-right: 15px !important;
				padding-left: 10px !important;
			}

			.prdctfltr_wc.prdctfltr_wc_regular.prdctfltr_woocommerce .prdctfltr_woocommerce_filter_submit {
				margin-right: 5px !important;
				color: #fff;
				font-weight: 300;
			}

			.prdctfltr_wc_regular.prdctfltr_wc.prdctfltr_woocommerce.prdctfltr_scroll_default .prdctfltr_terms_customized_select .prdctfltr_add_scroll,
			.prdctfltr_wc_regular.prdctfltr_wc.prdctfltr_woocommerce.prdctfltr_scroll_active .prdctfltr_terms_customized_select .prdctfltr_add_scroll,
			.prdctfltr_wc.prdctfltr_woocommerce.pf_select.prdctfltr_scroll_default .prdctfltr_add_scroll,
			.prdctfltr_wc.prdctfltr_woocommerce.pf_select.prdctfltr_scroll_active .prdctfltr_add_scroll {
				width: calc(100% - 25px);
			}

			.prdctfltr_wc {
				margin-bottom: 0px;
			}

			a.prdctfltr_title_remove {
				display: inline-block !important;
			}

			.prdctfltr_collector_flat>span {
				font-size: 14px;
			}

			.prdctfltr_add_scroll.prdctfltr_max_height.prdctfltr_down {
				display: block !important;
				opacity: 1 !important;
				z-index: 9 !important;
				position: relative !important;
				top: 0 !important;
				width: 100% !important;
			}
		}

		@media screen and (max-width: 1440px) {

			.header-bottom-nav.nav>li>a,
			.header-button-2 .button {
				font-size: 14px;
			}
		}

		@media screen and (min-width: 767px) {
			.archive .post-item.category {
				margin-bottom: 30px
			}
		}
	</style>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="keywords" content="MediaCenter, Template, eCommerce">
	<meta name="robots" content="all">

	<title>Tiến Đạt Workshop Home Page</title>

	<!-- Bootstrap Core CSS -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<!-- Customizable CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<link rel="stylesheet" href="assets/css/green.css">
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<link rel="stylesheet" href="assets/css/owl.transitions.css">
	<!--<link rel="stylesheet" href="assets/css/owl.theme.css">-->
	<link href="assets/css/lightbox.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/animate.min.css">
	<link rel="stylesheet" href="assets/css/rateit.css">
	<link rel="stylesheet" href="assets/css/bootstrap-select.min.css">

	<!-- Demo Purpose Only. Should be removed in production -->
	<link rel="stylesheet" href="assets/css/config.css">

	<link href="assets/css/green.css" rel="alternate stylesheet" title="Green color">
	<link href="assets/css/blue.css" rel="alternate stylesheet" title="Blue color">
	<link href="assets/css/red.css" rel="alternate stylesheet" title="Red color">
	<link href="assets/css/orange.css" rel="alternate stylesheet" title="Orange color">
	<link href="assets/css/dark-green.css" rel="alternate stylesheet" title="Darkgreen color">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>

	


</head>

<body class="cnt-home">


	<!-- ============================================== HEADER ============================================== -->
	<header class="header-style-1">
		<?php include('includes/top-header.php'); ?>
		<?php include('includes/main-header.php'); ?>
		<?php include('includes/menu-bar.php'); ?>
	</header>


	<!-- ============================================== HEADER : END ============================================== -->
	<div class="" id="">
		<div class="">
			<div class="">
				<div class="row">
					<div class="">
						<!-- ========================================== SECTION – HERO ========================================= -->

						

						<!-- ========================================= SECTION – HERO : END ========================================= -->
						<!-- ============================================== INFO BOXES ============================================== -->
						
						<!-- ============================================== INFO BOXES : END ============================================== -->
					</div><!-- /.homebanner-holder -->

				</div><!-- /.row -->
				<main id="main" class="">


					<div id="content" role="main" class="content-area">
		
	
		<section class="section home-baner" id="section_950357489">
		<div class="bg section-bg fill bg-fill bg-loaded bg-loaded" >

			
			
			

		</div>

		<div class="section-content relative">
			

<div class="slider-wrapper relative hide-for-small" id="slider-1929282966" >
	<div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal"
		data-flickity-options='{
			"cellAlign": "center",
			"imagesLoaded": true,
			"lazyLoad": 1,
			"freeScroll": false,
			"wrapAround": true,
			"autoPlay": 6000,
			"pauseAutoPlayOnHover" : true,
			"prevNextButtons": true,
			"contain" : true,
			"adaptiveHeight" : true,
			"dragThreshold" : 10,
			"percentPosition": true,
			"pageDots": true,
			"rightToLeft": false,
			"draggable": true,
			"selectedAttraction": 0.1,
			"parallax" : 0,
			"friction": 0.6        }'
		>
		


  <div class="banner has-hover has-slide-effect slide-zoom-in-fast" id="banner-75574985">
		  <div class="banner-inner fill">
		<div class="banner-bg fill" >
			<div class="bg fill bg-fill bg-loaded"></div>
									
					</div>
		<div class="banner-layers container">
			<div class="fill banner-link"></div>            

   <div id="text-box-339436843" class="text-box banner-layer x95 md-x95 lg-x95 y50 md-y50 lg-y50 res-text">
								<div class="text-box-content text ">
			  
			  <div class="text-inner text-right">
				  

<h4><span style="color: #ffffff;">Nâng cấp xe hơi chuyên nghiệp</span></h4><h2 class="uppercase"><span style="color: #ffffff;"><strong>Tiến Đạt Workshop </strong></span></h2>
<a href="#product" target="_self" class="button secondary"  >
	<span>Xem sản phẩm</span>
  </a>



			  </div>
		   </div>
							
<style>
#text-box-339436843 {
  width: 80%;
}
#text-box-339436843 .text-box-content {
  font-size: 100%;
}
@media (min-width:550px) {
  #text-box-339436843 {
	width: 100%;
  }
}
</style>
	</div>
 

		</div>
	  </div>

			
<style>
#banner-75574985 {
  padding-top: 60vh;
}
#banner-75574985 .bg.bg-loaded {
  background-image: url(https://i.ibb.co/v3QNQv5/800064.jpg);
}
</style>
  </div>



  <div class="banner has-hover has-slide-effect slide-zoom-in-fast" id="banner-1378346233">
		  <div class="banner-inner fill">
		<div class="banner-bg fill" >
			<div class="bg fill bg-fill bg-loaded"></div>
									
					</div>
		<div class="banner-layers container">
			<div class="fill banner-link"></div>            

   <div id="text-box-1583426186" class="text-box banner-layer x95 md-x95 lg-x95 y50 md-y50 lg-y50 res-text">
								<div class="text-box-content text ">
			  
			  <div class="text-inner text-right">
				  

<h4><span style="color: #ffffff;">Đồ chơi ô tô đẳng cấp</span></h4><h2 class="uppercase"><span style="color: #ffffff;"><strong>PhiPhi Performance </strong></span></h2>
<a href="#product" target="_self" class="button secondary"  >
	<span>Xem sản phẩm</span>
  </a>



			  </div>
		   </div>
							
<style>
#text-box-1583426186 {
  width: 80%;
}
#text-box-1583426186 .text-box-content {
  font-size: 100%;
}
@media (min-width:550px) {
  #text-box-1583426186 {
	width: 100%;
  }
}
</style>
	</div>
 

		</div>
	  </div>

			
<style>
#banner-1378346233 {
  padding-top: 60vh;
}
#banner-1378346233 .bg.bg-loaded {
  background-image: url(https://i.ibb.co/YBKMHkN/825374.jpg);
}
</style>
  </div>



	 </div>

	 <div class="loading-spin dark large centered"></div>

		 </div>


<div class="slider-wrapper relative show-for-small" id="slider-783026390" >
	<div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-style-normal"
		data-flickity-options='{
			"cellAlign": "center",
			"imagesLoaded": true,
			"lazyLoad": 1,
			"freeScroll": false,
			"wrapAround": true,
			"autoPlay": 6000,
			"pauseAutoPlayOnHover" : true,
			"prevNextButtons": true,
			"contain" : true,
			"adaptiveHeight" : true,
			"dragThreshold" : 10,
			"percentPosition": true,
			"pageDots": true,
			"rightToLeft": false,
			"draggable": true,
			"selectedAttraction": 0.1,
			"parallax" : 0,
			"friction": 0.6        }'
		>
		


  <div class="banner has-hover show-for-small" id="banner-1317792946">
		  <div class="banner-inner fill">
		<div class="banner-bg fill" >
			<div class="bg fill bg-fill bg-loaded"></div>
									
					</div>
		<div class="banner-layers container">
			<div class="fill banner-link"></div>            

   <div id="text-box-414556661" class="text-box banner-layer x95 md-x95 lg-x95 y50 md-y50 lg-y50 res-text">
								<div class="text-box-content text ">
			  
			  <div class="text-inner text-center">
				  

<h4><span style="color: #ffffff;">Nâng cấp xe hơi chuyên nhiệp</span></h4><h2 class="uppercase"><span style="color: #ffffff;"><strong>Tiến Đạt Workshop </strong></span></h2>
<a href="/lien-he" target="_self" class="button secondary"  >
	<span>Liên hệ ngay</span>
  </a>



			  </div>
		   </div>
							
<style>
#text-box-414556661 {
  width: 80%;
}
#text-box-414556661 .text-box-content {
  font-size: 100%;
}
@media (min-width:550px) {
  #text-box-414556661 {
	width: 100%;
  }
}
</style>
	</div>
 

		</div>
	  </div>

			
<style>
#banner-1317792946 {
  padding-top: 50%;
}
#banner-1317792946 .bg.bg-loaded {
  background-image: url(https://phiphiperformance.vn/wp-content/uploads/2020/07/phiphiperformance-baner.jpg);
}
</style>
  </div>



  <div class="banner has-hover show-for-small" id="banner-572388717">
		  <div class="banner-inner fill">
		<div class="banner-bg fill" >
			<div class="bg fill bg-fill bg-loaded"></div>
									
					</div>
		<div class="banner-layers container">
			<div class="fill banner-link"></div>            

   <div id="text-box-32740747" class="text-box banner-layer x95 md-x95 lg-x95 y50 md-y50 lg-y50 res-text">
								<div class="text-box-content text ">
			  
			  <div class="text-inner text-center">
				  

<h4><span style="color: #ffffff;">Đồ chơi ô tô đẳng cấp</span></h4><h2 class="uppercase"><span style="color: #ffffff;"><strong>Tiến Đạt Workshop </strong></span></h2>
<a href="/product" target="_self" class="button secondary"  >
	<span>Xem sản phẩm</span>
  </a>



			  </div>
		   </div>
							
<style>
#text-box-32740747 {
  width: 80%;
}
#text-box-32740747 .text-box-content {
  font-size: 100%;
}
@media (min-width:550px) {
  #text-box-32740747 {
	width: 100%;
  }
}
</style>
	</div>
 

		</div>
	  </div>

			
<style>
#banner-572388717 {
  padding-top: 50%;
}
#banner-572388717 .bg.bg-loaded {
  background-image: url(https://phiphiperformance.vn/wp-content/uploads/2020/07/phiphiperformance-baner-2.jpg);
}
</style>
  </div>



	 </div>

	 <div class="loading-spin dark large centered"></div>

		 </div>



		</div>

		
<style>
#section_950357489 {
  padding-top: 0px;
  padding-bottom: 0px;
}
</style>
	</section>
	
	<section class="section" id="section_1550990738">
		<div class="bg section-bg fill bg-fill bg-loaded bg-loaded" >

			
			
			

		</div>

		<div class="section-content relative">
			
<div class="row row-full-width"  id="row-1610784888">

	<div id="col-1540666716" class="col small-12 large-12"  >
				<div class="col-inner"  >
			
			
	<div id="text-1294001008" class="text h-title">



						<section class="section" style="padding-left : 100px; padding-top :-100px"
							id="section_1550990738">
							<div class="bg section-bg fill bg-fill bg-loaded bg-loaded">





							</div>

							<div class="section-content relative">

								<div class="row row-full-width" id="row-1610784888">

									<div id="col-1540666716" class="col small-12 large-12">
										<div class="col-inner">


											<div id="text-1294001008" class="text h-title">
												<h1 id="product" class="uppercase">Danh Mục Sản Phẩm</h1>
											</div>



											<div
												class="row large-columns-4 medium-columns-3 small-columns-2 row-collapse">
												<div class="product-category col">
													<div class="col-inner">
														<a aria-label="Visit product category Nâng Cấp Công Suất"
															href="category.php?cid=3"><span
																class="prdctfltr_cat_support"
																style="display:none!important;"
																data-slug="nang-cap-cong-suat"></span>
															<div class="box box-category has-hover box-overlay dark ">
																<div class="box-image">
																	<div class="image-zoom">
																		<img src="assets\images\banners\congsuat.jpg"
																			alt="Nâng Cấp Công Suất" width="500"
																			height="500" />
																		<div class="overlay"
																			style="background-color: 1"></div>
																	</div>
																</div>
																<div class="box-text text-left">
																	<div class="box-text-inner">
																		<h5 class="uppercase header-title">
																			Nâng Cấp Công Suất </h5>

																	</div>
																</div>
															</div>
														</a>
													</div>
												</div>
												<div class="product-category col">
													<div class="col-inner">
														<a aria-label="Visit product category Nâng Cấp Tính Năng"
															href="category.php?cid=4"><span
																class="prdctfltr_cat_support"
																style="display:none!important;"
																data-slug="nang-cap-tinh-nang"></span>
															<div class="box box-category has-hover box-overlay dark ">
																<div class="box-image">
																	<div class="image-zoom">
																		<img src="assets\images\banners\tinhnang.jpg"
																			alt="Nâng Cấp Tính Năng" width="300"
																			height="300" />
																		<div class="overlay"
																			style="background-color: 1"></div>
																	</div>
																</div>
																<div class="box-text text-left">
																	<div class="box-text-inner">
																		<h5 class="uppercase header-title">
																			Nâng Cấp Tính Năng </h5>

																	</div>
																</div>
															</div>
														</a>
													</div>
												</div>
												<div class="product-category col">
													<div class="col-inner">
														<a aria-label="Visit product category Mâm (Vành) &amp; Lốp"
															href="category.php?cid=5"><span
																class="prdctfltr_cat_support"
																style="display:none!important;"
																data-slug="mam-lop"></span>
															<div class="box box-category has-hover box-overlay dark ">
																<div class="box-image">
																	<div class="image-zoom">
																		<img src="assets\images\banners\mamlop.jpg"
																			alt="Mâm (Vành) &amp; Lốp" width="300"
																			height="300" />
																		<div class="overlay"
																			style="background-color: 1"></div>
																	</div>
																</div>
																<div class="box-text text-left">
																	<div class="box-text-inner">
																		<h5 class="uppercase header-title">
																			Mâm (Vành) &amp; Lốp </h5>

																	</div>
																</div>
															</div>
														</a>
													</div>
												</div>
												<div class="product-category col">
													<div class="col-inner">
														<a aria-label="Visit product category Khung Gầm"
															href="category.php?cid=11"><span
																class="prdctfltr_cat_support"
																style="display:none!important;"
																data-slug="khung-gam"></span>
															<div class="box box-category has-hover box-overlay dark ">
																<div class="box-image">
																	<div class="image-zoom">
																		<img src="assets\images\banners\amthanh.jpg"
																			alt="Khung Gầm" width="300" height="300" />
																		<div class="overlay"
																			style="background-color: 1"></div>
																	</div>
																</div>
																<div class="box-text text-left">
																	<div class="box-text-inner">
																		<h5 class="uppercase header-title">
																			Âm Thanh </h5>

																	</div>
																</div>
															</div>
														</a>
													</div>
												</div>
												<div class="product-category col">
													<div class="col-inner">
														<a aria-label="Visit product category Chăm Sóc Xe &amp; Dán Xe"
															href="category.php?cid=7"><span
																class="prdctfltr_cat_support"
																style="display:none!important;"
																data-slug="cham-soc-xe-dan-xe"></span>
															<div class="box box-category has-hover box-overlay dark ">
																<div class="box-image">
																	<div class="image-zoom">
																		<img src="assets\images\banners\chamsocxe.jpg"
																			alt="Chăm Sóc Xe &amp; Dán Xe" width="300"
																			height="300" />
																		<div class="overlay"
																			style="background-color: 1"></div>
																	</div>
																</div>
																<div class="box-text text-left">
																	<div class="box-text-inner">
																		<h5 class="uppercase header-title">
																			Chăm Sóc Xe &amp; Dán Xe </h5>

																	</div>
																</div>
															</div>
														</a>
													</div>
												</div>
												<div class="product-category col">
													<div class="col-inner">
														<a aria-label="Visit product category Phụ Kiện - Đồ Chơi"
															href="category.php?cid=8"><span
																class="prdctfltr_cat_support"
																style="display:none!important;"
																data-slug="phu-kien-do-choi"></span>
															<div class="box box-category has-hover box-overlay dark ">
																<div class="box-image">
																	<div class="image-zoom">
																		<img src="assets\images\banners\phukien.jpg"
																			alt="Phụ Kiện - Đồ Chơi" width="300"
																			height="300" />
																		<div class="overlay"
																			style="background-color: 1"></div>
																	</div>
																</div>
																<div class="box-text text-left">
																	<div class="box-text-inner">
																		<h5 class="uppercase header-title">
																			Phụ Kiện - Đồ Chơi </h5>

																	</div>
																</div>
															</div>
														</a>
													</div>
												</div>
												<div class="product-category col">
													<div class="col-inner">
														<a aria-label="Visit product category Bodykit"
															href="category.php?cid=9"><span
																class="prdctfltr_cat_support"
																style="display:none!important;"
																data-slug="bodykit"></span>
															<div class="box box-category has-hover box-overlay dark ">
																<div class="box-image">
																	<div class="image-zoom">
																		<img src="assets\images\banners\bodykit.jpg"
																			alt="Bodykit" width="300" height="300" />
																		<div class="overlay"
																			style="background-color: 1"></div>
																	</div>
																</div>
																<div class="box-text text-left">
																	<div class="box-text-inner">
																		<h5 class="uppercase header-title">
																			Bodykit </h5>

																	</div>
																</div>
															</div>
														</a>
													</div>
												</div>
												<div class="product-category col">
													<div class="col-inner">
														<a aria-label="Visit product category Bảo Dưỡng &amp; Phụ Tùng"
															href="category.php?cid=10"><span
																class="prdctfltr_cat_support"
																style="display:none!important;"
																data-slug="bao-duong-phu-tung"></span>
															<div class="box box-category has-hover box-overlay dark ">
																<div class="box-image">
																	<div class="image-zoom">
																		<img src="assets\images\banners\baoduong.jpg"
																			alt="Bảo Dưỡng &amp; Phụ Tùng" width="300"
																			height="300" />
																		<div class="overlay"
																			style="background-color: 1"></div>
																	</div>
																</div>
																<div class="box-text text-left">
																	<div class="box-text-inner">
																		<h5 class="uppercase header-title">
																			Bảo Dưỡng &amp; Phụ Tùng </h5>

																	</div>
																</div>
															</div>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>


								</div>
								<style>
									#section_1550990738 {
										padding-top: 30px;
										padding-bottom: 30px;
									}

									@media (min-width:550px) {
										#section_1550990738 {
											padding-top: 80px;
											padding-bottom: 80px;
										}
									}
								</style>







								<!-- ============================================== SCROLL TABS ============================================== -->
								<div id="product-tabs-slider" class="scroll-tabs inner-bottom-vs  wow fadeInUp">
									<style>
										.uppercase-1 {
											display: flex;
											justify-content: center;
											align-items: center;
											text-align: center;
											line-height: 1;
										}
									</style>
									<div class="more-info-tab clearfix">
										<h1 class="uppercase-1">Sản phẩm nổi bật</h1>
										<ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
											<li class="active"><a href="#all" data-toggle="tab">Tất cả</a></li>
											<li><a href="#books" data-toggle="tab">Sản phẩm loại A</a></li>
											<li><a href="#furniture" data-toggle="tab">Sản phẩm loại B</a></li>
										</ul><!-- /.nav-tabs -->
									</div>

									<div class="tab-content outer-top-xs">
										<div class="tab-pane in active" id="all">
											<div class="product-slider">
												<div class="owl-carousel home-owl-carousel custom-carousel owl-theme"
													data-item="4">
													<?php
													$ret = mysqli_query($con, "select * from products");
													while ($row = mysqli_fetch_array($ret)) {
														# code...
													

														?>


															<div class="item item-carousel">
																<div class="products">

																	<div class="product">
																		<div class="product-image">
																			<div class="image">
																				<a
																					href="product-details.php?pid=<?php echo htmlentities($row['id']); ?>">
																					<img src="admin/productimages/<?php echo htmlentities($row['id']); ?>/<?php echo htmlentities($row['productImage1']); ?>"
																						data-echo="admin/productimages/<?php echo htmlentities($row['id']); ?>/<?php echo htmlentities($row['productImage1']); ?>"
																						width="300" height="300" alt=""></a>
																			</div><!-- /.image -->


																		</div><!-- /.product-image -->


																		<div class="product-info text-center">
																			<div>
																			<h3 class="name"><a
																					href="product-details.php?pid=<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['productName']); ?></a></h3>
																					</div>
																		
																					<div class="rating rateit-small"></div>
																			<div class="description"></div>

																			<div class="product-price">
																				<span class="price">
																					<?php echo number_format($row['productPrice'], 0, '.', '.'); ?>₫
																				</span>
																				<span class="price-before-discount">
																					<?php echo number_format($row['productPriceBeforeDiscount'], 0, '.', '.'); ?>₫
																				</span>
																			</div>
																			<!-- /.product-price -->

																		</div><!-- /.product-info -->
																		<?php if ($row['productAvailability'] == 'In Stock') { ?>
																			<div class="action"><a
																					href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>"
																					class="lnk btn btn-primary">Thêm vào giỏ
																					hàng</a></div>
																	<?php } else { ?>
																		<div class="action" style="color:red">Hết hàng</div>
																	<?php } ?>
																	</div><!-- /.product -->

																</div><!-- /.products -->
															</div><!-- /.item -->
													<?php } ?>

												</div><!-- /.home-owl-carousel -->
											</div><!-- /.product-slider -->
										</div>






										<div class="tab-pane" id="books">
											<div class="product-slider">
												<div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
													<?php
													$ret = mysqli_query($con, "select * from products where category=3");
													while ($row = mysqli_fetch_array($ret)) {
														# code...
													

														?>


															<div class="item item-carousel">
																<div class="products">

																	<div class="product">
																		<div class="product-image">
																			<div class="image">
																				<a
																					href="product-details.php?pid=<?php echo htmlentities($row['id']); ?>">
																					<img src="admin/productimages/<?php echo htmlentities($row['id']); ?>/<?php echo htmlentities($row['productImage1']); ?>"
																						data-echo="admin/productimages/<?php echo htmlentities($row['id']); ?>/<?php echo htmlentities($row['productImage1']); ?>"
																						width="180" height="300" alt=""></a>
																			</div><!-- /.image -->


																		</div><!-- /.product-image -->


																		<div class="product-info text-left">
																			<h3 class="name"><a
																					href="product-details.php?pid=<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['productName']); ?></a></h3>
																			<div class="rating rateit-small"></div>
																			<div class="description"></div>

																			<div class="product-price">
																				<span class="price">
																					<?php echo number_format($row['productPrice'], 0, '.', '.'); ?>₫
																				</span>
																				<span class="price-before-discount">
																					<?php echo number_format($row['productPriceBeforeDiscount'], 0, '.', '.'); ?>₫
																				</span>
																			</div>
																			<!-- /.product-price -->

																		</div><!-- /.product-info -->
																		<?php if ($row['productAvailability'] == 'In Stock') { ?>
																			<div class="action"><a
																					href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>"
																					class="lnk btn btn-primary">Add to Cart</a>
																			</div>
																	<?php } else { ?>
																		<div class="action" style="color:red">Out of Stock</div>
																	<?php } ?>
																	</div><!-- /.product -->

																</div><!-- /.products -->
															</div><!-- /.item -->
													<?php } ?>


												</div><!-- /.home-owl-carousel -->
											</div><!-- /.product-slider -->
										</div>






										<div class="tab-pane" id="furniture">
											<div class="product-slider">
												<div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
													<?php
													$ret = mysqli_query($con, "select * from products where category=5");
													while ($row = mysqli_fetch_array($ret)) {
														?>


															<div class="item item-carousel">
																<div class="products">

																	<div class="product">
																		<div class="product-image">
																			<div class="image">
																				<a
																					href="product-details.php?pid=<?php echo htmlentities($row['id']); ?>">
																					<img src="admin/productimages/<?php echo htmlentities($row['id']); ?>/<?php echo htmlentities($row['productImage1']); ?>"
																						data-echo="admin/productimages/<?php echo htmlentities($row['id']); ?>/<?php echo htmlentities($row['productImage1']); ?>"
																						width="180" height="300" alt=""></a>
																			</div>


																		</div>


																		<div class="product-info text-left">
																			<h3 class="name"><a
																					href="product-details.php?pid=<?php echo htmlentities($row['id']); ?>"><?php echo htmlentities($row['productName']); ?></a></h3>
																			<div class="rating rateit-small"></div>
																			<div class="description"></div>

																			<div class="product-price">
																				<span class="price">
																					<?php echo number_format($row['productPrice'], 0, '.', '.'); ?>₫
																				</span>
																				<span class="price-before-discount">
																					<?php echo number_format($row['productPriceBeforeDiscount'], 0, '.', '.'); ?>₫
																				</span>
																			</div>


																		</div>
																		<?php if ($row['productAvailability'] == 'In Stock') { ?>
																			<div class="action"><a
																					href="index.php?page=product&action=add&id=<?php echo $row['id']; ?>"
																					class="lnk btn btn-primary">Add to Cart</a>
																			</div>
																	<?php } else { ?>
																		<div class="action" style="color:red">Out of Stock</div>
																	<?php } ?>
																	</div>

																</div>
															</div>
													<?php } ?>


												</div>
											</div>
										</div>
									</div>
								</div>


								<!-- ============================================== TABS ============================================== -->
								
								<?php include('includes/brands-slider.php'); ?>
							</div>
					</div>
					<?php include('includes/footer.php'); ?>

								


					<script src="assets/js/bootstrap.min.js"></script>
					<script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
					<script src="assets/js/owl.carousel.min.js"></script>
					<script src="assets/js/echo.min.js"></script>
					<script src="assets/js/jquery.easing-1.3.min.js"></script>
					<script src="assets/js/bootstrap-slider.min.js"></script>
					<script src="assets/js/jquery.rateit.min.js"></script>
					<script type="text/javascript" src="assets/js/lightbox.min.js"></script>
					<script src="assets/js/bootstrap-select.min.js"></script>
					<script src="assets/js/wow.min.js"></script>
					<script src="assets/js/scripts.js"></script>


					<!-- For demo purposes – can be removed on production -->

					<script src="switchstylesheet/switchstylesheet.js"></script>

					<script>
						$(document).ready(function () {
							$(".changecolor").switchstylesheet({ seperator: "color" });
							$('.show-theme-options').click(function () {
								$(this).parent().toggleClass('open');
								return false;
							});
						});

						$(window).bind("load", function () {
							$('.show-theme-options').delay(2000).trigger('click');
						});
					</script>
					<!-- For demo purposes – can be removed on production : End -->

					<script type='text/javascript' src='https://phiphiperformance.vn/wp-content/plugins/contact-form-7/includes/swv/js/index.js?ver=5.7.7' id='swv-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"api":{"root":"https:\/\/phiphiperformance.vn\/wp-json\/","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://phiphiperformance.vn/wp-content/plugins/contact-form-7/includes/js/index.js?ver=5.7.7' id='contact-form-7-js'></script>
<script type='text/javascript' id='kk-star-ratings-js-extra'>
/* <![CDATA[ */
var kk_star_ratings = {"action":"kk-star-ratings","endpoint":"https:\/\/phiphiperformance.vn\/wp-admin\/admin-ajax.php","nonce":"c19cdb4064"};
/* ]]> */
</script>
<script type='text/javascript' src='https://phiphiperformance.vn/wp-content/plugins/kk-star-ratings/src/core/public/js/kk-star-ratings.min.js?ver=5.4.3' id='kk-star-ratings-js'></script>
<script type='text/javascript' src='https://phiphiperformance.vn/wp-content/plugins/twenty20/assets/js/jquery.twenty20.js?ver=1.6.1' id='twenty20-style-js'></script>
<script type='text/javascript' src='https://phiphiperformance.vn/wp-content/plugins/twenty20/assets/js/jquery.event.move.js?ver=1.6.1' id='twenty20-eventmove-style-js'></script>
<script type='text/javascript' src='https://phiphiperformance.vn/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.7.7.2' id='jquery-blockui-js'></script>
<script type='text/javascript' id='wc-add-to-cart-js-extra'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"Xem gi\u1ecf h\u00e0ng","cart_url":"https:\/\/phiphiperformance.vn\/gio-hang\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type='text/javascript' src='https://phiphiperformance.vn/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=7.7.2' id='wc-add-to-cart-js'></script>
<script type='text/javascript' src='https://phiphiperformance.vn/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.7.7.2' id='js-cookie-js'></script>
<script type='text/javascript' id='woocommerce-js-extra'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='https://phiphiperformance.vn/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=7.7.2' id='woocommerce-js'></script>
<script type='text/javascript' id='wc-cart-fragments-js-extra'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_93ce84ddb1bd9f22a2241d579c226fb0","fragment_name":"wc_fragments_93ce84ddb1bd9f22a2241d579c226fb0","request_timeout":"5000"};
/* ]]> */
</script>
<script type='text/javascript' src='https://phiphiperformance.vn/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=7.7.2' id='wc-cart-fragments-js'></script>
<script type='text/javascript' src='https://phiphiperformance.vn/wp-includes/js/underscore.min.js?ver=1.13.4' id='underscore-js'></script>
<script type='text/javascript' id='wp-util-js-extra'>
/* <![CDATA[ */
var _wpUtilSettings = {"ajax":{"url":"\/wp-admin\/admin-ajax.php"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://phiphiperformance.vn/wp-includes/js/wp-util.min.js?ver=6.1.3' id='wp-util-js'></script>
<script type='text/javascript' id='wc-add-to-cart-variation-js-extra'>
/* <![CDATA[ */
var wc_add_to_cart_variation_params = {"wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_no_matching_variations_text":"R\u1ea5t ti\u1ebfc, kh\u00f4ng c\u00f3 s\u1ea3n ph\u1ea9m n\u00e0o ph\u00f9 h\u1ee3p v\u1edbi l\u1ef1a ch\u1ecdn c\u1ee7a b\u1ea1n. H\u00e3y ch\u1ecdn m\u1ed9t ph\u01b0\u01a1ng th\u1ee9c k\u1ebft h\u1ee3p kh\u00e1c.","i18n_make_a_selection_text":"Ch\u1ecdn c\u00e1c t\u00f9y ch\u1ecdn cho s\u1ea3n ph\u1ea9m tr\u01b0\u1edbc khi cho s\u1ea3n ph\u1ea9m v\u00e0o gi\u1ecf h\u00e0ng c\u1ee7a b\u1ea1n.","i18n_unavailable_text":"R\u1ea5t ti\u1ebfc, s\u1ea3n ph\u1ea9m n\u00e0y hi\u1ec7n kh\u00f4ng t\u1ed3n t\u1ea1i. H\u00e3y ch\u1ecdn m\u1ed9t ph\u01b0\u01a1ng th\u1ee9c k\u1ebft h\u1ee3p kh\u00e1c."};
/* ]]> */
</script>
<script type='text/javascript' src='https://phiphiperformance.vn/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart-variation.min.js?ver=7.7.2' id='wc-add-to-cart-variation-js'></script>
<script type='text/javascript' id='yith_wccl_frontend-js-extra'>
/* <![CDATA[ */
var yith_wccl_general = {"ajaxurl":"\/?wc-ajax=%%endpoint%%","actionAddCart":"yith_wccl_add_to_cart","actionVariationGallery":"yith_wccl_variation_gallery","cart_redirect":"","cart_url":"https:\/\/phiphiperformance.vn\/gio-hang\/","view_cart":"View Cart","tooltip":"","tooltip_pos":"bottom","tooltip_ani":"fade","description":"1","add_cart":"Th\u00eam v\u00e0o gi\u1ecf","grey_out":"1","image_hover":"1","wrapper_container_shop":"li.product","image_selector":"img.wp-post-image, img.attachment-woocommerce_thumbnail","enable_handle_variation_gallery":"1","plugin_compatibility_selectors":"yith-wcan-ajax-filtered yith_infs_adding_elem initialized.owl.carousel post-load ajax-tab-loaded"};
/* ]]> */
</script>
<script type='text/javascript' src='https://phiphiperformance.vn/wp-content/plugins/yith-woocommerce-color-label-variations-premium/assets/js/yith-wccl.min.js?ver=1.10.2' id='yith_wccl_frontend-js'></script>
<script type='text/javascript' src='https://phiphiperformance.vn/wp-content/themes/flatsome/inc/extensions/flatsome-instant-page/flatsome-instant-page.js?ver=1.2.1' id='flatsome-instant-page-js'></script>
<script type='text/javascript' src='https://phiphiperformance.vn/wp-includes/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.9' id='regenerator-runtime-js'></script>
<script type='text/javascript' src='https://phiphiperformance.vn/wp-includes/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0' id='wp-polyfill-js'></script>
<script type='text/javascript' src='https://phiphiperformance.vn/wp-includes/js/hoverIntent.min.js?ver=1.10.2' id='hoverIntent-js'></script>
<script type='text/javascript' id='flatsome-js-js-extra'>
/* <![CDATA[ */
var flatsomeVars = {"ajaxurl":"https:\/\/phiphiperformance.vn\/wp-admin\/admin-ajax.php","rtl":"","sticky_height":"50","assets_url":"https:\/\/phiphiperformance.vn\/wp-content\/themes\/flatsome\/assets\/js\/","lightbox":{"close_markup":"<button title=\"%title%\" type=\"button\" class=\"mfp-close\"><svg xmlns=\"http:\/\/www.w3.org\/2000\/svg\" width=\"28\" height=\"28\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-x\"><line x1=\"18\" y1=\"6\" x2=\"6\" y2=\"18\"><\/line><line x1=\"6\" y1=\"6\" x2=\"18\" y2=\"18\"><\/line><\/svg><\/button>","close_btn_inside":false},"user":{"can_edit_pages":false},"i18n":{"mainMenu":"Main Menu"},"options":{"cookie_notice_version":"1","swatches_layout":false,"swatches_box_select_event":false,"swatches_box_behavior_selected":false,"swatches_box_update_urls":"1","swatches_box_reset":false,"swatches_box_reset_extent":false,"swatches_box_reset_time":300,"search_result_latency":"0"},"is_mini_cart_reveal":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='https://phiphiperformance.vn/wp-content/themes/flatsome/assets/js/flatsome.js?ver=942e5d46e3c18336921615174a7d6798' id='flatsome-js-js'></script>
<script type='text/javascript' src='https://phiphiperformance.vn/wp-content/themes/flatsome/assets/js/woocommerce.js?ver=707a90c89eab7247f6e9e1b12f4f381b' id='flatsome-theme-woocommerce-js-js'></script>
<script src="https://phiphiperformance.vn/wp-content/plugins/ar-contactus/res/js/jquery.maskedinput.min.js?version=2.0.4"></script>
<script type="text/javascript" id="arcu-main-js">
	var zaloWidgetInterval;var tawkToInterval;var tawkToHideInterval;var skypeWidgetInterval;var lcpWidgetInterval;var closePopupTimeout;var lzWidgetInterval;var paldeskInterval;var arcuOptions;var hideCustomerChatInterval;var _arCuTimeOut=null;var arCuPromptClosed=false;var _arCuWelcomeTimeOut=null;var arCuMenuOpenedOnce=false;var arcItems=[];var Tawk_API=Tawk_API||{},Tawk_LoadStart=new Date();window.addEventListener('load',function(){jQuery('#arcontactus').remove();var $arcuWidget=jQuery('<div>',{id:'arcontactus'});jQuery('body').append($arcuWidget);arCuClosedCookie=arCuGetCookie('arcu-closed');jQuery('#arcontactus').on('arcontactus.init',function(){jQuery('#arcontactus').addClass('arcuAnimated').addClass('flipInY');setTimeout(function(){jQuery('#arcontactus').removeClass('flipInY');},1000);if(jQuery.mask&&jQuery.mask.definitions){jQuery.mask.definitions['#']="[0-9]";}
jQuery('#arcu-form-callback form').append(arCUVars._wpnonce);jQuery('#arcu-form-email form').append(arCUVars._wpnonce);jQuery('#arcontactus').on('arcontactus.successSendFormData',function(event,data){});jQuery('#arcontactus').on('arcontactus.successSendFormData',function(event,data){});jQuery('#arcontactus').on('arcontactus.errorSendFormData',function(event,data){if(data.data&&data.data.message){alert(data.data.message);}});jQuery('#arcontactus').on('arcontactus.hideFrom',function(){clearTimeout(closePopupTimeout);});});jQuery('#arcontactus').on('arcontactus.closeMenu',function(){arCuCreateCookie('arcumenu-closed',1,1);});var arcItem={};arcItem.id='msg-item-7';arcItem.class='msg-item-phone';arcItem.title="Hotline 085 3150 803";arcItem.icon='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>';arcItem.includeIconToSlider=true;arcItem.href='tel:0853150803';arcItem.color='#3EB891';arcItems.push(arcItem);var arcItem={};arcItem.id='msg-item-1';arcItem.class='msg-item-facebook-messenger';arcItem.title="Messenger";arcItem.icon='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 32C15.9 32-77.5 278 84.6 400.6V480l75.7-42c142.2 39.8 285.4-59.9 285.4-198.7C445.8 124.8 346.5 32 224 32zm23.4 278.1L190 250.5 79.6 311.6l121.1-128.5 57.4 59.6 110.4-61.1-121.1 128.5z"></path></svg>';arcItem.includeIconToSlider=true;arcItem.href='https://www.facebook.com/dat.dong.165?mibextid=LQQJ4d';arcItem.color='#0084FF';arcItems.push(arcItem);var arcItem={};arcItem.id='msg-item-10';arcItem.class='msg-item-zalo';arcItem.title="Zalo";arcItem.icon='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 460.1 436.6"><path fill="currentColor" class="st0" d="M82.6 380.9c-1.8-.8-3.1-1.7-1-3.5 1.3-1 2.7-1.9 4.1-2.8 13.1-8.5 25.4-17.8 33.5-31.5 6.8-11.4 5.7-18.1-2.8-26.5C69 269.2 48.2 212.5 58.6 145.5 64.5 107.7 81.8 75 107 46.6c15.2-17.2 33.3-31.1 53.1-42.7 1.2-.7 2.9-.9 3.1-2.7-.4-1-1.1-.7-1.7-.7-33.7 0-67.4-.7-101 .2C28.3 1.7.5 26.6.6 62.3c.2 104.3 0 208.6 0 313 0 32.4 24.7 59.5 57 60.7 27.3 1.1 54.6.2 82 .1 2 .1 4 .2 6 .2H290c36 0 72 .2 108 0 33.4 0 60.5-27 60.5-60.3v-.6-58.5c0-1.4.5-2.9-.4-4.4-1.8.1-2.5 1.6-3.5 2.6-19.4 19.5-42.3 35.2-67.4 46.3-61.5 27.1-124.1 29-187.6 7.2-5.5-2-11.5-2.2-17.2-.8-8.4 2.1-16.7 4.6-25 7.1-24.4 7.6-49.3 11-74.8 6zm72.5-168.5c1.7-2.2 2.6-3.5 3.6-4.8 13.1-16.6 26.2-33.2 39.3-49.9 3.8-4.8 7.6-9.7 10-15.5 2.8-6.6-.2-12.8-7-15.2-3-.9-6.2-1.3-9.4-1.1-17.8-.1-35.7-.1-53.5 0-2.5 0-5 .3-7.4.9-5.6 1.4-9 7.1-7.6 12.8 1 3.8 4 6.8 7.8 7.7 2.4.6 4.9.9 7.4.8 10.8.1 21.7 0 32.5.1 1.2 0 2.7-.8 3.6 1-.9 1.2-1.8 2.4-2.7 3.5-15.5 19.6-30.9 39.3-46.4 58.9-3.8 4.9-5.8 10.3-3 16.3s8.5 7.1 14.3 7.5c4.6.3 9.3.1 14 .1 16.2 0 32.3.1 48.5-.1 8.6-.1 13.2-5.3 12.3-13.3-.7-6.3-5-9.6-13-9.7-14.1-.1-28.2 0-43.3 0zm116-52.6c-12.5-10.9-26.3-11.6-39.8-3.6-16.4 9.6-22.4 25.3-20.4 43.5 1.9 17 9.3 30.9 27.1 36.6 11.1 3.6 21.4 2.3 30.5-5.1 2.4-1.9 3.1-1.5 4.8.6 3.3 4.2 9 5.8 14 3.9 5-1.5 8.3-6.1 8.3-11.3.1-20 .2-40 0-60-.1-8-7.6-13.1-15.4-11.5-4.3.9-6.7 3.8-9.1 6.9zm69.3 37.1c-.4 25 20.3 43.9 46.3 41.3 23.9-2.4 39.4-20.3 38.6-45.6-.8-25-19.4-42.1-44.9-41.3-23.9.7-40.8 19.9-40 45.6zm-8.8-19.9c0-15.7.1-31.3 0-47 0-8-5.1-13-12.7-12.9-7.4.1-12.3 5.1-12.4 12.8-.1 4.7 0 9.3 0 14v79.5c0 6.2 3.8 11.6 8.8 12.9 6.9 1.9 14-2.2 15.8-9.1.3-1.2.5-2.4.4-3.7.2-15.5.1-31 .1-46.5z"/></svg>';arcItem.includeIconToSlider=true;arcItem.href='https://zalo.me/0853150803';arcItem.color='#008DF2';arcItems.push(arcItem);var arcItem={};arcItem.id='msg-item-11';arcItem.onClick=function(e){e.preventDefault();jQuery('#arcontactus').contactUs('closeMenu');if(typeof Tawk_API=='undefined'){console.error('Tawk.to integration is disabled in module configuration');return false;}
jQuery('#arcontactus').contactUs('hide');clearInterval(tawkToHideInterval);Tawk_API.showWidget();Tawk_API.maximize();tawkToInterval=setInterval(function(){checkTawkIsOpened();},100);}
arcItem.class='msg-item-comments-alt-light';arcItem.title="Chat Ngay";arcItem.icon='<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M512 160h-96V64c0-35.3-28.7-64-64-64H64C28.7 0 0 28.7 0 64v160c0 35.3 28.7 64 64 64h32v52c0 7.1 5.8 12 12 12 2.4 0 4.9-.7 7.1-2.4L224 288h128c35.3 0 64-28.7 64-64v-32h96c17.6 0 32 14.4 32 32v160c0 17.6-14.4 32-32 32h-64v49.6l-80.2-45.4-7.3-4.2H256c-17.6 0-32-14.4-32-32v-96l-32 18.1V384c0 35.3 28.7 64 64 64h96l108.9 61.6c2.2 1.6 4.7 2.4 7.1 2.4 6.2 0 12-4.9 12-12v-52h32c35.3 0 64-28.7 64-64V224c0-35.3-28.7-64-64-64zm-128 64c0 17.6-14.4 32-32 32H215.6l-7.3 4.2-80.3 45.4V256H64c-17.6 0-32-14.4-32-32V64c0-17.6 14.4-32 32-32h288c17.6 0 32 14.4 32 32v160z"></path></svg>';arcItem.includeIconToSlider=true;arcItem.color='#03A84E';arcItems.push(arcItem);arcuOptions={wordpressPluginVersion:'2.0.4',buttonIcon:'<svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="Canvas" transform="translate(-825 -308)"><g id="Vector"><use xlink:href="#path0_fill0123" transform="translate(825 308)" fill="currentColor"></use></g></g><defs><path id="path0_fill0123" d="M 19 4L 17 4L 17 13L 4 13L 4 15C 4 15.55 4.45 16 5 16L 16 16L 20 20L 20 5C 20 4.45 19.55 4 19 4ZM 15 10L 15 1C 15 0.45 14.55 0 14 0L 1 0C 0.45 0 0 0.45 0 1L 0 15L 4 11L 14 11C 14.55 11 15 10.55 15 10Z"></path></defs></svg>',layout:'default',drag:false,mode:'regular',buttonIconUrl:'https://phiphiperformance.vn/wp-content/plugins/ar-contactus/res/img/msg.svg',showMenuHeader:false,menuHeaderText:"",menuSubheaderText:"",showHeaderCloseBtn:false,headerCloseBtnBgColor:'#CC2C12',headerCloseBtnColor:'#FFFFFF',itemsIconType:'rounded',align:'right',reCaptcha:false,reCaptchaKey:'',countdown:0,theme:'#CC2C12',buttonText:false,buttonSize:'small',buttonIconSize:16,menuSize:'large',phonePlaceholder:'',callbackSubmitText:'',errorMessage:'',callProcessText:'',callSuccessText:'',callbackFormText:'',iconsAnimationSpeed:600,iconsAnimationPause:2000,items:arcItems,ajaxUrl:'https://phiphiperformance.vn/wp-admin/admin-ajax.php',promptPosition:'top',popupAnimation:'fadeindown',style:'',itemsAnimation:'downtoup',forms:{callback:{header:{content:'Leave your phone number. We will call you back soon!',layout:'text',},icon:'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z"></path></svg>',success:'Callback request sent! We will contact you soon.',error:'Error sending callback request! Please try again!',action:'https://phiphiperformance.vn/wp-admin/admin-ajax.php',buttons:[{name:'submit',label:'Submit',type:'submit',},],fields:{formId:{name:'formId',value:'callback',type:'hidden'},action:{name:'action',value:'arcontactus_request_callback',type:'hidden'},name:{name:'name',enabled:true,required:false,type:'text',label:'Your name',placeholder:'Enter your name',values:[],value:"",},phone:{name:'phone',enabled:true,required:true,type:'tel',label:'Your phone number',placeholder:'Enter your phone number',values:[],value:"",},gdpr:{name:'gdpr',enabled:true,required:true,type:'checkbox',label:'I accept GDPR rules',placeholder:'',values:[],value:"1",},}},email:{header:{content:'Write a email to us!',layout:'text',},icon:'<svg  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z"></path></svg>',success:'Email sent! We will contact you soon.',error:'Error sending email! Please try again!',action:'https://phiphiperformance.vn/wp-admin/admin-ajax.php',buttons:[{name:'submit',label:'Submit',type:'submit',},],fields:{formId:{name:'formId',value:'email',type:'hidden'},action:{name:'action',value:'arcontactus_request_email',type:'hidden'},name:{name:'name',enabled:true,required:false,type:'text',label:'Your name',placeholder:'Enter your name',values:[],value:"",},email:{name:'email',enabled:true,required:true,type:'email',label:'Your email',placeholder:'Enter your email',values:[],value:"",},message:{name:'message',enabled:true,required:true,type:'textarea',label:'Your message',placeholder:'Enter your message',values:[],value:"",},gdpr:{name:'gdpr',enabled:true,required:true,type:'checkbox',label:'I accept GDPR rules',placeholder:'',values:[],value:"1",},}},}};jQuery('#arcontactus').contactUs(arcuOptions);Tawk_API.onLoad=function(){if(!Tawk_API.isChatOngoing()){Tawk_API.hideWidget();}else{jQuery('#arcontactus').contactUs('hide');clearInterval(tawkToHideInterval);tawkToInterval=setInterval(function(){checkTawkIsOpened();},100);}};Tawk_API.onChatMinimized=function(){Tawk_API.hideWidget();setTimeout(function(){Tawk_API.hideWidget();},100);jQuery('#arcontactus').contactUs('show');};Tawk_API.onChatEnded=function(){Tawk_API.hideWidget();setTimeout(function(){Tawk_API.hideWidget();},100);jQuery('#arcontactus').contactUs('show');};Tawk_API.onChatStarted=function(){jQuery('#arcontactus').contactUs('hide');clearInterval(tawkToHideInterval);Tawk_API.showWidget();Tawk_API.maximize();tawkToInterval=setInterval(function(){checkTawkIsOpened();},100);};(function(){var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];s1.async=true;s1.src='https://embed.tawk.to/632d423c37898912e96ad1d0/default';s1.charset='UTF-8';s1.setAttribute('crossorigin','*');s0.parentNode.insertBefore(s1,s0);})();});function checkTawkIsOpened(){if(Tawk_API.isChatMinimized()){Tawk_API.hideWidget();jQuery('#arcontactus').contactUs('show');clearInterval(tawkToInterval);}}
function tawkToHide(){tawkToHideInterval=setInterval(function(){if(typeof Tawk_API.hideWidget!='undefined'){Tawk_API.hideWidget();}},100);}
tawkToHide();</script>
	<script type="text/javascript">
		(function($){
			$('body').on('click','.title-custom',function(){
				$(this).toggleClass('ptt');
				$(this).next().toggleClass('active');
			});
			$('body').on('click','.cat-title',function(){
				$(this).parent().next().find('.cat-body').empty();
				$(this).next().toggleClass('active');
				var t = $(this).attr('data-text');
				$(this).find('.t').text(t);
			});
			$('body').on('click','.cat-item',function(e){
					 $(this).parents('.cat-c').nextAll().find('.cat-body').empty();;
					var a = $(this).parents('.cat-c').attr('data-c');
					if(a === 'not-show'){
						e.preventDefault();
					}
					$(this).parents('.cat-body.c').removeClass('active');
					$(this).parents('.cat-c').next().find('.cat-body').addClass('active');
					var cat = $(this).attr('data-cat');
					var cat_t = $(this).text();
					$(this).parents('.cat-c').find('.cat-title.c .t').text(cat_t);
						$.ajax({
							type: "post",
							url: "https://phiphiperformance.vn/wp-admin/admin-ajax.php",
							data: {
								action: 'get_subcat',
								cat : cat
							},
							context: this,
							success: function(data) {
								$(this).parents('.cat-c').next().removeClass('disable');
								$(this).parents('.cat-c').next().find('.cat-body').html(data);
							}
						});
					
			});
		})(jQuery);
	</script>
<script type="text/javascript">
	jQuery(document).ready(function ($) {
			jQuery(document).ready(function(event) {
				var m = $('.price.product-page-price ').html();
				jQuery('.single_variation_wrap').change(function(){
					$('.woocommerce-variation-price').hide();
					var p = $('.single_variation_wrap').find('.price').html();
					$('.price.product-page-price').html(p);
				});
				jQuery('body').on('click','.reset_variations',function(event) {
					$('.price.product-page-price').html(m);
				});
			});
	});
</script>
<script>
$(function() {
	$('a[href*=\\#]:not([href=\\#])').on('click', function() {
		var target = $(this.hash);
		target = target.length ? target : $('[name=' + this.hash.substr(1) +']');
		if (target.length) {
			$('html,body').animate({
				scrollTop: target.offset().top
			}, 1000);
			return false;
		}
	});
});
</script>
<script>
$(function() {
	var target = $('.bottom-content');
	if (target.length) {
		$('html,body').animate({
			scrollTop: target.offset().top
		}, 1000);
		return false;
	}
});
</script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/632d423c37898912e96ad1d0/1gdkclf9r';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>

</body>

</html>