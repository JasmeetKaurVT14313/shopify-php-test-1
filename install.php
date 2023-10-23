<?php

// Set variables for our request
$shop = $_GET['shop'];
$api_key = "a4f7a7ef99159de419eebd00e23ded7e";
$scopes = "write_script_tags, read_script_tags, write_content, read_content, write_products, read_products, write_product_listings, read_product_listings, write_orders, read_orders";
$redirect_uri = "https://localhost/generate_token.php";

// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);

// Redirect
header("Location: " . $install_url);
die();