# Example Code

## Installation

Each of these examples is written as a WordPress plugin. To see it work, you can install it into a WordPress install as you would any plugin. (Copy to `wp-content/plugins`, then activate on `wp-admin/plugins.php`).

## Usage

You normally wouldn't set up theme options in a plugin. For normal use, you would instead include this code in your theme's `functions.php`, or better, store your customizer options in a file like `inc/customizer.php`, then use `include 'inc/customizer.php';` in your theme's `functions.php`.